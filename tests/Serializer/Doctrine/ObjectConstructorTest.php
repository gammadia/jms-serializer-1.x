<?php

namespace JMS\Serializer\Tests\Serializer\Doctrine;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\Reader;
use Doctrine\Persistence\AbstractManagerRegistry;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Tools\SchemaTool;
use Doctrine\ORM\UnitOfWork;
use Doctrine\ORM\Version as ORMVersion;
use JMS\Serializer\Builder\CallbackDriverFactory;
use JMS\Serializer\Builder\DefaultDriverFactory;
use JMS\Serializer\Construction\DoctrineObjectConstructor;
use JMS\Serializer\Construction\ObjectConstructorInterface;
use JMS\Serializer\Construction\UnserializeObjectConstructor;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\Driver\DoctrineTypeDriver;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Tests\Fixtures\Doctrine\Author;
use JMS\Serializer\Tests\Fixtures\Doctrine\Embeddable\BlogPostSeo;
use JMS\Serializer\Tests\Fixtures\Doctrine\IdentityFields\Server;
use JMS\Serializer\Tests\Fixtures\Doctrine\SingleTableInheritance\Excursion;
use JMS\Serializer\VisitorInterface;
use Doctrine\Persistence\Proxy;
use Doctrine\DBAL\Types\StringType;

class ObjectConstructorTest extends \PHPUnit\Framework\TestCase
{
    /** @var ManagerRegistry */
    private $registry;

    /** @var Serializer */
    private $serializer;

    /** @var VisitorInterface */
    private $visitor;

    /** @var DeserializationContext */
    private $context;

    public function testFindEntity()
    {
        $em = $this->registry->getManager();

        $author = new Author('John', 5);
        $em->persist($author);
        $em->flush();
        $em->clear();

        $fallback = $this->createMock(ObjectConstructorInterface::class);

        $type = array('name' => Author::class, 'params' => array());
        $class = new ClassMetadata(Author::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback);
        $authorFetched = $constructor->construct($this->visitor, $class, ['id' => 5], $type, $this->context);

        $this->assertEquals($author, $authorFetched);
    }

    public function testFindManagedEntity()
    {
        $em = $this->registry->getManager();

        $author = new Author('John', 5);
        $em->persist($author);
        $em->flush();

        $fallback = $this->createMock(ObjectConstructorInterface::class);

        $type = array('name' => Author::class, 'params' => array());
        $class = new ClassMetadata(Author::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback);
        $authorFetched = $constructor->construct($this->visitor, $class, ['id' => 5], $type, $this->context);

        $this->assertSame($author, $authorFetched);
    }

    public function testMissingAuthor()
    {
        $fallback = $this->createMock(ObjectConstructorInterface::class);

        $type = array('name' => Author::class, 'params' => array());
        $class = new ClassMetadata(Author::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback);
        $author = $constructor->construct($this->visitor, $class, ['id' => 5], $type, $this->context);
        $this->assertNull($author);
    }

    public function testMissingAuthorFallback()
    {
        $author = new Author('John');

        $fallback = $this->createMock(ObjectConstructorInterface::class);
        $fallback->expects($this->once())->method('construct')->willReturn($author);

        $type = array('name' => Author::class, 'params' => array());
        $class = new ClassMetadata(Author::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback, DoctrineObjectConstructor::ON_MISSING_FALLBACK);
        $authorFetched = $constructor->construct($this->visitor, $class, ['id' => 5], $type, $this->context);
        $this->assertSame($author, $authorFetched);
    }

    public function testMissingNotManaged()
    {
        $author = new \JMS\Serializer\Tests\Fixtures\DoctrinePHPCR\Author('foo');

        $fallback = $this->createMock(ObjectConstructorInterface::class);
        $fallback->expects($this->once())->method('construct')->willReturn($author);

        $type = array('name' => Author::class, 'params' => array());
        $class = new ClassMetadata(Author::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback, DoctrineObjectConstructor::ON_MISSING_FALLBACK);
        $authorFetched = $constructor->construct($this->visitor, $class, ['id' => 5], $type, $this->context);
        $this->assertSame($author, $authorFetched);
    }

