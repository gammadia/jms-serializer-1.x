<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$class of method Doctrine\\\\Persistence\\\\ManagerRegistry\\:\\:getManagerForClass\\(\\) expects class\\-string, string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:__construct\\(\\) has parameter \\$defaultConnection with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:__construct\\(\\) has parameter \\$defaultManager with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:getAliasNamespace\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:getAliasNamespace\\(\\) has parameter \\$alias with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:getService\\(\\) should return object but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$entityNamespaceAlias of method Doctrine\\\\ORM\\\\Configuration\\:\\:getEntityNamespace\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$name of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$defaultConnection of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$defaultManager of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:__construct\\(\\) has parameter \\$defaultConnection with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:__construct\\(\\) has parameter \\$defaultManager with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:getAliasNamespace\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:getAliasNamespace\\(\\) has parameter \\$alias with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:getService\\(\\) should return object but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$entityNamespaceAlias of method Doctrine\\\\ORM\\\\Configuration\\:\\:getEntityNamespace\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$name of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$defaultConnection of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$defaultManager of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