    public function testReference()
    {
        $em = $this->registry->getManager();

        $author = new Author('John', 5);
        $em->persist($author);
        $em->flush();

        $fallback = $this->createMock(ObjectConstructorInterface::class);

        $type = array('name' => Author::class, 'params' => array());
        $class = new ClassMetadata(Author::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback, DoctrineObjectConstructor::ON_MISSING_FALLBACK);
        $authorFetched = $constructor->construct($this->visitor, $class, 5, $type, $this->context);
        $this->assertSame($author, $authorFetched);
    }

    public function testMissingAuthorException()
    {
        $this->expectException(\JMS\Serializer\Exception\ObjectConstructionException::class);
        $fallback = $this->createMock(ObjectConstructorInterface::class);

        $type = array('name' => Author::class, 'params' => array());
        $class = new ClassMetadata(Author::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback, DoctrineObjectConstructor::ON_MISSING_EXCEPTION);
        $constructor->construct($this->visitor, $class, ['id' => 5], $type, $this->context);
    }

    public function testInvalidArg()
    {
        $this->expectException(\JMS\Serializer\Exception\InvalidArgumentException::class);
        $fallback = $this->createMock(ObjectConstructorInterface::class);

        $type = array('name' => Author::class, 'params' => array());
        $class = new ClassMetadata(Author::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback, 'foo');
        $constructor->construct($this->visitor, $class, ['id' => 5], $type, $this->context);
    }

    public function testMissingData()
    {
        $author = new Author('John');

        $fallback = $this->createMock(ObjectConstructorInterface::class);
        $fallback->expects($this->once())->method('construct')->willReturn($author);

        $type = array('name' => Author::class, 'params' => array());
        $class = new ClassMetadata(Author::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback, 'foo');
        $authorFetched = $constructor->construct($this->visitor, $class, ['foo' => 5], $type, $this->context);
        $this->assertSame($author, $authorFetched);
    }

    public function testNamingForIdentifierColumnIsConsidered()
    {
        $serializer = $this->createSerializerWithDoctrineObjectConstructor();

        /** @var EntityManager $em */
        $em = $this->registry->getManager();
        $server = new Server('Linux', '127.0.0.1', 'home');
        $em->persist($server);
        $em->flush();
        $em->clear();

        $jsonData = '{"ip_address":"127.0.0.1", "server_id_extracted":"home", "name":"Windows"}';
        /** @var Server $serverDeserialized */
        $serverDeserialized = $serializer->deserialize($jsonData, Server::class, 'json');

        static::assertSame(
            $em->getUnitOfWork()->getEntityState($serverDeserialized),
            UnitOfWork::STATE_MANAGED
        );
    }

    public function testFallbackOnEmbeddableClassWithXmlDriver(): void
    {
        if (ORMVersion::compare('2.5') >= 0) {
            $this->markTestSkipped('Not using Doctrine ORM >= 2.5 with Embedded entities');
        }

        $fallback = $this->getMockBuilder(ObjectConstructorInterface::class)->getMock();
        $fallback->expects($this->once())->method('construct');

        $connection = $this->createConnection();
        $entityManager = $this->createXmlEntityManager($connection);

        $this->registry = new SimpleBaseManagerRegistry(
            static function ($id) use ($connection, $entityManager) {
                switch ($id) {
                    case 'default_connection':
                        return $connection;

                    case 'default_manager':
                        return $entityManager;

                    default:
                        throw new \RuntimeException(sprintf('Unknown service id "%s".', $id));
                }
            }
        );

        $type = array('name' => BlogPostSeo::class, 'params' => array());
        $class = new ClassMetadata(BlogPostSeo::class);

        $constructor = new DoctrineObjectConstructor($this->registry, $fallback, DoctrineObjectConstructor::ON_MISSING_FALLBACK);
        $constructor->construct($this->visitor, $class, array('metaTitle' => 'test'), $type, $this->context);
    }

    protected function setUp(): void
    {
        $this->visitor = $this->createMock(\JMS\Serializer\VisitorInterface::class);
        $this->context = $this->createMock(\JMS\Serializer\DeserializationContext::class);

        $connection = $this->createConnection();
        $entityManager = $this->createEntityManager($connection);

        $this->registry = $registry = new SimpleBaseManagerRegistry(
            function ($id) use ($connection, $entityManager) {
                switch ($id) {
                    case 'default_connection':
                        return $connection;

                    case 'default_manager':
                        return $entityManager;

                    default:
                        throw new \RuntimeException(sprintf('Unknown service id "%s".', $id));
                }
            }
        );

        $this->serializer = SerializerBuilder::create()
            ->setMetadataDriverFactory(new CallbackDriverFactory(
                function (array $metadataDirs, Reader $annotationReader) use ($registry) {
                    $defaultFactory = new DefaultDriverFactory();

                    return new DoctrineTypeDriver($defaultFactory->createDriver($metadataDirs, $annotationReader), $registry);
                }
            ))
            ->build();

        $this->prepareDatabase();
    }

    private function prepareDatabase()
    {
        /** @var EntityManager $em */
        $em = $this->registry->getManager();

        $tool = new SchemaTool($em);
        $tool->createSchema($em->getMetadataFactory()->getAllMetadata());
    }

    private function createConnection()
    {
        $con = DriverManager::getConnection(array(
            'driver' => 'pdo_sqlite',
            'memory' => true,
        ));

        return $con;
    }

    private function createEntityManager(Connection $con, ?Configuration $cfg = null)
    {
        if (!$cfg) {
            $cfg = new Configuration();
            $cfg->setMetadataDriverImpl(new AnnotationDriver(new AnnotationReader(), array(
                __DIR__ . '/../../Fixtures/Doctrine',
            )));
        }

        $cfg->setAutoGenerateProxyClasses(true);
        $cfg->setProxyNamespace('JMS\Serializer\DoctrineProxy');
        $cfg->setProxyDir(sys_get_temp_dir() . '/serializer-test-proxies');

        $em = EntityManager::create($con, $cfg);

        return $em;
    }

    /**
     * @param Connection $con
     *
     * @return EntityManager
     */
    private function createXmlEntityManager(Connection $con)
    {
        $cfg = new Configuration();
        $cfg->setMetadataDriverImpl(new XmlDriver(array(
            __DIR__ . '/../../Fixtures/Doctrine/XmlMapping',
        )));

        return $this->createEntityManager($con, $cfg);
    }

    /**
     * @return \JMS\Serializer\SerializerInterface
     */
    private function createSerializerWithDoctrineObjectConstructor()
    {
        return SerializerBuilder::create()
            ->setObjectConstructor(
                new DoctrineObjectConstructor(
                    $this->registry,
                    new UnserializeObjectConstructor(),
                    DoctrineObjectConstructor::ON_MISSING_FALLBACK
                )
            )
            ->addDefaultHandlers()
            ->build();
    }
}

\Doctrine\DBAL\Types\Type::addType('Author', StringType::class);
\Doctrine\DBAL\Types\Type::addType('some_custom_type', StringType::class);

class SimpleBaseManagerRegistry extends AbstractManagerRegistry
{
    private $services = array();
    private $serviceCreator;

    public function __construct($serviceCreator, $name = 'anonymous', array $connections = array('default' => 'default_connection'), array $managers = array('default' => 'default_manager'), $defaultConnection = null, $defaultManager = null, $proxyInterface = Proxy::class)
    {
        if (null === $defaultConnection) {
            $defaultConnection = key($connections);
        }
        if (null === $defaultManager) {
            $defaultManager = key($managers);
        }

        parent::__construct($name, $connections, $managers, $defaultConnection, $defaultManager, $proxyInterface);

        if (!is_callable($serviceCreator)) {
            throw new \InvalidArgumentException('$serviceCreator must be a valid callable.');
        }
        $this->serviceCreator = $serviceCreator;
    }

    public function getService($name)
    {
        if (isset($this->services[$name])) {
            return $this->services[$name];
        }

        return $this->services[$name] = call_user_func($this->serviceCreator, $name);
    }

    public function resetService($name)
    {
        unset($this->services[$name]);
    }

    public function getAliasNamespace($alias)
    {
        foreach (array_keys($this->getManagers()) as $name) {
            $manager = $this->getManager($name);

            if ($manager instanceof EntityManager) {
                try {
                    return $manager->getConfiguration()->getEntityNamespace($alias);
                } catch (ORMException $ex) {
                    // Probably mapped by another entity manager, or invalid, just ignore this here.
                }
            } else {
                throw new \LogicException(sprintf('Unsupported manager type "%s".', get_class($manager)));
            }
        }

        throw new \RuntimeException(sprintf('The namespace alias "%s" is not known to any manager.', $alias));
    }
}
