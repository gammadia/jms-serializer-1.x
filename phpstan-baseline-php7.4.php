<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/AbstractVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/AbstractVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\AbstractVisitor\\:\\:__construct\\(\\) has parameter \\$namingStrategy with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/AbstractVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\AbstractVisitor\\:\\:getElementType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/AbstractVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\AbstractVisitor\\:\\:getElementType\\(\\) has parameter \\$typeArray with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/AbstractVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\AbstractVisitor\\:\\:\\$namingStrategy has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/AbstractVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:setValue\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Accessor/DefaultAccessorStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Annotation\\\\Exclude\\:\\:\\$if has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/Exclude.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Annotation\\\\ExclusionPolicy\\:\\:__construct\\(\\) has parameter \\$values with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/ExclusionPolicy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Annotation\\\\ExclusionPolicy\\:\\:\\$policy has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/ExclusionPolicy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Annotation\\\\Expose\\:\\:\\$if has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/Expose.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Annotation\\\\SerializedName\\:\\:__construct\\(\\) has parameter \\$values with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/SerializedName.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Annotation\\\\SerializedName\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/SerializedName.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Annotation\\\\VirtualProperty\\:\\:__construct\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/VirtualProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Annotation\\\\VirtualProperty\\:\\:\\$exp has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/VirtualProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Annotation\\\\VirtualProperty\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/VirtualProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Annotation\\\\VirtualProperty\\:\\:\\$options has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Annotation/VirtualProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\ArrayTransformerInterface\\:\\:fromArray\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/ArrayTransformerInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\ArrayTransformerInterface\\:\\:toArray\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/ArrayTransformerInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Builder\\\\CallbackDriverFactory\\:\\:createDriver\\(\\) has parameter \\$metadataDirs with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Builder/CallbackDriverFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Builder/CallbackDriverFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Builder\\\\CallbackDriverFactory\\:\\:\\$callback has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Builder/CallbackDriverFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Builder\\\\DefaultDriverFactory\\:\\:createDriver\\(\\) has parameter \\$metadataDirs with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Builder/DefaultDriverFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Builder\\\\DriverFactoryInterface\\:\\:createDriver\\(\\) has parameter \\$metadataDirs with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Builder/DriverFactoryInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method construct\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 5,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method find\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getClassMetadata\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getIdentifierFieldNames\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getManagerForClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMetadataFactory\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getReference\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method initializeObject\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isTransient\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Construction\\\\DoctrineObjectConstructor\\:\\:construct\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Construction\\\\DoctrineObjectConstructor\\:\\:construct\\(\\) should return object but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 7,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Construction\\\\DoctrineObjectConstructor\\:\\:construct\\(\\) should return object but returns null\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$key of function array_key_exists expects int\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$property of method JMS\\\\Serializer\\\\Naming\\\\PropertyNamingStrategyInterface\\:\\:translateName\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Construction\\\\DoctrineObjectConstructor\\:\\:\\$fallbackConstructor has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Construction\\\\DoctrineObjectConstructor\\:\\:\\$managerRegistry has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/DoctrineObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Construction\\\\ObjectConstructorInterface\\:\\:construct\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/ObjectConstructorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Construction\\\\UnserializeObjectConstructor\\:\\:construct\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/UnserializeObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$className of method Doctrine\\\\Instantiator\\\\Instantiator\\:\\:instantiate\\(\\) expects class\\-string\\<object\\>, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/UnserializeObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Unable to resolve the template type T in call to method Doctrine\\\\Instantiator\\\\Instantiator\\:\\:instantiate\\(\\)$#',
	'identifier' => 'argument.templateType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Construction/UnserializeObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:accept\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:accept\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:addExclusionStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:assertMutable\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:enableMaxDepthChecks\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getAttribute\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getAttribute\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getCurrentPath\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getDepth\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getExclusionStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getFormat\\(\\) should return string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getMetadataFactory\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getMetadataStack\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getNavigator\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:getVisitor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:hasAttribute\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:hasAttribute\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:initialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:popClassMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:popPropertyMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:pushClassMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:pushPropertyMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:setAttribute\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:setAttribute\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:setAttribute\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:setGroups\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:setGroups\\(\\) has parameter \\$groups with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Context\\:\\:setVersion\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'identifier' => 'booleanNot.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$delegates of class JMS\\\\Serializer\\\\Exclusion\\\\DisjunctExclusionStrategy constructor expects iterable\\<JMS\\\\Serializer\\\\Exclusion\\\\ExclusionStrategyInterface\\>&PhpCollection\\\\SequenceInterface, array\\<int, JMS\\\\Serializer\\\\Exclusion\\\\ExclusionStrategyInterface\\> given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Context\\:\\:\\$format has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Context\\:\\:\\$initialized has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Context\\:\\:\\$metadataFactory \\(Metadata\\\\MetadataFactory\\) does not accept Metadata\\\\MetadataFactoryInterface\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Context\\:\\:\\$metadataStack with generic class SplStack does not specify its types\\: TValue$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between null and int will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Context.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\ContextFactory\\\\CallableDeserializationContextFactory\\:\\:createDeserializationContext\\(\\) should return JMS\\\\Serializer\\\\DeserializationContext but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/ContextFactory/CallableDeserializationContextFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\ContextFactory\\\\CallableSerializationContextFactory\\:\\:createSerializationContext\\(\\) should return JMS\\\\Serializer\\\\SerializationContext but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/ContextFactory/CallableSerializationContextFactory.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\+\\=" between mixed and 1 results in an error\\.$#',
	'identifier' => 'assignOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/DeserializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\-\\=" between mixed and 1 results in an error\\.$#',
	'identifier' => 'assignOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/DeserializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\DeserializationContext\\:\\:create\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/DeserializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\DeserializationContext\\:\\:decreaseDepth\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/DeserializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\DeserializationContext\\:\\:getDepth\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/DeserializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\DeserializationContext\\:\\:increaseDepth\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/DeserializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\DeserializationContext\\:\\:\\$depth has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/DeserializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getVisitor\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:__construct\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:getContext\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:getType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:getVisitor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:stopPropagation\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:\\$context has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:\\$type has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Event.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'class\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'event\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'format\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'method\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 2 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 21,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:getDefaultMethodName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:getDefaultMethodName\\(\\) has parameter \\$eventName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:initializeListeners\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:setListeners\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:setListeners\\(\\) has parameter \\$listeners with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtolower expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\<string\\>\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:\\$classListeners has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:\\$listeners has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\EventSubscriberInterface\\:\\:getSubscribedEvents\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/EventSubscriberInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method get\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/LazyEventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method has\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/LazyEventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between mixed and Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/LazyEventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcher\\:\\:__construct\\(\\) has parameter \\$container with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/LazyEventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcher\\:\\:initializeListeners\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/LazyEventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcher\\:\\:\\$container has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/LazyEventDispatcher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\ObjectEvent\\:\\:__construct\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/ObjectEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\ObjectEvent\\:\\:__construct\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/ObjectEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\ObjectEvent\\:\\:getObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/ObjectEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\EventDispatcher\\\\ObjectEvent\\:\\:\\$object has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/ObjectEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreDeserializeEvent\\:\\:__construct\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreDeserializeEvent\\:\\:__construct\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreDeserializeEvent\\:\\:getData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreDeserializeEvent\\:\\:setData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreDeserializeEvent\\:\\:setData\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreDeserializeEvent\\:\\:setType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreDeserializeEvent\\:\\:setType\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreDeserializeEvent\\:\\:setType\\(\\) has parameter \\$params with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\EventDispatcher\\\\PreDeserializeEvent\\:\\:\\$data has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreDeserializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreSerializeEvent\\:\\:setType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreSerializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\PreSerializeEvent\\:\\:setType\\(\\) has parameter \\$params with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/PreSerializeEvent.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'params\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getExclusionStrategy\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMetadataFactory\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMetadataForClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method shouldSkipClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Class Doctrine\\\\ODM\\\\MongoDB\\\\PersistentCollection not found\\.$#',
	'identifier' => 'class.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriber\\:\\:__construct\\(\\) has parameter \\$initializeExcluded with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriber\\:\\:__construct\\(\\) has parameter \\$skipVirtualTypeInit with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriber\\:\\:getSubscribedEvents\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriber\\:\\:onPreSerialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriber\\:\\:onPreSerializeTypedProxy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriber\\:\\:onPreSerializeTypedProxy\\(\\) has parameter \\$class with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriber\\:\\:onPreSerializeTypedProxy\\(\\) has parameter \\$eventName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriber\\:\\:onPreSerializeTypedProxy\\(\\) has parameter \\$format with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$classname of function class_exists expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$context of class JMS\\\\Serializer\\\\EventDispatcher\\\\PreSerializeEvent constructor expects JMS\\\\Serializer\\\\Context, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$eventName of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherInterface\\:\\:dispatch\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtolower expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$typeName of method JMS\\\\Serializer\\\\EventDispatcher\\\\PreSerializeEvent\\:\\:setType\\(\\) expects string, class\\-string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$typeName of method JMS\\\\Serializer\\\\EventDispatcher\\\\PreSerializeEvent\\:\\:setType\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$params of method JMS\\\\Serializer\\\\EventDispatcher\\\\PreSerializeEvent\\:\\:setType\\(\\) expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$format of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherInterface\\:\\:dispatch\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:getObject\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$attributes on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method count\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method get\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getDepth\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method map\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method validate\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriber\\:\\:getSubscribedEvents\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriber\\:\\:onPostDeserialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$list of class JMS\\\\Serializer\\\\Exception\\\\ValidationFailedException constructor expects Symfony\\\\Component\\\\Validator\\\\ConstraintViolationListInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriber\\:\\:\\$validator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:getObject\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$attributes on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method get\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 6,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getDepth\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorValidatorSubscriber\\:\\:getSubscribedEvents\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorValidatorSubscriber\\:\\:onPostDeserialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$constraints of method Symfony\\\\Component\\\\Validator\\\\Validator\\\\ValidatorInterface\\:\\:validate\\(\\) expects array\\<Symfony\\\\Component\\\\Validator\\\\Constraint\\>\\|Symfony\\\\Component\\\\Validator\\\\Constraint\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$groups of method Symfony\\\\Component\\\\Validator\\\\Validator\\\\ValidatorInterface\\:\\:validate\\(\\) expects array\\<string\\|Symfony\\\\Component\\\\Validator\\\\Constraints\\\\GroupSequence\\>\\|string\\|Symfony\\\\Component\\\\Validator\\\\Constraints\\\\GroupSequence\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriber.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exception\\\\XmlErrorException\\:\\:getXmlError\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exception/XmlErrorException.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Exception\\\\XmlErrorException\\:\\:\\$xmlError has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exception/XmlErrorException.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\-" between mixed and 1 results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DepthExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\-" between mixed and int\\<1, max\\> results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DepthExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \\(float\\|int\\<1, max\\>\\) on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DepthExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method count\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DepthExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\DepthExclusionStrategy\\:\\:isTooDeep\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DepthExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\DepthExclusionStrategy\\:\\:shouldSkipClass\\(\\) should return bool but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DepthExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\DepthExclusionStrategy\\:\\:shouldSkipProperty\\(\\) should return bool but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DepthExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method shouldSkipClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DisjunctExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method shouldSkipProperty\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DisjunctExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between iterable\\<JMS\\\\Serializer\\\\Exclusion\\\\ExclusionStrategyInterface\\>&PhpCollection\\\\SequenceInterface and PhpCollection\\\\SequenceInterface will always evaluate to true\\.$#',
	'identifier' => 'instanceof.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DisjunctExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\DisjunctExclusionStrategy\\:\\:addStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DisjunctExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$delegate ExclusionStrategyInterface\\)\\: Unexpected token "\\$delegate", expected type at offset 9 on line 1$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DisjunctExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Exclusion\\\\DisjunctExclusionStrategy\\:\\:\\$delegates type has no value type specified in iterable type PhpCollection\\\\SequenceInterface\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/DisjunctExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\ExpressionLanguageExclusionStrategy\\:\\:shouldSkipProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/ExpressionLanguageExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$expression of method JMS\\\\Serializer\\\\Expression\\\\ExpressionEvaluatorInterface\\:\\:evaluate\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/ExpressionLanguageExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\+\\=" between mixed and array\\{\'Default\'\\} results in an error\\.$#',
	'identifier' => 'assignOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'Default\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:__construct\\(\\) has parameter \\$groups with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:getGroupsFor\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:getGroupsFor\\(\\) should return array but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:shouldSkipProperty\\(\\) should return bool but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:shouldSkipUsingGroups\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:shouldSkipUsingGroups\\(\\) has parameter \\$groups with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_filter expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_keys expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$key of function array_key_exists expects int\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of function in_array expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$search of function array_key_exists expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:\\$groups has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:\\$nestedGroups has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/GroupsExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Exclusion\\\\VersionExclusionStrategy\\:\\:__construct\\(\\) has parameter \\$version with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/VersionExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$version1 of function version_compare expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/VersionExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$version2 of function version_compare expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/VersionExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Exclusion\\\\VersionExclusionStrategy\\:\\:\\$version has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Exclusion/VersionExclusionStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_string\\(\\) with string will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Expression/ExpressionEvaluator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Expression\\\\ExpressionEvaluator\\:\\:__construct\\(\\) has parameter \\$cache with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Expression/ExpressionEvaluator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Expression\\\\ExpressionEvaluator\\:\\:__construct\\(\\) has parameter \\$context with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Expression/ExpressionEvaluator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Expression\\\\ExpressionEvaluator\\:\\:evaluate\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Expression/ExpressionEvaluator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Expression\\\\ExpressionEvaluator\\:\\:setContextVariable\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Expression/ExpressionEvaluator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$expression of method Symfony\\\\Component\\\\ExpressionLanguage\\\\ExpressionLanguage\\:\\:evaluate\\(\\) expects string\\|Symfony\\\\Component\\\\ExpressionLanguage\\\\Expression, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Expression/ExpressionEvaluator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Expression\\\\ExpressionEvaluator\\:\\:\\$cache type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Expression/ExpressionEvaluator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Expression\\\\ExpressionEvaluator\\:\\:\\$context type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Expression/ExpressionEvaluator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Expression\\\\ExpressionEvaluatorInterface\\:\\:evaluate\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Expression/ExpressionEvaluatorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$class on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method accept\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method pop\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method push\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method translateName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to float\\.$#',
	'identifier' => 'cast.double',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot use array destructuring on mixed\\.$#',
	'identifier' => 'offsetAccess.nonArray',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:decode\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:decode\\(\\) has parameter \\$str with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:endVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:getCurrentObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:getNavigator\\(\\) should return JMS\\\\Serializer\\\\GraphNavigator but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:getResult\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:getResult\\(\\) should return array\\|bool\\|float\\|int\\|object\\|string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:revertCurrentObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:setCurrentObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:setCurrentObject\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:startVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:visitArray\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:visitBoolean\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:visitDouble\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:visitInteger\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:visitNull\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:visitString\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$key of function array_key_exists expects int\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method JMS\\\\Serializer\\\\Accessor\\\\AccessorStrategyInterface\\:\\:setValue\\(\\) expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:\\$currentObject has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:\\$navigator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:\\$objectStack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GenericDeserializationVisitor\\:\\:\\$result has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method accept\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method count\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method pop\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method push\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method translateName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to float\\.$#',
	'identifier' => 'cast.double',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:addData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:addData\\(\\) has parameter \\$value with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:endVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:getNavigator\\(\\) should return JMS\\\\Serializer\\\\GraphNavigator but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:getRoot\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:setData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:setData\\(\\) has parameter \\$value with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:setRoot\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:setRoot\\(\\) has parameter \\$data with generic class ArrayObject but does not specify its types\\: TKey, TValue$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:startVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:visitArray\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:visitArray\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:visitBoolean\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:visitDouble\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:visitInteger\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:visitNull\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:visitString\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$arr1 of function array_merge expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method JMS\\\\Serializer\\\\Accessor\\\\AccessorStrategyInterface\\:\\:getValue\\(\\) expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:\\$data has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:\\$dataStack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:\\$navigator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GenericSerializationVisitor\\:\\:\\$root has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GenericSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property object\\:\\:\\$discriminatorBaseClass\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \' Path\\: \' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method object\\:\\:attributes\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method object\\:\\:children\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_subclass_of\\(\\) with arguments stdClass, class\\-string and false will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset int on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$discriminatorMap on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$handlerCallbacks on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$name on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$preSerializeMethods on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$propertyMetadata on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$readOnly on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$usingExpression on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method construct\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method dispatch\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method endVisitingObject\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMetadataForClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method hasListeners\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method invoke\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method shouldSkipClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method shouldSkipProperty\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method startVisitingObject\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method visitArray\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method visitBoolean\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method visitDouble\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method visitInteger\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method visitNull\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method visitProperty\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method visitString\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 5,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GraphNavigator\\:\\:accept\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GraphNavigator\\:\\:afterVisitingObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GraphNavigator\\:\\:afterVisitingObject\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GraphNavigator\\:\\:afterVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GraphNavigator\\:\\:leaveScope\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GraphNavigator\\:\\:leaveScope\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GraphNavigator\\:\\:resolveMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GraphNavigator\\:\\:resolveMetadata\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'identifier' => 'booleanNot.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$metadata ClassMetadata\\)\\: Unexpected token "\\$metadata", expected type at offset 9 on line 1$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$classname of function class_exists expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$classname of function interface_exists expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_keys expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$metadata of method JMS\\\\Serializer\\\\Context\\:\\:pushClassMetadata\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$metadata of method JMS\\\\Serializer\\\\Context\\:\\:pushPropertyMetadata\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$metadata of method JMS\\\\Serializer\\\\GraphNavigator\\:\\:afterVisitingObject\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$metadata of method JMS\\\\Serializer\\\\GraphNavigator\\:\\:afterVisitingObject\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata, object given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of function get_class expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method ReflectionMethod\\:\\:invoke\\(\\) expects object\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$property of method JMS\\\\Serializer\\\\Exclusion\\\\ExpressionLanguageExclusionStrategy\\:\\:shouldSkipProperty\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$metadata of method JMS\\\\Serializer\\\\GraphNavigator\\:\\:resolveMetadata\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata, object given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$type of method JMS\\\\Serializer\\\\GraphNavigator\\:\\:afterVisitingObject\\(\\) expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Part \\$metadata\\-\\>name \\(mixed\\) of encapsed string cannot be cast to string\\.$#',
	'identifier' => 'encapsedStringPart.nonString',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GraphNavigator\\:\\:\\$dispatcher has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GraphNavigator\\:\\:\\$handlerRegistry has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GraphNavigator\\:\\:\\$metadataFactory has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\GraphNavigator\\:\\:\\$objectConstructor has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'identifier' => 'booleanAnd.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigator.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\GraphNavigatorInterface\\:\\:accept\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/GraphNavigatorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMetadataForClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method shouldSkipClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Class Doctrine\\\\ODM\\\\MongoDB\\\\PersistentCollection not found\\.$#',
	'identifier' => 'class.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ArrayCollectionHandler\\:\\:__construct\\(\\) has parameter \\$initializeExcluded with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ArrayCollectionHandler\\:\\:deserializeCollection\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ArrayCollectionHandler\\:\\:deserializeCollection\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ArrayCollectionHandler\\:\\:deserializeCollection\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ArrayCollectionHandler\\:\\:getSubscribingMethods\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ArrayCollectionHandler\\:\\:serializeCollection\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ArrayCollectionHandler\\:\\:serializeCollection\\(\\) has parameter \\$collection with generic interface Doctrine\\\\Common\\\\Collections\\\\Collection but does not specify its types\\: TKey, T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ArrayCollectionHandler\\:\\:serializeCollection\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$elements of class Doctrine\\\\Common\\\\Collections\\\\ArrayCollection constructor expects array\\<TKey of \\(int\\|string\\), T\\>, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Handler\\\\ArrayCollectionHandler\\:\\:\\$initializeExcluded \\(bool\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ArrayCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method appendChild\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createCDATASection\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createElement\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setAttribute\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:getSubscribingMethods\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeListToJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeListToJson\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeListToXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeListToXml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeListToYml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeListToYml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeViolationToJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeViolationToJson\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeViolationToXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeViolationToXml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeViolationToYml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeViolationToYml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$violation of method JMS\\\\Serializer\\\\Handler\\\\ConstraintViolationHandler\\:\\:serializeViolationToXml\\(\\) expects Symfony\\\\Component\\\\Validator\\\\ConstraintViolation, Symfony\\\\Component\\\\Validator\\\\ConstraintViolationInterface given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/ConstraintViolationHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'nil\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 2 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method attributes\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:__construct\\(\\) has parameter \\$defaultFormat with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:__construct\\(\\) has parameter \\$defaultTimezone with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:__construct\\(\\) has parameter \\$xmlCData with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateIntervalFromJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateIntervalFromJson\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateIntervalFromJson\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateIntervalFromXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateIntervalFromXml\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateIntervalFromXml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeFromJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeFromJson\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeFromJson\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeFromXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeFromXml\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeFromXml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeImmutableFromJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeImmutableFromJson\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeImmutableFromJson\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeImmutableFromXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeImmutableFromXml\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:deserializeDateTimeImmutableFromXml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:getDeserializationFormat\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:getDeserializationFormat\\(\\) should return string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:getFormat\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:getFormat\\(\\) should return string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:getSubscribingMethods\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:isDataXmlNull\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:isDataXmlNull\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:parseDateInterval\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:parseDateInterval\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:parseDateTime\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:parseDateTime\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:parseDateTime\\(\\) has parameter \\$immutable with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:parseDateTime\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:serializeDateInterval\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:serializeDateInterval\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:serializeDateTime\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:serializeDateTime\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:serializeDateTimeImmutable\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:serializeDateTimeImmutable\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:serializeDateTimeInterface\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:serializeDateTimeInterface\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$duration of class DateInterval constructor expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$timezone of class DateTimeZone constructor expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$timezone of method DateTime\\:\\:setTimezone\\(\\) expects DateTimeZone, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$code of class JMS\\\\Serializer\\\\Exception\\\\RuntimeException constructor expects int, null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$timezone of static method DateTime\\:\\:createFromFormat\\(\\) expects DateTimeZone\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$timezone of static method DateTimeImmutable\\:\\:createFromFormat\\(\\) expects DateTimeZone\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:\\$defaultFormat has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:\\$defaultTimezone has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Handler\\\\DateHandler\\:\\:\\$xmlCData has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/DateHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^ArrayObject\\<\\*NEVER\\*, \\*NEVER\\*\\> does not accept array\\<string, mixed\\>\\.$#',
	'identifier' => 'offsetAssign.valueType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^ArrayObject\\<\\*NEVER\\*, \\*NEVER\\*\\> does not accept list\\.$#',
	'identifier' => 'offsetAssign.valueType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\VisitorInterface\\:\\:getRoot\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\VisitorInterface\\:\\:setRoot\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method appendChild\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 5,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createCDATASection\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createElement\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setAttribute\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method trans\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method transChoice\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Class Symfony\\\\Component\\\\Translation\\\\TranslatorInterface not found\\.$#',
	'identifier' => 'class.notFound',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:__construct\\(\\) has parameter \\$translationDomain with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:__construct\\(\\) has parameter \\$translator with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:convertFormToArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:getErrorMessage\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:getSubscribingMethods\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormErrorToJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormErrorToJson\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormErrorToXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormErrorToXml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormErrorToYml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormErrorToYml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormToJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormToJson\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormToXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormToXml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormToYml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormToYml\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$error of method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:getErrorMessage\\(\\) expects Symfony\\\\Component\\\\Form\\\\FormError, Symfony\\\\Component\\\\Form\\\\FormError\\|Symfony\\\\Component\\\\Form\\\\FormErrorIterator given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of function get_class expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$formError of method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormErrorToXml\\(\\) expects Symfony\\\\Component\\\\Form\\\\FormError, Symfony\\\\Component\\\\Form\\\\FormError\\|Symfony\\\\Component\\\\Form\\\\FormErrorIterator given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$domain of method Symfony\\\\Contracts\\\\Translation\\\\TranslatorInterface\\:\\:trans\\(\\) expects string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:\\$translationDomain has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:\\$translator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/FormErrorHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'deserialize\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'serialize\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between non\\-falsy\\-string and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_string\\(\\) with int will always evaluate to false\\.$#',
	'identifier' => 'function.impossibleType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'direction\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'format\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'method\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'type\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset int on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:__construct\\(\\) has parameter \\$handlers with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:getDefaultMethod\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:getDefaultMethod\\(\\) has parameter \\$direction with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:getDefaultMethod\\(\\) has parameter \\$format with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:getDefaultMethod\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:getHandler\\(\\) should return \\(callable\\(\\)\\: mixed\\)\\|null but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$direction of method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:registerHandler\\(\\) expects int, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function strrpos expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_keys expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$typeName of method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:registerHandler\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$format of method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:registerHandler\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$handler of method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:registerHandler\\(\\) expects callable\\(\\)\\: mixed, array\\{JMS\\\\Serializer\\\\Handler\\\\SubscribingHandlerInterface, mixed\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:\\$handlers has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/HandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset int on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 8,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method get\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method has\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between mixed and Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\LazyHandlerRegistry\\:\\:__construct\\(\\) has parameter \\$container with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\LazyHandlerRegistry\\:\\:__construct\\(\\) has parameter \\$handlers with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\LazyHandlerRegistry\\:\\:getHandler\\(\\) should return \\(callable\\(\\)\\: mixed\\)\\|null but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Handler\\\\LazyHandlerRegistry\\:\\:\\$container has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Handler\\\\LazyHandlerRegistry\\:\\:\\$initializedHandlers has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/LazyHandlerRegistry.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:deserializeMap\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:deserializeMap\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:deserializeMap\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:deserializeSequence\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:deserializeSequence\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:deserializeSequence\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:getSubscribingMethods\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:serializeMap\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:serializeMap\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:serializeSequence\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\PhpCollectionHandler\\:\\:serializeSequence\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$elements of class PhpCollection\\\\Map constructor expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$elements of class PhpCollection\\\\Sequence constructor expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/PhpCollectionHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMetadataForClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/StdClassHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\StdClassHandler\\:\\:getSubscribingMethods\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/StdClassHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\StdClassHandler\\:\\:serializeStdClass\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/StdClassHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\StdClassHandler\\:\\:serializeStdClass\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/StdClassHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$metadata of method JMS\\\\Serializer\\\\VisitorInterface\\:\\:endVisitingObject\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/StdClassHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$metadata of method JMS\\\\Serializer\\\\VisitorInterface\\:\\:startVisitingObject\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/StdClassHandler.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Handler\\\\SubscribingHandlerInterface\\:\\:getSubscribingMethods\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Handler/SubscribingHandlerInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonDeserializationVisitor\\:\\:decode\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonDeserializationVisitor\\:\\:decode\\(\\) has parameter \\$str with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$json of function json_decode expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method accept\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method count\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method pop\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method push\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method translateName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to float\\.$#',
	'identifier' => 'cast.double',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:addData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:addData\\(\\) has parameter \\$value with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:endVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:getNavigator\\(\\) should return JMS\\\\Serializer\\\\GraphNavigator but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:getOptions\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:getResult\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:getRoot\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:setData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:setData\\(\\) has parameter \\$value with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:setOptions\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:setOptions\\(\\) has parameter \\$options with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:setRoot\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:setRoot\\(\\) has parameter \\$data with generic class ArrayObject but does not specify its types\\: TKey, TValue$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:startVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:visitArray\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:visitArray\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:visitBoolean\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:visitDouble\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:visitInteger\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:visitNull\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:visitString\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$arr1 of function array_merge expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method JMS\\\\Serializer\\\\Accessor\\\\AccessorStrategyInterface\\:\\:getValue\\(\\) expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$options of function json_encode expects int, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:\\$data has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:\\$dataStack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:\\$navigator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:\\$options has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\JsonSerializationVisitor\\:\\:\\$root has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/JsonSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'discriminatorGroups\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'usingExpression\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xmlDiscriminatorAttribute\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xmlDiscriminatorCData\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xmlDiscriminatorNamespace\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset TKey of int\\|string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset int on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset int\\|string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isAbstract\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isInterface\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot use array destructuring on mixed\\.$#',
	'identifier' => 'offsetAccess.nonArray',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:addHandlerCallback\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:addPostDeserializeMethod\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:addPostSerializeMethod\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:addPreSerializeMethod\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:handleDiscriminatorProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:registerNamespace\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:registerNamespace\\(\\) has parameter \\$prefix with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:registerNamespace\\(\\) has parameter \\$uri with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setAccessorOrder\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setAccessorOrder\\(\\) has parameter \\$customOrder with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setDiscriminator\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setDiscriminator\\(\\) has parameter \\$fieldName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setDiscriminator\\(\\) has parameter \\$groups with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setDiscriminator\\(\\) has parameter \\$map with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:sortProperties\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$arr1 of function array_merge expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array_arg of function ksort expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array_arg of function uksort expects TArray of array\\<TKey of int\\|string, T\\>, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_flip expects array\\<int\\|string\\>, array given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_keys expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of method Metadata\\\\ClassMetadata\\:\\:unserialize\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of function array_search expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$args of function array_merge expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$groups of class JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata constructor expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$accessorOrder has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$customOrder has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$discriminatorBaseClass has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$discriminatorDisabled has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$discriminatorFieldName has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$discriminatorGroups has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$discriminatorMap has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$discriminatorValue has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$handlerCallbacks has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$postDeserializeMethods \\(array\\<ReflectionMethod\\>\\) does not accept array\\<Metadata\\\\MethodMetadata\\|ReflectionMethod\\>\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$postDeserializeMethods \\(array\\<ReflectionMethod\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$postSerializeMethods \\(array\\<ReflectionMethod\\>\\) does not accept array\\<Metadata\\\\MethodMetadata\\|ReflectionMethod\\>\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$postSerializeMethods \\(array\\<ReflectionMethod\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$preSerializeMethods \\(array\\<ReflectionMethod\\>\\) does not accept array\\<Metadata\\\\MethodMetadata\\|ReflectionMethod\\>\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$preSerializeMethods \\(array\\<ReflectionMethod\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$usingExpression has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$xmlDiscriminatorAttribute has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$xmlDiscriminatorCData has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$xmlDiscriminatorNamespace has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$xmlNamespaces has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$xmlRootName has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$xmlRootNamespace has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ClassMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$type on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:hideProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:hideProperty\\(\\) has parameter \\$doctrineMetadata with generic interface Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:isVirtualProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:loadMetadataForClass\\(\\) has parameter \\$class with generic class ReflectionClass but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:normalizeFieldType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:setDiscriminator\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:setDiscriminator\\(\\) has parameter \\$doctrineMetadata with generic interface Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:setPropertyType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:setPropertyType\\(\\) has parameter \\$doctrineMetadata with generic interface Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:tryLoadingDoctrineMetadata\\(\\) return type with generic interface Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$classMetadata ClassMetadata\\)\\: Unexpected token "\\$classMetadata", expected type at offset 9 on line 1$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$propertyMetadata PropertyMetadata\\)\\: Unexpected token "\\$propertyMetadata", expected type at offset 9 on line 1$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$className of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadataFactory\\<Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\>\\:\\:isTransient\\(\\) expects class\\-string, string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$className of method Doctrine\\\\Persistence\\\\ObjectManager\\:\\:getClassMetadata\\(\\) expects class\\-string\\<object\\>, string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$propertyMetadata of method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:isVirtualProperty\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$classMetadata of method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:setDiscriminator\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata, Metadata\\\\ClassMetadata given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$propertyMetadata of method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:hideProperty\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$propertyMetadata of method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:setPropertyType\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:\\$fieldMapping type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Unable to resolve the template type T in call to method Doctrine\\\\Persistence\\\\ObjectManager\\:\\:getClassMetadata\\(\\)$#',
	'identifier' => 'argument.templateType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AbstractDoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'\\!\\(\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between mixed and \'\\-\\>\' results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between non\\-falsy\\-string and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method ReflectionClass\\<object\\>\\:\\:getFileName\\(\\) with incorrect case\\: getFilename$#',
	'identifier' => 'method.nameCase',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'class\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getClassAnnotations\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMethodAnnotations\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getPropertyAnnotations\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between mixed and JMS\\\\Serializer\\\\Annotation\\\\XmlElement will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AnnotationDriver\\:\\:loadMetadataForClass\\(\\) has parameter \\$class with generic class ReflectionClass but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AnnotationDriver\\:\\:\\$reader has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/AnnotationDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\:\\:\\$node\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\:\\:\\$parentMapping\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\:\\:getFieldMapping\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'multivalue\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\DoctrinePHPCRTypeDriver\\:\\:hideProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\DoctrinePHPCRTypeDriver\\:\\:hideProperty\\(\\) has parameter \\$doctrineMetadata with generic interface Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\DoctrinePHPCRTypeDriver\\:\\:setPropertyType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\DoctrinePHPCRTypeDriver\\:\\:setPropertyType\\(\\) has parameter \\$doctrineMetadata with generic interface Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$assocName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:getAssociationTargetClass\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$className of method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:tryLoadingDoctrineMetadata\\(\\) expects string, class\\-string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:getTypeOfField\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:hasAssociation\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:hasField\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:isSingleValuedAssociation\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$type of method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:normalizeFieldType\\(\\) expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrinePHPCRTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\:\\:\\$discriminatorColumn\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\:\\:isInheritanceTypeNone\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\:\\:isRootEntity\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata and Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata will always evaluate to true\\.$#',
	'identifier' => 'instanceof.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\DoctrineTypeDriver\\:\\:setDiscriminator\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\DoctrineTypeDriver\\:\\:setDiscriminator\\(\\) has parameter \\$doctrineMetadata with generic interface Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\DoctrineTypeDriver\\:\\:setPropertyType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\DoctrineTypeDriver\\:\\:setPropertyType\\(\\) has parameter \\$doctrineMetadata with generic interface Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$assocName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:getAssociationTargetClass\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$className of method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:tryLoadingDoctrineMetadata\\(\\) expects string, class\\-string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:getTypeOfField\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:hasAssociation\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:hasField\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$fieldName of method Doctrine\\\\Persistence\\\\Mapping\\\\ClassMetadata\\<object\\>\\:\\:isSingleValuedAssociation\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$type of method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\AbstractDoctrineTypeDriver\\:\\:normalizeFieldType\\(\\) expects string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$map of method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setDiscriminator\\(\\) expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/DoctrineTypeDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method ReflectionClass\\<object\\>\\:\\:getFileName\\(\\) with incorrect case\\: getFilename$#',
	'identifier' => 'method.nameCase',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/NullDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/NullDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\NullDriver\\:\\:loadMetadataForClass\\(\\) has parameter \\$class with generic class ReflectionClass but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/NullDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\PhpDriver\\:\\:loadMetadataFromFile\\(\\) has parameter \\$class with generic class ReflectionClass but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/PhpDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/PhpDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'\\!\\(\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'class\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$cdata on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$entry\\-name on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$inline on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$key\\-attribute\\-name on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$namespace on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$skip\\-when\\-empty on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method attributes\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 20,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 28,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\XmlDriver\\:\\:loadMetadataFromFile\\(\\) has parameter \\$class with generic class ReflectionClass but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$error of class JMS\\\\Serializer\\\\Exception\\\\XmlErrorException constructor expects LibXMLError, LibXMLError\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtolower expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtoupper expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$customOrder of method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setAccessorOrder\\(\\) expects array, list\\<string\\>\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/XmlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'\\!\\(\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'The method \' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'access_type\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'accessor\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'cdata\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'class\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'disabled\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'entry_name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'exclude\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'exclude_if\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'exp\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'expose\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'expose_if\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'field_name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'getter\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'groups\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'inline\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'key_attribute_name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'map\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'max_depth\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'namespace\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'post_deserialize\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'post_serialize\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'pre_serialize\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'read_only\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'serialized_name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'setter\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'since_version\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'skip_when_empty\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'type\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'until_version\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xml_attribute\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xml_attribute_map\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xml_element\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xml_key_value_pairs\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xml_list\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xml_map\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xml_value\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \\(int\\|string\\) on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset class\\-string\\<object\\> on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 13,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\YamlDriver\\:\\:addClassProperties\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\YamlDriver\\:\\:addClassProperties\\(\\) has parameter \\$config with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\YamlDriver\\:\\:getCallbackMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\YamlDriver\\:\\:getCallbackMetadata\\(\\) has parameter \\$class with generic class ReflectionClass but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\YamlDriver\\:\\:getCallbackMetadata\\(\\) has parameter \\$config with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\YamlDriver\\:\\:loadMetadataFromFile\\(\\) has parameter \\$class with generic class ReflectionClass but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$dirStr of static method JMS\\\\Serializer\\\\GraphNavigator\\:\\:parseDirection\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of static method Symfony\\\\Component\\\\Yaml\\\\Yaml\\:\\:parse\\(\\) expects string, string\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$name of method ReflectionClass\\<object\\>\\:\\:hasMethod\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$order of method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setAccessorOrder\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$customOrder of method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setAccessorOrder\\(\\) expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$format of method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:addHandlerCallback\\(\\) expects int\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$search of function array_key_exists expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$groups of method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:setDiscriminator\\(\\) expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$methodName of method JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:addHandlerCallback\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$postDeserializeMethods \\(array\\<ReflectionMethod\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$postSerializeMethods \\(array\\<ReflectionMethod\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata\\:\\:\\$preSerializeMethods \\(array\\<ReflectionMethod\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/Driver/YamlDriver.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ExpressionPropertyMetadata\\:\\:__construct\\(\\) has parameter \\$class with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ExpressionPropertyMetadata\\:\\:__construct\\(\\) has parameter \\$expression with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ExpressionPropertyMetadata\\:\\:__construct\\(\\) has parameter \\$fieldName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ExpressionPropertyMetadata\\:\\:setAccessor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ExpressionPropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$getter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ExpressionPropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$setter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ExpressionPropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\ExpressionPropertyMetadata\\:\\:setValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\ExpressionPropertyMetadata\\:\\:\\$expression \\(string\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/ExpressionPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'get\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'has\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'is\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'set\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$class on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getDeclaringClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMethod\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getProperty\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getValue\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method hasMethod\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isInternal\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isPublic\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isStatic\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method parse\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:__construct\\(\\) has parameter \\$class with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:initAccessor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:setAccessor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$getter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$setter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:setType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:setType\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:setValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:unserializeProperties\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:unserializeProperties\\(\\) has parameter \\$str with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function ucfirst expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$variable_representation of function unserialize expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$newScope of static method Closure\\:\\:bind\\(\\) expects \'static\'\\|class\\-string\\|object\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$closureAccessor has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$excludeIf has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$getter has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$groups has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$inline has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$maxDepth has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$readOnly has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$serializedName has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$setter has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$sinceVersion has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$skipWhenEmpty has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$type has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$typeParser has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$untilVersion has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlAttribute has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlAttributeMap has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlCollection has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlCollectionInline has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlCollectionSkipWhenEmpty has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlElementCData has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlEntryName has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlEntryNamespace has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlKeyAttribute has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlKeyValuePairs has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlNamespace has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata\\:\\:\\$xmlValue has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Trying to invoke mixed but it\'s not a callable\\.$#',
	'identifier' => 'callable.nonCallable',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/PropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:__construct\\(\\) has parameter \\$className with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:__construct\\(\\) has parameter \\$fieldName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:__construct\\(\\) has parameter \\$fieldValue with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:__construct\\(\\) has parameter \\$groups with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:setAccessor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$getter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$setter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:setValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Metadata\\\\StaticPropertyMetadata\\:\\:\\$value has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/StaticPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot use array destructuring on mixed\\.$#',
	'identifier' => 'offsetAccess.nonArray',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\VirtualPropertyMetadata\\:\\:__construct\\(\\) has parameter \\$class with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\VirtualPropertyMetadata\\:\\:__construct\\(\\) has parameter \\$methodName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\VirtualPropertyMetadata\\:\\:setAccessor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\VirtualPropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$getter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\VirtualPropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$setter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\VirtualPropertyMetadata\\:\\:setAccessor\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Metadata\\\\VirtualPropertyMetadata\\:\\:setValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function strpos expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Metadata/VirtualPropertyMetadata.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CacheNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method translateName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CacheNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Naming\\\\CacheNamingStrategy\\:\\:translateName\\(\\) should return string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CacheNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Naming\\\\CacheNamingStrategy\\:\\:\\$cache has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CacheNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Naming\\\\CacheNamingStrategy\\:\\:\\$delegate has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CacheNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between mixed and \'\\\\\\\\0\' results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CamelCaseNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Naming\\\\CamelCaseNamingStrategy\\:\\:__construct\\(\\) has parameter \\$lowerCase with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CamelCaseNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Naming\\\\CamelCaseNamingStrategy\\:\\:__construct\\(\\) has parameter \\$separator with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CamelCaseNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function preg_replace expects array\\<float\\|int\\|string\\>\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CamelCaseNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Naming\\\\CamelCaseNamingStrategy\\:\\:\\$lowerCase has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CamelCaseNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Naming\\\\CamelCaseNamingStrategy\\:\\:\\$separator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/CamelCaseNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Naming\\\\IdenticalPropertyNamingStrategy\\:\\:translateName\\(\\) should return string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/IdenticalPropertyNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method translateName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/SerializedNameAnnotationStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Naming\\\\SerializedNameAnnotationStrategy\\:\\:translateName\\(\\) should return string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/SerializedNameAnnotationStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Naming\\\\SerializedNameAnnotationStrategy\\:\\:\\$delegate has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Naming/SerializedNameAnnotationStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:create\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:getDepth\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:getInitialType\\(\\) should return string\\|null but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:getObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:getPath\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:getVisitingSet\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:getVisitingStack\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:initialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:isVisiting\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:isVisiting\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:startVisiting\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:startVisiting\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:stopVisiting\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializationContext\\:\\:stopVisiting\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of function get_class expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializationContext\\:\\:\\$visitingSet with generic class SplObjectStorage does not specify its types\\: TObject, TData$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializationContext\\:\\:\\$visitingStack with generic class SplStack does not specify its types\\: TValue$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializationContext.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method accept\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method parse\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:__construct\\(\\) has parameter \\$deserializationVisitors with no value type specified in iterable type PhpCollection\\\\MapInterface\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:__construct\\(\\) has parameter \\$serializationVisitors with no value type specified in iterable type PhpCollection\\\\MapInterface\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:convertArrayObjects\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:convertArrayObjects\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:deserialize\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:deserialize\\(\\) should return array\\|bool\\|float\\|int\\|object\\|string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:fromArray\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:getMetadataFactory\\(\\) should return Metadata\\\\MetadataFactoryInterface but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:handleDeserializeResult\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:handleDeserializeResult\\(\\) has parameter \\$navigatorResult with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:handleDeserializeResult\\(\\) has parameter \\$visitorResult with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) should return string but returns array\\|bool\\|float\\|int\\|object\\|string\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:toArray\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:visit\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:visit\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:visit\\(\\) has parameter \\$format with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Serializer\\:\\:visit\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callable of method PhpOption\\\\Option\\<mixed\\>\\:\\:map\\(\\) expects callable\\(mixed\\)\\: \\(array\\|bool\\|float\\|int\\|object\\|string\\), Closure\\(JMS\\\\Serializer\\\\VisitorInterface\\)\\: \\(array\\|bool\\|float\\|int\\|object\\|string\\) given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callable of method PhpOption\\\\Option\\<mixed\\>\\:\\:map\\(\\) expects callable\\(mixed\\)\\: array\\<mixed, mixed\\>, Closure\\(JMS\\\\Serializer\\\\JsonSerializationVisitor\\)\\: array\\<mixed, mixed\\> given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callable of method PhpOption\\\\Option\\<mixed\\>\\:\\:map\\(\\) expects callable\\(mixed\\)\\: mixed, Closure\\(JMS\\\\Serializer\\\\JsonDeserializationVisitor\\)\\: mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$callable of method PhpOption\\\\Option\\<mixed\\>\\:\\:map\\(\\) expects callable\\(mixed\\)\\: mixed, Closure\\(JMS\\\\Serializer\\\\VisitorInterface\\)\\: mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$format of method JMS\\\\Serializer\\\\Context\\:\\:initialize\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$navigator of method JMS\\\\Serializer\\\\VisitorInterface\\:\\:setNavigator\\(\\) expects JMS\\\\Serializer\\\\GraphNavigator, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$navigator of method JMS\\\\Serializer\\\\Context\\:\\:initialize\\(\\) expects JMS\\\\Serializer\\\\GraphNavigator, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$factory of method JMS\\\\Serializer\\\\Context\\:\\:initialize\\(\\) expects Metadata\\\\MetadataFactoryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$type of method JMS\\\\Serializer\\\\Serializer\\:\\:visit\\(\\) expects array\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Serializer\\:\\:\\$deserializationVisitors type has no value type specified in iterable type PhpCollection\\\\MapInterface\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Serializer\\:\\:\\$dispatcher has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Serializer\\:\\:\\$factory has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Serializer\\:\\:\\$handlerRegistry has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Serializer\\:\\:\\$navigator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Serializer\\:\\:\\$objectConstructor has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Serializer\\:\\:\\$serializationVisitors type has no value type specified in iterable type PhpCollection\\\\MapInterface\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Serializer\\:\\:\\$typeParser has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Serializer.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between mixed and \'/annotations\' results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between mixed and \'/metadata\' results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addSubscriber\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createDriver\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method registerSubscribingHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method set\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setAll\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'identifier' => 'if.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:addDefaultDeserializationVisitors\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:addDefaultHandlers\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:addDefaultListeners\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:addDefaultSerializationVisitors\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:build\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:configureHandlers\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:configureListeners\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:create\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:createDir\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:createDir\\(\\) has parameter \\$dir with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:getAccessorStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:initializePropertyNamingStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setAccessorStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setAdvancedNamingStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setAnnotationReader\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setCacheDir\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setCacheDir\\(\\) has parameter \\$dir with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setDebug\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setDebug\\(\\) has parameter \\$bool with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setDeserializationVisitor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setDeserializationVisitor\\(\\) has parameter \\$format with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setExpressionEvaluator\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setMetadataDriverFactory\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setObjectConstructor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setPropertyNamingStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setSerializationVisitor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerBuilder\\:\\:setSerializationVisitor\\(\\) has parameter \\$format with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always false\\.$#',
	'identifier' => 'booleanNot.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$deserializationContextFactory of method JMS\\\\Serializer\\\\Serializer\\:\\:setDeserializationContextFactory\\(\\) expects JMS\\\\Serializer\\\\ContextFactory\\\\DeserializationContextFactoryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$driver of class Metadata\\\\MetadataFactory constructor expects Metadata\\\\Driver\\\\DriverInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of function is_dir expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of function is_writable expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$include of method Metadata\\\\MetadataFactory\\:\\:setIncludeInterfaces\\(\\) expects bool, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$pathname of function mkdir expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$serializationContextFactory of method JMS\\\\Serializer\\\\Serializer\\:\\:setSerializationContextFactory\\(\\) expects JMS\\\\Serializer\\\\ContextFactory\\\\SerializationContextFactoryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$accessorStrategy of class JMS\\\\Serializer\\\\JsonSerializationVisitor constructor expects JMS\\\\Serializer\\\\Accessor\\\\AccessorStrategyInterface\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$accessorStrategy of class JMS\\\\Serializer\\\\XmlSerializationVisitor constructor expects JMS\\\\Serializer\\\\Accessor\\\\AccessorStrategyInterface\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$accessorStrategy of class JMS\\\\Serializer\\\\YamlSerializationVisitor constructor expects JMS\\\\Serializer\\\\Accessor\\\\AccessorStrategyInterface\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$handlerRegistry of class JMS\\\\Serializer\\\\Serializer constructor expects JMS\\\\Serializer\\\\Handler\\\\HandlerRegistryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$hierarchyMetadataClass of class Metadata\\\\MetadataFactory constructor expects string, null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$debug of class Doctrine\\\\Common\\\\Annotations\\\\PsrCachedReader constructor expects bool, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$debug of class Metadata\\\\MetadataFactory constructor expects bool, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$objectConstructor of class JMS\\\\Serializer\\\\Serializer constructor expects JMS\\\\Serializer\\\\Construction\\\\ObjectConstructorInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$serializationVisitors of class JMS\\\\Serializer\\\\Serializer constructor expects PhpCollection\\\\MapInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$deserializationVisitors of class JMS\\\\Serializer\\\\Serializer constructor expects PhpCollection\\\\MapInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$dispatcher of class JMS\\\\Serializer\\\\Serializer constructor expects JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherInterface\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$annotationReader has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$cacheDir has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$debug has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$deserializationContextFactory has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$deserializationVisitors has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$driverFactory has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$eventDispatcher has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$handlerRegistry has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$handlersConfigured has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$includeInterfaceMetadata has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$listenersConfigured has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$metadataDirs has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$objectConstructor has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$propertyNamingStrategy has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$serializationContextFactory has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$serializationVisitors has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\SerializerBuilder\\:\\:\\$visitorsAdded has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Unsafe usage of new static\\(\\)\\.$#',
	'identifier' => 'new.static',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerBuilder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerInterface\\:\\:deserialize\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\SerializerInterface\\:\\:serialize\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$context with type JMS\\\\Serializer\\\\Context is not subtype of native type JMS\\\\Serializer\\\\DeserializationContext\\|null\\.$#',
	'identifier' => 'parameter.phpDocType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param for parameter \\$context with type JMS\\\\Serializer\\\\Context is not subtype of native type JMS\\\\Serializer\\\\SerializationContext\\|null\\.$#',
	'identifier' => 'parameter.phpDocType',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/SerializerInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method serialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Twig/SerializerExtension.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Twig\\\\SerializerExtension\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Twig/SerializerExtension.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Twig\\\\SerializerExtension\\:\\:serialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Twig/SerializerExtension.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Twig\\\\SerializerExtension\\:\\:\\$serializer has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Twig/SerializerExtension.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Twig\\\\SerializerRuntimeExtension\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Twig/SerializerRuntimeExtension.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method serialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Twig/SerializerRuntimeHelper.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Twig\\\\SerializerRuntimeHelper\\:\\:serialize\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Twig/SerializerRuntimeHelper.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Twig\\\\SerializerRuntimeHelper\\:\\:serialize\\(\\) should return string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Twig/SerializerRuntimeHelper.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Twig\\\\SerializerRuntimeHelper\\:\\:\\$serializer has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Twig/SerializerRuntimeHelper.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/TypeParser.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isNext\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/TypeParser.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method moveNext\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/TypeParser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\TypeParser\\:\\:parseInternal\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/TypeParser.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/TypeParser.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$subject of function preg_match expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/TypeParser.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\*" between mixed and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\+\\=" between mixed and 1 results in an error\\.$#',
	'identifier' => 'assignOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\-\\=" between mixed and 1 results in an error\\.$#',
	'identifier' => 'assignOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\.\\=" between mixed and string results in an error\\.$#',
	'identifier' => 'assignOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:getContent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:indent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:outdent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:reset\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:revert\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:rtrim\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:rtrim\\(\\) has parameter \\$preserveNewLines with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$stack of function array_pop expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function rtrim expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function strlen expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$string of function substr expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:\\$changeCount has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:\\$changes has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:\\$content has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:\\$indentationLevel has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Util\\\\Writer\\:\\:\\$indentationSpaces has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/Util/Writer.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\VisitorInterface\\:\\:endVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/VisitorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\VisitorInterface\\:\\:getResult\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/VisitorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\VisitorInterface\\:\\:startVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/VisitorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\VisitorInterface\\:\\:visitArray\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/VisitorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\VisitorInterface\\:\\:visitBoolean\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/VisitorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\VisitorInterface\\:\\:visitDouble\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/VisitorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\VisitorInterface\\:\\:visitInteger\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/VisitorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\VisitorInterface\\:\\:visitNull\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/VisitorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\VisitorInterface\\:\\:visitString\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/VisitorInterface.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'\\./\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between non\\-falsy\\-string and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$class on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlEntryName on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlEntryNamespace on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlKeyAttribute on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlKeyValuePairs on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlNamespaces on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method accept\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 9,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method attributes\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method children\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method count\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getDocNamespaces\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method pop\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method push\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method registerXPathNamespace\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method top\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method translateName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method xpath\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to float\\.$#',
	'identifier' => 'cast.double',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot use array destructuring on mixed\\.$#',
	'identifier' => 'offsetAccess.nonArray',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:emptyStringToSpaceCharacter\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:emptyStringToSpaceCharacter\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:enableExternalEntities\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:endVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:getCurrentMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:getCurrentObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:getDoctypeWhitelist\\(\\) should return array\\<string\\> but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:getNavigator\\(\\) should return JMS\\\\Serializer\\\\GraphNavigator but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:getResult\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:getResult\\(\\) should return array\\|bool\\|float\\|int\\|object\\|string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:revertCurrentMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:revertCurrentObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:setCurrentMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:setCurrentObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:setCurrentObject\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:setDoctypeWhitelist\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:startVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:visitArray\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:visitBoolean\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:visitDouble\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:visitInteger\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:visitNull\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:visitString\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$child$#',
	'identifier' => 'parameter.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function reset expects array\\|object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of function simplexml_load_string expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of method JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:getDomDocumentTypeEntitySubset\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$disable of function libxml_disable_entity_loader expects bool, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$error of class JMS\\\\Serializer\\\\Exception\\\\XmlErrorException constructor expects LibXMLError, LibXMLError\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$haystack of function stripos expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method JMS\\\\Serializer\\\\Accessor\\\\AccessorStrategyInterface\\:\\:setValue\\(\\) expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of function in_array expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$subject of function str_replace expects array\\<string\\>\\|string, string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Part \\$entryName \\(mixed\\) of encapsed string cannot be cast to string\\.$#',
	'identifier' => 'encapsedStringPart.nonString',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:\\$currentMetadata has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:\\$currentObject has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:\\$disableExternalEntities has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:\\$doctypeWhitelist has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:\\$metadataStack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:\\$navigator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:\\$objectMetadataStack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:\\$objectStack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlDeserializationVisitor\\:\\:\\$result has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlDeserializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'\\:\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between mixed and \'\\:\' results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between non\\-falsy\\-string and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$childNodes on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$class on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$documentElement on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$length on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$name on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$value on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlElementCData on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlEntryName on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlEntryNamespace on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlKeyAttribute on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlKeyValuePairs on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method accept\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 5,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method appendChild\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 10,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createAttribute\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createCDATASection\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createElement\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createElementNS\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createTextNode\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isDefaultNamespace\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method lookupPrefix\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method pop\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method push\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method removeChild\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method saveXML\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setAttribute\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setAttributeNS\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method top\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method translateName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 7,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:__construct\\(\\) has parameter \\$namingStrategy with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:addNamespaceAttributes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:attachNullNamespace\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:createElement\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:createElement\\(\\) has parameter \\$namespace with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:createElement\\(\\) has parameter \\$tagName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:endVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:getClassDefaultNamespace\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:getCurrentMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:getCurrentNode\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:getDocument\\(\\) should return DOMDocument but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:getNavigator\\(\\) should return JMS\\\\Serializer\\\\GraphNavigator but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:getResult\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:getResult\\(\\) should return array\\|bool\\|float\\|int\\|object\\|string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isCircularRef\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isCircularRef\\(\\) has parameter \\$v with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isElementEmpty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isInLineCollection\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isSkippableCollection\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isSkippableEmptyObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isSkippableEmptyObject\\(\\) has parameter \\$node with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:revertCurrentMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:revertCurrentNode\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setAttributeOnNode\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setAttributeOnNode\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setAttributeOnNode\\(\\) has parameter \\$namespace with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setAttributeOnNode\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setCurrentMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setCurrentNode\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setDefaultEncoding\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setDefaultEncoding\\(\\) has parameter \\$encoding with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setDefaultRootName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setDefaultRootName\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setDefaultRootName\\(\\) has parameter \\$namespace with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setDefaultVersion\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setDefaultVersion\\(\\) has parameter \\$version with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setFormatOutput\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:startVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitArray\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitBoolean\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitDouble\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitInteger\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitNull\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitNumeric\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitNumeric\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitNumeric\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitSimpleString\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitSimpleString\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitSimpleString\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:visitString\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$create$#',
	'identifier' => 'parameter.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$context of method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isCircularRef\\(\\) expects JMS\\\\Serializer\\\\SerializationContext, JMS\\\\Serializer\\\\Context given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of method DOMDocument\\:\\:createCDATASection\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$element of method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isElementEmpty\\(\\) expects DOMElement, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$localName of method DOMDocument\\:\\:createElement\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$metadata of method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:getClassDefaultNamespace\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$name of method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:isElementNameValid\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$namespace of method DOMDocument\\:\\:createElementNS\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$namespace of method DOMElement\\:\\:setAttributeNS\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$namespace of method DOMNode\\:\\:lookupPrefix\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$node of method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setAttributeOnNode\\(\\) expects DOMElement, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$node of method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:setCurrentNode\\(\\) expects DOMNode, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method JMS\\\\Serializer\\\\Accessor\\\\AccessorStrategyInterface\\:\\:getValue\\(\\) expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$qualifiedName of method DOMElement\\:\\:setAttribute\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function sha1 expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$version of class DOMDocument constructor expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$element of method JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:addNamespaceAttributes\\(\\) expects DOMElement, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$encoding of class DOMDocument constructor expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$qualifiedName of method DOMDocument\\:\\:createElementNS\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$value of method DOMElement\\:\\:setAttribute\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$value of method DOMElement\\:\\:setAttributeNS\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$currentMetadata has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$currentNode has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$defaultEncoding has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$defaultRootName has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$defaultRootNamespace has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$defaultVersion has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$document has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$hasValue has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$metadataStack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$navigator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$nullWasVisited has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$objectMetadataStack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\XmlSerializationVisitor\\:\\:\\$stack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Ternary operator condition is always false\\.$#',
	'identifier' => 'ternary.alwaysFalse',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/XmlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \' \' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$changeCount on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$content on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 5,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method accept\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getContent\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method indent\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method outdent\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method pop\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method push\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method reset\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method revert\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method rtrim\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method translateName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method writeln\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 12,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 2,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:__construct\\(\\) has parameter \\$namingStrategy with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:endVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:getNavigator\\(\\) should return JMS\\\\Serializer\\\\GraphNavigator but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:getResult\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:getResult\\(\\) should return array\\|bool\\|float\\|int\\|object\\|string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:revertCurrentMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:setCurrentMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:startVisitingObject\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:visitArray\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:visitArray\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:visitBoolean\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:visitDouble\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:visitInteger\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:visitNull\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:visitString\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method JMS\\\\Serializer\\\\Accessor\\\\AccessorStrategyInterface\\:\\:getValue\\(\\) expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:\\$currentMetadata has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:\\$metadataStack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:\\$navigator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:\\$stack has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:\\$stack is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\YamlSerializationVisitor\\:\\:\\$writer has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/src/JMS/Serializer/YamlSerializationVisitor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\DisjunctExclusionStrategyTest\\:\\:testShouldSkipClassDisjunctBehavior\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/DisjunctExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\DisjunctExclusionStrategyTest\\:\\:testShouldSkipClassReturnsFalseIfNoPredicateMatched\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/DisjunctExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\DisjunctExclusionStrategyTest\\:\\:testShouldSkipClassShortCircuiting\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/DisjunctExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\DisjunctExclusionStrategyTest\\:\\:testShouldSkipPropertyDisjunct\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/DisjunctExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\DisjunctExclusionStrategyTest\\:\\:testShouldSkipPropertyReturnsFalseIfNoPredicateMatches\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/DisjunctExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\DisjunctExclusionStrategyTest\\:\\:testShouldSkipPropertyShortCircuiting\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/DisjunctExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$delegates of class JMS\\\\Serializer\\\\Exclusion\\\\DisjunctExclusionStrategy constructor expects iterable\\<JMS\\\\Serializer\\\\Exclusion\\\\ExclusionStrategyInterface\\>&PhpCollection\\\\SequenceInterface, array\\<int, JMS\\\\Serializer\\\\Exclusion\\\\ExclusionStrategyInterface&PHPUnit\\\\Framework\\\\MockObject\\\\MockObject\\> given\\.$#',
	'identifier' => 'argument.type',
	'count' => 6,
	'path' => __DIR__ . '/tests/Exclusion/DisjunctExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$context of method JMS\\\\Serializer\\\\Exclusion\\\\DisjunctExclusionStrategy\\:\\:shouldSkipClass\\(\\) expects JMS\\\\Serializer\\\\Context, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Exclusion/DisjunctExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$context of method JMS\\\\Serializer\\\\Exclusion\\\\DisjunctExclusionStrategy\\:\\:shouldSkipProperty\\(\\) expects JMS\\\\Serializer\\\\Context, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Exclusion/DisjunctExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method expects\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method method\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method shouldSkipProperty\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method willReturn\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method with\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\ExpressionLanguageExclusionStrategyTest\\:\\:testExpressionLanguageExclusionWorks\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\ExpressionLanguageExclusionStrategyTest\\:\\:testExpressionLanguageSkipsWhenNoExpression\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\ExpressionLanguageExclusionStrategyTest\\:\\:\\$context has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\ExpressionLanguageExclusionStrategyTest\\:\\:\\$exclusionStrategy has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\ExpressionLanguageExclusionStrategyTest\\:\\:\\$expressionEvaluator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\ExpressionLanguageExclusionStrategyTest\\:\\:\\$visitedObject has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/ExpressionLanguageExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method pushPropertyMetadata\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:getExclusionRules\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:getGroupsFor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:testGroupsFor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:testGroupsFor\\(\\) has parameter \\$groups with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:testGroupsFor\\(\\) has parameter \\$propsVisited with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:testGroupsFor\\(\\) has parameter \\$resultingGroups with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:testUninitializedContextIsWorking\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:testUninitializedContextIsWorking\\(\\) has parameter \\$exclude with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:testUninitializedContextIsWorking\\(\\) has parameter \\$groups with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Exclusion\\\\GroupsExclusionStrategyTest\\:\\:testUninitializedContextIsWorking\\(\\) has parameter \\$propertyGroups with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$groups of class JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy constructor expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$navigatorContext of method JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:getGroupsFor\\(\\) expects JMS\\\\Serializer\\\\Context, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$navigatorContext of method JMS\\\\Serializer\\\\Exclusion\\\\GroupsExclusionStrategy\\:\\:shouldSkipProperty\\(\\) expects JMS\\\\Serializer\\\\Context, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Exclusion/GroupsExclusionStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderChild\\:\\:\\$c has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderChild\\:\\:\\$c is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderChild\\:\\:\\$d has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderChild\\:\\:\\$d is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderMethod\\:\\:\\$a has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderMethod.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderMethod\\:\\:\\$a is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderMethod.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderMethod\\:\\:\\$b has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderMethod.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderMethod\\:\\:\\$b is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderMethod.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderParent\\:\\:\\$a has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderParent\\:\\:\\$a is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderParent\\:\\:\\$b has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorOrderParent\\:\\:\\$b is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorOrderParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorSetter\\:\\:getCollection\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorSetter.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorSetter\\:\\:setCollectionDifferent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorSetter.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorSetter\\:\\:setCollectionDifferent\\(\\) has parameter \\$collection with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorSetter.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorSetter\\:\\:setElementDifferent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorSetter.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorSetterElement\\:\\:setAttributeDifferent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorSetter.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorSetterElement\\:\\:setElementDifferent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorSetter.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AccessorSetter\\:\\:\\$collection type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AccessorSetter.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AllExcludedObject\\:\\:\\$bar has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AllExcludedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AllExcludedObject\\:\\:\\$bar is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AllExcludedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AllExcludedObject\\:\\:\\$foo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AllExcludedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AllExcludedObject\\:\\:\\$foo is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AllExcludedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method appendChild\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method createElement\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method writeln\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Article\\:\\:deserializeFromJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Article\\:\\:deserializeFromJson\\(\\) has parameter \\$data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Article\\:\\:deserializeFromXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Article\\:\\:serializeToJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Article\\:\\:serializeToXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Article\\:\\:serializeToXml\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Article\\:\\:serializeToYml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Article\\:\\:\\$element has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Article\\:\\:\\$value has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Article.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Author\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Author\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Author\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorExpressionAccess\\:\\:__construct\\(\\) has parameter \\$firstName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorExpressionAccess.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorExpressionAccess\\:\\:__construct\\(\\) has parameter \\$id with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorExpressionAccess.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorExpressionAccess\\:\\:__construct\\(\\) has parameter \\$lastName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorExpressionAccess.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorExpressionAccess\\:\\:getFirstName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorExpressionAccess.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorExpressionAccess\\:\\:getLastName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorExpressionAccess.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorExpressionAccess\\:\\:\\$firstName has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorExpressionAccess.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorExpressionAccess\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorExpressionAccess.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorExpressionAccess\\:\\:\\$id is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorExpressionAccess.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorExpressionAccess\\:\\:\\$lastName has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorExpressionAccess.php',
];
$ignoreErrors[] = [
	'message' => '#^Class JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorList implements generic interface ArrayAccess but does not specify its types\\: TKey, TValue$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorList.php',
];
$ignoreErrors[] = [
	'message' => '#^Class JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorList implements generic interface IteratorAggregate but does not specify its types\\: TKey, TValue$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorList.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorList\\:\\:add\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorList.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorList\\:\\:getIterator\\(\\) return type with generic class ArrayIterator does not specify its types\\: TKey, TValue$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorList.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorList\\:\\:offsetGet\\(\\) has invalid return type JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\mixed\\.$#',
	'identifier' => 'class.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorList.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorList\\:\\:offsetGet\\(\\) should return JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\mixed but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorList\\:\\:\\$authors type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorList.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnly\\:\\:__construct\\(\\) has parameter \\$id with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnly.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnly\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnly.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnly\\:\\:getId\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnly.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnly\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnly.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnly\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnly.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnly\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnly.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnlyPerClass\\:\\:__construct\\(\\) has parameter \\$id with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnlyPerClass.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnlyPerClass\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnlyPerClass.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnlyPerClass\\:\\:getId\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnlyPerClass.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnlyPerClass\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnlyPerClass.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnlyPerClass\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnlyPerClass.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorReadOnlyPerClass\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/AuthorReadOnlyPerClass.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method add\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:__construct\\(\\) has parameter \\$title with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:addComment\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:addTag\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:getMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:setPublished\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$comments has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$comments2 has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$createdAt has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$etag has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$metadata has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$published has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$publisher has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$reviewed has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$tag has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\BlogPost\\:\\:\\$title has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceChild\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceChild\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceChild\\:\\:getParent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceChild\\:\\:setParent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceChild\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceChild\\:\\:\\$parent has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 2,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setParent\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceParent\\:\\:afterDeserialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceParent\\:\\:afterDeserialization\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceParent\\:\\:\\$anotherCollection has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CircularReferenceParent\\:\\:\\$collection has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CircularReferenceParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Comment\\:\\:__construct\\(\\) has parameter \\$text with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Comment\\:\\:getAuthor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Comment\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Comment\\:\\:\\$text has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Comment\\:\\:\\$text is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtoupper expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ContextualNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function ucfirst expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ContextualNamingStrategy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CurrencyAwareOrder\\:\\:\\$cost has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CurrencyAwareOrder.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CurrencyAwareOrder\\:\\:\\$cost is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CurrencyAwareOrder.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CurrencyAwarePrice\\:\\:__construct\\(\\) has parameter \\$amount with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CurrencyAwarePrice.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CurrencyAwarePrice\\:\\:__construct\\(\\) has parameter \\$currency with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CurrencyAwarePrice.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CurrencyAwarePrice\\:\\:\\$amount has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CurrencyAwarePrice.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CurrencyAwarePrice\\:\\:\\$amount is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CurrencyAwarePrice.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CurrencyAwarePrice\\:\\:\\$currency has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CurrencyAwarePrice.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CurrencyAwarePrice\\:\\:\\$currency is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CurrencyAwarePrice.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CustomDeserializationObject\\:\\:__construct\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CustomDeserializationObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\CustomDeserializationObject\\:\\:\\$someProperty has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/CustomDeserializationObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DateTimeArraysObject\\:\\:__construct\\(\\) has parameter \\$arrayWithDefaultDateTime with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DateTimeArraysObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DateTimeArraysObject\\:\\:__construct\\(\\) has parameter \\$arrayWithFormattedDateTime with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DateTimeArraysObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DateTimeArraysObject\\:\\:\\$arrayWithDefaultDateTime \\(array\\<DateTime\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DateTimeArraysObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DateTimeArraysObject\\:\\:\\$arrayWithFormattedDateTime \\(array\\<DateTime\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DateTimeArraysObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Discriminator\\\\Post\\:\\:__construct\\(\\) has parameter \\$title with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Discriminator/Post.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Discriminator\\\\Post\\:\\:\\$title has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Discriminator/Post.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Discriminator/Vehicle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Discriminator\\\\Vehicle\\:\\:__construct\\(\\) has parameter \\$km with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Discriminator/Vehicle.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Discriminator\\\\Vehicle\\:\\:\\$km has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Discriminator/Vehicle.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DiscriminatorGroup/Vehicle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DiscriminatorGroup\\\\Vehicle\\:\\:__construct\\(\\) has parameter \\$km with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DiscriminatorGroup/Vehicle.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DiscriminatorGroup\\\\Vehicle\\:\\:\\$km has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DiscriminatorGroup/Vehicle.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Author\\:\\:__construct\\(\\) has parameter \\$id with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Author\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Author\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Author\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Author\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method add\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:__construct\\(\\) has parameter \\$title with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:addComment\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:getRef\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:setPublished\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$author is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$comments has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$createdAt has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$createdAt is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$published has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$published is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$ref has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$ref is never written, only read\\.$#',
	'identifier' => 'property.onlyRead',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$slug has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$title has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\BlogPost\\:\\:\\$title is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Comment\\:\\:__construct\\(\\) has parameter \\$text with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Comment\\:\\:getAuthor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Comment\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Comment\\:\\:\\$blogPost has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Comment\\:\\:\\$blogPost is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Comment\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Comment\\:\\:\\$text has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Comment\\:\\:\\$text is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\Embeddable\\\\BlogPostSeo\\:\\:\\$metaTitle is unused\\.$#',
	'identifier' => 'property.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/Embeddable/BlogPostSeo.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Clazz\\:\\:__construct\\(\\) has parameter \\$students with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Clazz\\:\\:getId\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Clazz\\:\\:getStudents\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Clazz\\:\\:getTeacher\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Clazz\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Clazz\\:\\:\\$id is never written, only read\\.$#',
	'identifier' => 'property.onlyRead',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Clazz\\:\\:\\$students has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Clazz\\:\\:\\$teacher has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Clazz.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Organization\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Organization.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Organization\\:\\:\\$id is unused\\.$#',
	'identifier' => 'property.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Organization.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Person\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Person.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Doctrine\\\\SingleTableInheritance\\\\Person\\:\\:\\$id is unused\\.$#',
	'identifier' => 'property.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Doctrine/SingleTableInheritance/Person.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Author\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Author\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Author\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Author\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Author.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method add\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:__construct\\(\\) has parameter \\$title with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:addComment\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:setPublished\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$author is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$comments has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$createdAt has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$createdAt is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$published has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$published is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$slug has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$title has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\BlogPost\\:\\:\\$title is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/BlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Comment\\:\\:__construct\\(\\) has parameter \\$text with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Comment\\:\\:getAuthor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Comment\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Comment\\:\\:\\$blogPost has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Comment\\:\\:\\$blogPost is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Comment\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Comment\\:\\:\\$text has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\DoctrinePHPCR\\\\Comment\\:\\:\\$text is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/DoctrinePHPCR/Comment.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ExcludePublicAccessor\\:\\:getId\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ExcludePublicAccessor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ExcludePublicAccessor\\:\\:\\$iShallNotBeAccessed is unused\\.$#',
	'identifier' => 'property.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ExcludePublicAccessor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Garage\\:\\:__construct\\(\\) has parameter \\$vehicles with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Garage.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Garage\\:\\:\\$vehicles has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Garage.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GetSetObject\\:\\:getId\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GetSetObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GetSetObject\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GetSetObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GetSetObject\\:\\:getReadOnlyProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GetSetObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GetSetObject\\:\\:setName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GetSetObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GetSetObject\\:\\:setName\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GetSetObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GetSetObject\\:\\:\\$excludedProperty has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GetSetObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GetSetObject\\:\\:\\$id has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GetSetObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GetSetObject\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GetSetObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GetSetObject\\:\\:\\$readOnlyProperty has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GetSetObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsObject\\:\\:\\$bar has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsObject\\:\\:\\$bar is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsObject\\:\\:\\$foo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsObject\\:\\:\\$foo is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsObject\\:\\:\\$foobar has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsObject\\:\\:\\$foobar is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsObject\\:\\:\\$none has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsObject\\:\\:\\$none is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsTrim.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsTrim\\:\\:__construct\\(\\) has parameter \\$amount with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsTrim.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsTrim\\:\\:__construct\\(\\) has parameter \\$currency with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsTrim.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsTrim\\:\\:getAmount\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsTrim.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsTrim\\:\\:getCurrency\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsTrim.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsTrim\\:\\:\\$currency \\(string\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsTrim.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:__construct\\(\\) has parameter \\$friends with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:\\$friends has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:\\$friends is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:\\$manager has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:\\$manager is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:\\$name is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:\\$nickname has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\GroupsUser\\:\\:\\$nickname is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/GroupsUser.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\+\\=" between mixed and 1 results in an error\\.$#',
	'identifier' => 'assignOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getAuthor\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\IndexedCommentsBlogPost\\:\\:getCommentsIndexedByAuthor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\IndexedCommentsList\\:\\:addComment\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$comment of method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\IndexedCommentsList\\:\\:addComment\\(\\) expects JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Comment, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\IndexedCommentsBlogPost\\:\\:\\$comments has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\IndexedCommentsList\\:\\:\\$comments has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\IndexedCommentsList\\:\\:\\$comments is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\IndexedCommentsList\\:\\:\\$count has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/IndexedCommentsBlogPost.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Construction\\\\UnserializeObjectConstructor\\:\\:construct\\(\\) invoked with 4 parameters, 5 required\\.$#',
	'identifier' => 'arguments.count',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InitializedBlogPostConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InitializedBlogPostConstructor\\:\\:construct\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InitializedBlogPostConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method construct\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InitializedObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InitializedObjectConstructor\\:\\:construct\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InitializedObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InitializedObjectConstructor\\:\\:construct\\(\\) should return object but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Fixtures/InitializedObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InitializedObjectConstructor\\:\\:\\$fallbackConstructor has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InitializedObjectConstructor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineChild\\:\\:\\$a has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineChild\\:\\:\\$b has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineChildWithGroups\\:\\:\\$a has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineChildWithGroups.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineChildWithGroups\\:\\:\\$b has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineChildWithGroups.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineParent\\:\\:__construct\\(\\) has parameter \\$child with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineParent\\:\\:\\$c has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineParent\\:\\:\\$c is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineParent\\:\\:\\$child has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineParent\\:\\:\\$child is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineParent\\:\\:\\$d has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineParent\\:\\:\\$d is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InlineParent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Input\\:\\:__construct\\(\\) has parameter \\$attributes with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Input.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Input\\:\\:\\$attributes has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Input.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Input\\:\\:\\$attributes is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Input.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InvalidGroupsObject\\:\\:\\$foo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InvalidGroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InvalidGroupsObject\\:\\:\\$foo is unused\\.$#',
	'identifier' => 'property.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InvalidGroupsObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InvalidUsageOfXmlValue\\:\\:\\$element has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InvalidUsageOfXmlValue.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InvalidUsageOfXmlValue\\:\\:\\$element is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InvalidUsageOfXmlValue.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InvalidUsageOfXmlValue\\:\\:\\$value has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InvalidUsageOfXmlValue.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InvalidUsageOfXmlValue\\:\\:\\$value is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/InvalidUsageOfXmlValue.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Log\\:\\:\\$authors has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Log.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Log\\:\\:\\$comments has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Log.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Log\\:\\:\\$comments is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Log.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\MaxDepth\\\\Gh236Bar\\:\\:\\$inner has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/MaxDepth/Gh236Bar.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\MaxDepth\\\\Gh236Bar\\:\\:\\$xxx has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/MaxDepth/Gh236Bar.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\MaxDepth\\\\Gh236Foo\\:\\:\\$a has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/MaxDepth/Gh236Foo.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to int\\.$#',
	'identifier' => 'cast.int',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/MultilineGroupsFormat.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\MultilineGroupsFormat\\:\\:__construct\\(\\) has parameter \\$amount with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/MultilineGroupsFormat.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\MultilineGroupsFormat\\:\\:__construct\\(\\) has parameter \\$currency with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/MultilineGroupsFormat.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\MultilineGroupsFormat\\:\\:getAmount\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/MultilineGroupsFormat.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\MultilineGroupsFormat\\:\\:getCurrency\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/MultilineGroupsFormat.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\MultilineGroupsFormat\\:\\:\\$currency \\(string\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/MultilineGroupsFormat.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\NamedDateTimeArraysObject\\:\\:__construct\\(\\) has parameter \\$namedArrayWithFormattedDate with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/NamedDateTimeArraysObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\NamedDateTimeArraysObject\\:\\:\\$namedArrayWithFormattedDate \\(array\\<DateTime\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/NamedDateTimeArraysObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\NamedDateTimeImmutableArraysObject\\:\\:__construct\\(\\) has parameter \\$namedArrayWithFormattedDate with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/NamedDateTimeImmutableArraysObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\NamedDateTimeImmutableArraysObject\\:\\:getNamedArrayWithFormattedDate\\(\\) should return array\\<DateTimeImmutable\\> but returns array\\<DateTime\\>\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/NamedDateTimeImmutableArraysObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\NamedDateTimeImmutableArraysObject\\:\\:\\$namedArrayWithFormattedDate \\(array\\<DateTime\\>\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/NamedDateTimeImmutableArraysObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Node\\:\\:__construct\\(\\) has parameter \\$children with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Node.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Node\\:\\:\\$children has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Node.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Node\\:\\:\\$foo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Node.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithAbsentXmlListNode\\:\\:\\$absent has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithAbsentXmlListNode.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithAbsentXmlListNode\\:\\:\\$absentAndNs has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithAbsentXmlListNode.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithAbsentXmlListNode\\:\\:\\$present has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithAbsentXmlListNode.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithAbsentXmlListNode\\:\\:\\$skipDefault has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithAbsentXmlListNode.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyArrayAndHash\\:\\:\\$array has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyArrayAndHash.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyArrayAndHash\\:\\:\\$array is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyArrayAndHash.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyArrayAndHash\\:\\:\\$hash has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyArrayAndHash.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyArrayAndHash\\:\\:\\$hash is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyArrayAndHash.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyArrayAndHash\\:\\:\\$object has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyArrayAndHash.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyArrayAndHash\\:\\:\\$object is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyArrayAndHash.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyHash\\:\\:\\$hash has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyHash.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyHash\\:\\:\\$hash is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyHash.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyNullableAndEmptyArrays\\:\\:\\$empty_inline has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyNullableAndEmptyArrays\\:\\:\\$empty_not_inline has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyNullableAndEmptyArrays\\:\\:\\$empty_not_inline_skip has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyNullableAndEmptyArrays\\:\\:\\$not_empty_inline has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyNullableAndEmptyArrays\\:\\:\\$not_empty_not_inline has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyNullableAndEmptyArrays\\:\\:\\$not_empty_not_inline_skip has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyNullableAndEmptyArrays\\:\\:\\$null_inline has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyNullableAndEmptyArrays\\:\\:\\$null_not_inline has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithEmptyNullableAndEmptyArrays\\:\\:\\$null_not_inline_skip has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithEmptyNullableAndEmptyArrays.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithExpressionVirtualPropertiesAndExcludeAll\\:\\:getVirtualValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithExpressionVirtualPropertiesAndExcludeAll.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithHandlerCallbacks\\:\\:toJson\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithHandlerCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithHandlerCallbacks\\:\\:toXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithHandlerCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithHandlerCallbacks\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithHandlerCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithInlineArray\\:\\:__construct\\(\\) has parameter \\$array with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithInlineArray.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithInlineArray\\:\\:\\$array has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithInlineArray.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithIntListAndIntMap\\:\\:__construct\\(\\) has parameter \\$list with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithIntListAndIntMap.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithIntListAndIntMap\\:\\:__construct\\(\\) has parameter \\$map with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithIntListAndIntMap.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithIntListAndIntMap\\:\\:\\$list has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithIntListAndIntMap.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithIntListAndIntMap\\:\\:\\$list is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithIntListAndIntMap.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithIntListAndIntMap\\:\\:\\$map has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithIntListAndIntMap.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithIntListAndIntMap\\:\\:\\$map is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithIntListAndIntMap.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between mixed and \' \' results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between non\\-falsy\\-string and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:__construct\\(\\) has parameter \\$firstname with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:__construct\\(\\) has parameter \\$lastname with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:afterDeserialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:afterDeserialization\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:cleanUpAfterSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:cleanUpAfterSerialization\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:prepareForSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:prepareForSerialization\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$str of function explode expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:\\$firstname has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:\\$lastname has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithLifecycleCallbacks\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithLifecycleCallbacks.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$addresses has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$addressesAlternativeB has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$addressesAlternativeC has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$addressesAlternativeD has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$nameAlternativeB has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$phones has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$phonesAlternativeB has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$phonesAlternativeC has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndList\\:\\:\\$phonesAlternativeD has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndList.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithNamespacesAndNestedList\\:\\:\\$personCollection has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithNamespacesAndNestedList.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithObjectProperty\\:\\:getAuthor\\(\\) should return JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Author but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithObjectProperty\\:\\:getFoo\\(\\) should return string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithObjectProperty\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithObjectProperty\\:\\:\\$author is never written, only read\\.$#',
	'identifier' => 'property.onlyRead',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithObjectProperty\\:\\:\\$foo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithObjectProperty\\:\\:\\$foo is never written, only read\\.$#',
	'identifier' => 'property.onlyRead',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithToString\\:\\:__construct\\(\\) has parameter \\$input with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithToString.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithToString\\:\\:__toString\\(\\) should return string but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithToString.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithToString\\:\\:\\$input has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithToString.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVersionedVirtualProperties\\:\\:getVirualHighValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVersionedVirtualProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVersionedVirtualProperties\\:\\:getVirualLowValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVersionedVirtualProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualProperties\\:\\:getEmptyArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualProperties\\:\\:getTypedVirtualProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualProperties\\:\\:getVirtualSerializedValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualProperties\\:\\:getVirtualValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualProperties\\:\\:\\$existField has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualPropertiesAndExcludeAll\\:\\:getVirtualValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualPropertiesAndExcludeAll.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualXmlProperties\\:\\:getVirualHighValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualXmlProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualXmlProperties\\:\\:getVirualLowValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualXmlProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualXmlProperties\\:\\:getVirualXmlAttributeValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualXmlProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualXmlProperties\\:\\:getVirualXmlList\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualXmlProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualXmlProperties\\:\\:getVirualXmlMap\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualXmlProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithVirtualXmlProperties\\:\\:getVirualXmlValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithVirtualXmlProperties.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairs\\:\\:\\$array is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairs.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairs\\:\\:\\$array type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairs.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithObjectType\\:\\:__construct\\(\\) has parameter \\$list with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithObjectType.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithObjectType\\:\\:create1\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithObjectType.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithObjectType\\:\\:\\$list is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithObjectType.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithObjectType\\:\\:\\$list type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithObjectType.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithType\\:\\:__construct\\(\\) has parameter \\$list with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithType.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithType\\:\\:__construct\\(\\) has parameter \\$list2 with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithType.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithType\\:\\:create1\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithType.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithType\\:\\:create2\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithType.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithType\\:\\:\\$list is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithType.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithType\\:\\:\\$list type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithType.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithType\\:\\:\\$list2 is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithType.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlKeyValuePairsWithType\\:\\:\\$list2 type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlKeyValuePairsWithType.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespaces\\:\\:__construct\\(\\) has parameter \\$author with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespaces.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespaces\\:\\:__construct\\(\\) has parameter \\$language with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespaces.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespaces\\:\\:__construct\\(\\) has parameter \\$title with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespaces.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespaces\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespaces.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespaces\\:\\:\\$createdAt has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespaces.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespaces\\:\\:\\$etag has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespaces.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespaces\\:\\:\\$language has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespaces.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespaces\\:\\:\\$title has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespaces.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectProperty\\:\\:__construct\\(\\) has parameter \\$author with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectProperty\\:\\:__construct\\(\\) has parameter \\$title with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectProperty\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectProperty\\:\\:\\$author is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectProperty\\:\\:\\$title has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectProperty\\:\\:\\$title is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectProperty.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyAuthor\\:\\:__construct\\(\\) has parameter \\$author with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyAuthor\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyAuthor\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyAuthor\\:\\:\\$author is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyAuthor\\:\\:\\$info has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyAuthor\\:\\:\\$info is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyAuthor\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyAuthor\\:\\:\\$name is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyAuthor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyVirtual\\:\\:__construct\\(\\) has parameter \\$author with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyVirtual\\:\\:__construct\\(\\) has parameter \\$title with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyVirtual\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyVirtual\\:\\:\\$author is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyVirtual\\:\\:\\$title has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlNamespacesAndObjectPropertyVirtual\\:\\:\\$title is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlNamespacesAndObjectPropertyVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:__construct\\(\\) has parameter \\$author with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:__construct\\(\\) has parameter \\$language with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:__construct\\(\\) has parameter \\$title with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:\\$author has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:\\$author is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:\\$createdAt has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:\\$etag has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:\\$etag is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:\\$language has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:\\$language is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:\\$title has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ObjectWithXmlRootNamespace\\:\\:\\$title is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ObjectWithXmlRootNamespace.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Order\\:\\:\\$cost has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Order.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentDoNotSkipWithEmptyChild\\:\\:__construct\\(\\) has parameter \\$child with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentDoNotSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentDoNotSkipWithEmptyChild\\:\\:\\$c has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentDoNotSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentDoNotSkipWithEmptyChild\\:\\:\\$c is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentDoNotSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentDoNotSkipWithEmptyChild\\:\\:\\$child \\(JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineChild\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentDoNotSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentDoNotSkipWithEmptyChild\\:\\:\\$child is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentDoNotSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentDoNotSkipWithEmptyChild\\:\\:\\$d has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentDoNotSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentDoNotSkipWithEmptyChild\\:\\:\\$d is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentDoNotSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentSkipWithEmptyChild\\:\\:__construct\\(\\) has parameter \\$child with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentSkipWithEmptyChild\\:\\:\\$c has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentSkipWithEmptyChild\\:\\:\\$c is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentSkipWithEmptyChild\\:\\:\\$child \\(JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\InlineChild\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentSkipWithEmptyChild\\:\\:\\$child is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentSkipWithEmptyChild\\:\\:\\$d has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\ParentSkipWithEmptyChild\\:\\:\\$d is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/ParentSkipWithEmptyChild.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Person\\:\\:\\$age has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Person.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Person\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Person.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonCollection\\:\\:\\$location has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonCollection.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonCollection\\:\\:\\$persons has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonCollection.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonLocation\\:\\:\\$location has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonLocation.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonLocation\\:\\:\\$person has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonLocation.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecret\\:\\:\\$age has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecret.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecret\\:\\:\\$gender has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecret.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecret\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecret.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretMore\\:\\:\\$gender has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretMore.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretMore\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretMore.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretMoreVirtual\\:\\:getGender\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretMoreVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretMoreVirtual\\:\\:\\$gender has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretMoreVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretMoreVirtual\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretMoreVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretVirtual\\:\\:getGender\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretVirtual\\:\\:\\$age has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretVirtual\\:\\:\\$gender has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretVirtual\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretVirtual.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretWithVariables\\:\\:test\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretWithVariables.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretWithVariables\\:\\:\\$gender has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretWithVariables.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\PersonSecretWithVariables\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/PersonSecretWithVariables.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Price\\:\\:__construct\\(\\) has parameter \\$price with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Price.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Price\\:\\:\\$price has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Price.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Price\\:\\:\\$price is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Price.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Publisher\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Publisher.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Publisher\\:\\:getName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Publisher.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Publisher\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Publisher.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleClassObject\\:\\:\\$bar has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleClassObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleClassObject\\:\\:\\$foo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleClassObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleClassObject\\:\\:\\$moo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleClassObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleInternalObject\\:\\:__construct\\(\\) has parameter \\$bar with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleInternalObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleInternalObject\\:\\:__construct\\(\\) has parameter \\$foo with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleInternalObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$message of method Exception\\:\\:__construct\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleInternalObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleInternalObject\\:\\:\\$bar has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleInternalObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleInternalObject\\:\\:\\$bar is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleInternalObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleInternalObject\\:\\:\\$camelCase has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleInternalObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObject\\:\\:__construct\\(\\) has parameter \\$bar with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObject\\:\\:__construct\\(\\) has parameter \\$foo with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObject\\:\\:getBar\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObject\\:\\:getFoo\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObject\\:\\:\\$bar has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObject\\:\\:\\$camelCase has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObject\\:\\:\\$foo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Class JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectProxy implements generic interface Doctrine\\\\Persistence\\\\Proxy but does not specify its types\\: T$#',
	'identifier' => 'missingType.generics',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectProxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectProxy\\:\\:__isInitialized\\(\\) should return bool but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectProxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectProxy\\:\\:\\$__isInitialized__ has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectProxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectProxy\\:\\:\\$baz has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectProxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectProxy\\:\\:\\$baz is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectProxy.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectWithStaticProp\\:\\:__construct\\(\\) has parameter \\$bar with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectWithStaticProp.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectWithStaticProp\\:\\:__construct\\(\\) has parameter \\$foo with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectWithStaticProp.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectWithStaticProp\\:\\:\\$bar has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectWithStaticProp.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectWithStaticProp\\:\\:\\$camelCase has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectWithStaticProp.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectWithStaticProp\\:\\:\\$foo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectWithStaticProp.php',
];
$ignoreErrors[] = [
	'message' => '#^Static property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectWithStaticProp\\:\\:\\$bar is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectWithStaticProp.php',
];
$ignoreErrors[] = [
	'message' => '#^Static property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleObjectWithStaticProp\\:\\:\\$foo is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleObjectWithStaticProp.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleSubClassObject\\:\\:\\$baz has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleSubClassObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleSubClassObject\\:\\:\\$moo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleSubClassObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\SimpleSubClassObject\\:\\:\\$qux has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/SimpleSubClassObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Tag\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Tag.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Tag\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Tag.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Timestamp\\:\\:__construct\\(\\) has parameter \\$timestamp with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Timestamp.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Timestamp\\:\\:getTimestamp\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Timestamp.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Timestamp\\:\\:\\$timestamp has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Timestamp.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Tree\\:\\:__construct\\(\\) has parameter \\$tree with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Tree.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Tree\\:\\:\\$tree has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/Tree.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\VehicleInterfaceGarage\\:\\:__construct\\(\\) has parameter \\$vehicles with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/VehicleInterfaceGarage.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\VehicleInterfaceGarage\\:\\:\\$vehicles has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/VehicleInterfaceGarage.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\VersionedObject\\:\\:__construct\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/VersionedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\VersionedObject\\:\\:__construct\\(\\) has parameter \\$name2 with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/VersionedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\VersionedObject\\:\\:\\$name has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/VersionedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\VersionedObject\\:\\:\\$name is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/VersionedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\VersionedObject\\:\\:\\$name2 has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/VersionedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\VersionedObject\\:\\:\\$name2 is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Fixtures/VersionedObject.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\ArrayCollectionHandlerTest\\:\\:testSerializeArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/ArrayCollectionHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\ArrayCollectionHandlerTest\\:\\:testSerializeArraySkipByExclusionStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/ArrayCollectionHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method format\\(\\) on DateTime\\|false\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method format\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setTimezone\\(\\) on DateTime\\|false\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DateHandlerTest\\:\\:getParams\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DateHandlerTest\\:\\:testImmutableTimeZoneGetsPreservedWithUnixTimestamp\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DateHandlerTest\\:\\:testSerializeDate\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DateHandlerTest\\:\\:testSerializeDate\\(\\) has parameter \\$params with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DateHandlerTest\\:\\:testTimePartGetsPreserved\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DateHandlerTest\\:\\:testTimePartGetsRemoved\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DateHandlerTest\\:\\:testTimeZoneGetsPreservedWithUnixTimestamp\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$datetime of static method DateTime\\:\\:createFromFormat\\(\\) expects string, int\\<1, max\\> given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Handler/DateHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function assert\\(\\) with true will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 4,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method expects\\(\\) on an unknown class Symfony\\\\Component\\\\Translation\\\\TranslatorInterface\\.$#',
	'identifier' => 'class.notFound',
	'count' => 6,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addError\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Class Symfony\\\\Component\\\\Translation\\\\TranslatorInterface not found\\.$#',
	'identifier' => 'class.notFound',
	'count' => 4,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between \\(PHPUnit\\\\Framework\\\\MockObject\\\\MockObject&Symfony\\\\Component\\\\Translation\\\\TranslatorInterface\\)\\|\\(PHPUnit\\\\Framework\\\\MockObject\\\\MockObject&Symfony\\\\Contracts\\\\Translation\\\\TranslatorInterface\\) and PHPUnit\\\\Framework\\\\MockObject\\\\MockObject will always evaluate to true\\.$#',
	'identifier' => 'instanceof.alwaysTrue',
	'count' => 4,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:createForm\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:getMockForm\\(\\) has invalid return type PHPUnit_Framework_MockObject_MockObject\\.$#',
	'identifier' => 'class.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:getMockForm\\(\\) should return PHPUnit_Framework_MockObject_MockObject but returns PHPUnit\\\\Framework\\\\MockObject\\\\MockObject&Symfony\\\\Component\\\\Form\\\\Test\\\\FormInterface\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:invokeMethod\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:invokeMethod\\(\\) has parameter \\$args with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:invokeMethod\\(\\) has parameter \\$method with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:invokeMethod\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:testCustomTranslationDomain\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:testCustomTranslationDomainWithPluralTranslation\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:testDefaultTranslationDomain\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:testDefaultTranslationDomainWithPluralTranslation\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:testErrorHandlerWithoutTranslator\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:testSerializeChildElements\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:testSerializeEmptyFormError\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:testSerializeHasFormError\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method ReflectionMethod\\:\\:invokeArgs\\(\\) expects object\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$objectOrMethod of class ReflectionMethod constructor expects object\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$visitor of method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormToJson\\(\\) expects JMS\\\\Serializer\\\\JsonSerializationVisitor, JMS\\\\Serializer\\\\VisitorInterface given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$form of method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormToJson\\(\\) expects Symfony\\\\Component\\\\Form\\\\Form, Symfony\\\\Component\\\\Form\\\\FormInterface given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$form of method JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\:\\:serializeFormToJson\\(\\) expects Symfony\\\\Component\\\\Form\\\\Form, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$method of class ReflectionMethod constructor expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:\\$dispatcher \\(Symfony\\\\Component\\\\EventDispatcher\\\\EventDispatcherInterface\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:\\$factory \\(Symfony\\\\Component\\\\Form\\\\FormFactoryInterface\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:\\$handler \\(JMS\\\\Serializer\\\\Handler\\\\FormErrorHandler\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Handler\\\\FormErrorHandlerTest\\:\\:\\$visitor \\(JMS\\\\Serializer\\\\VisitorInterface\\) does not accept null\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of \\|\\| is always true\\.$#',
	'identifier' => 'booleanOr.alwaysTrue',
	'count' => 4,
	'path' => __DIR__ . '/tests/Handler/FormErrorHandlerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Handler/HandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method registerHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Handler/HandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DummyHandler\\:\\:__call\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/HandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DummyHandler\\:\\:__call\\(\\) has parameter \\$arguments with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/HandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\DummyHandler\\:\\:__call\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/HandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\HandlerRegistryTest\\:\\:createHandlerRegistry\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/HandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\HandlerRegistryTest\\:\\:testRegisteredHandlersCanBeRetrieved\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/HandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Handler\\\\HandlerRegistryTest\\:\\:\\$handlerRegistry has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/HandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method registerHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\HandlerService\\:\\:handle\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryTest\\:\\:createContainer\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryTest\\:\\:createHandlerRegistry\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryTest\\:\\:registerHandlerService\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryTest\\:\\:registerHandlerService\\(\\) has parameter \\$listener with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryTest\\:\\:registerHandlerService\\(\\) has parameter \\$serviceId with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryTest\\:\\:testRegisteredHandlersCanBeRetrievedWhenBeingDefinedAsServices\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryTest\\:\\:\\$container has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method set\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryWithPsr11ContainerTest\\:\\:createContainer\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryWithPsr11ContainerTest\\:\\:registerHandlerService\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryWithPsr11ContainerTest\\:\\:registerHandlerService\\(\\) has parameter \\$listener with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryWithPsr11ContainerTest\\:\\:registerHandlerService\\(\\) has parameter \\$serviceId with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\Psr11Container\\:\\:set\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\Psr11Container\\:\\:set\\(\\) has parameter \\$id with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\Psr11Container\\:\\:set\\(\\) has parameter \\$service with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Handler\\\\Psr11Container\\:\\:\\$services has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method set\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithSymfonyContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryWithSymfonyContainerTest\\:\\:createContainer\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithSymfonyContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryWithSymfonyContainerTest\\:\\:registerHandlerService\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithSymfonyContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryWithSymfonyContainerTest\\:\\:registerHandlerService\\(\\) has parameter \\$listener with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithSymfonyContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Handler\\\\LazyHandlerRegistryWithSymfonyContainerTest\\:\\:registerHandlerService\\(\\) has parameter \\$serviceId with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Handler/LazyHandlerRegistryWithSymfonyContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$excludeIf on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$groups on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$inline on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$maxDepth on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$serializedName on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$sinceVersion on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$skipWhenEmpty on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$type on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$untilVersion on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlAttribute on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlAttributeMap on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlCollection on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlCollectionInline on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlCollectionSkipWhenEmpty on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlElementCData on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlEntryName on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlEntryNamespace on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlKeyAttribute on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlKeyValuePairs on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlNamespace on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlValue on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\AbstractPropertyMetadataTest\\:\\:setNonDefaultMetadataValues\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\AbstractPropertyMetadataTest\\:\\:setNonDefaultMetadataValues\\(\\) has parameter \\$metadata with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/AbstractPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'A\\:\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'B\\:\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'C\\:\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'D\\:\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:getAccessOrderCases\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:providerPublicMethodData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:providerPublicMethodException\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethod\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethod\\(\\) has parameter \\$getterInit with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethod\\(\\) has parameter \\$getterName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethod\\(\\) has parameter \\$property with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethod\\(\\) has parameter \\$setterInit with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethod\\(\\) has parameter \\$setterName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethodException\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethodException\\(\\) has parameter \\$getter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethodException\\(\\) has parameter \\$message with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testAccessorTypePublicMethodException\\(\\) has parameter \\$setter with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testSetAccessorOrderAlphabetical\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testSetAccessorOrderCustom\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testSetAccessorOrderCustom\\(\\) has parameter \\$expected with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ClassMetadataTest\\:\\:testSetAccessorOrderCustom\\(\\) has parameter \\$order with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:fetchD\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:getA\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:hasC\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:isB\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:saveD\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:saveD\\(\\) has parameter \\$d with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:setA\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:setA\\(\\) has parameter \\$a with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:setB\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:setB\\(\\) has parameter \\$b with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:setC\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:setC\\(\\) has parameter \\$c with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_keys expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$message of method PHPUnit\\\\Framework\\\\TestCase\\:\\:expectExceptionMessage\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function strtoupper expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataOrder\\:\\:\\$a has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataOrder\\:\\:\\$a is unused\\.$#',
	'identifier' => 'property.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataOrder\\:\\:\\$b has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataOrder\\:\\:\\$b is unused\\.$#',
	'identifier' => 'property.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:\\$a has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:\\$b has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:\\$c has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:\\$d has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:\\$e has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataPublicMethod\\:\\:\\$e is unused\\.$#',
	'identifier' => 'property.unused',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ClassMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$discriminatorBaseClass\\.$#',
	'identifier' => 'property.notFound',
	'count' => 6,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$discriminatorFieldName\\.$#',
	'identifier' => 'property.notFound',
	'count' => 6,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$discriminatorGroups\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$discriminatorMap\\.$#',
	'identifier' => 'property.notFound',
	'count' => 6,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$discriminatorValue\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$handlerCallbacks\\.$#',
	'identifier' => 'property.notFound',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$xmlDiscriminatorAttribute\\.$#',
	'identifier' => 'property.notFound',
	'count' => 3,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$xmlDiscriminatorCData\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$xmlDiscriminatorNamespace\\.$#',
	'identifier' => 'property.notFound',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$xmlNamespaces\\.$#',
	'identifier' => 'property.notFound',
	'count' => 35,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$xmlRootName\\.$#',
	'identifier' => 'property.notFound',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property Metadata\\\\ClassMetadata\\:\\:\\$xmlRootNamespace\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method Metadata\\\\ClassMetadata\\:\\:merge\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method PHPUnit\\\\Framework\\\\Assert\\:\\:assertNotNull\\(\\) with Metadata\\\\ClassMetadata will always evaluate to true\\.$#',
	'identifier' => 'method.alreadyNarrowedType',
	'count' => 15,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertNotNull\\(\\) with JMS\\\\Serializer\\\\Metadata\\\\ClassMetadata will always evaluate to true\\.$#',
	'identifier' => 'staticMethod.alreadyNarrowedType',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'absent\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'age\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'array\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'atom\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'author\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'bar\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'baz\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'c\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'child\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'children\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'class\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'comments\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'createdAt\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'d\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'dc\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'etag\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'foo\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 5,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'gd\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'gender\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'id\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'json\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'language\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'moo\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'new_foo\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'old_foo\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'present\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'price\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'published\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'qux\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'skipDefault\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'title\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'virtualSerializedValue\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'virtualValue\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'xml\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$maxDepth on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$serializedName on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlCollectionSkipWhenEmpty on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlElementCData on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlKeyValuePairs on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:assetMetadataEquals\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testExcludePropertyNoPublicAccessorException\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testExclusionIf\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testExpressionVirtualProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testExpressionVirtualPropertyWithExcludeAll\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testHandlerCallbacks\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadBlogPostMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadDiscriminator\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadDiscriminatorSubClass\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadDiscriminatorSubClassWhenParentIsInDiscriminatorMap\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadDiscriminatorWhenParentIsInDiscriminatorMap\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadDiscriminatorWithGroup\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadXmlDiscriminator\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadXmlDiscriminatorWithAttributeNamespaces\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadXmlDiscriminatorWithNamespaces\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testLoadXmlObjectWithNamespacesMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testMaxDepth\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testPersonCData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testReadOnlyDefinedBeforeGetterAndSetter\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testSkipWhenEmptyOption\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testVirtualProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testVirtualPropertyWithExcludeAll\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testXMLListAbsentNode\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testXmlKeyValuePairs\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:testXmlNamespaceInheritanceMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$m ClassMetadata\\)\\: Unexpected token "\\$m", expected type at offset 9 on line 1$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 8,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_keys expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$actual of method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\BaseDriverTest\\:\\:assetMetadataEquals\\(\\) expects JMS\\\\Serializer\\\\Metadata\\\\PropertyMetadata, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 5,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertArrayHasKey\\(\\) expects array\\|ArrayAccess, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 26,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertArrayNotHasKey\\(\\) expects array\\|ArrayAccess, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertCount\\(\\) expects Countable\\|iterable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 8,
	'path' => __DIR__ . '/tests/Metadata/Driver/BaseDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\-" between mixed and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'author\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'comments\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'createdAt\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'id\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'published\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'ref\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'slug\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$createdAt on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$propertyMetadata on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 9,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$type on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 7,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method loadMetadataForClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:getAnnotationDriver\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:getDoctrineDriver\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:getEntityManager\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:getMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:testExcludePropertyNoPublicAccessorException\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:testGuidPropertyIsGivenStringType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:testMultiValuedAssociationIsProperlyHinted\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:testNonDoctrineEntityClassIsNotModified\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:testSingleValuedAssociationIsProperlyHinted\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:testTypeGuessByDoctrineIsOverwrittenByDelegateDriver\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:testTypelessPropertyIsGivenTypeFromDoctrineMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:testUnknownDoctrineTypeDoesNotResultInAGuess\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\DoctrineDriverTest\\:\\:testVirtualPropertiesAreNotModified\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$delegate of class JMS\\\\Serializer\\\\Metadata\\\\Driver\\\\DoctrineTypeDriver constructor expects Metadata\\\\Driver\\\\DriverInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertArrayHasKey\\(\\) expects array\\|ArrayAccess, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertArrayNotHasKey\\(\\) expects array\\|ArrayAccess, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/DoctrineDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\NullDriverTest\\:\\:testReturnsValidMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/NullDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertCount\\(\\) expects Countable\\|iterable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/NullDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'/\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'currency\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'title\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$groups on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\XmlDriverTest\\:\\:testAccessorAttributes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\XmlDriverTest\\:\\:testBlogPostCaseInsensitive\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\XmlDriverTest\\:\\:testBlogPostExcludeAllStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\XmlDriverTest\\:\\:testBlogPostExcludeNoneStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\XmlDriverTest\\:\\:testGroupsTrim\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\XmlDriverTest\\:\\:testInvalidXml\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\XmlDriverTest\\:\\:testMultilineGroups\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertArrayHasKey\\(\\) expects array\\|ArrayAccess, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertArrayNotHasKey\\(\\) expects array\\|ArrayAccess, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of static method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\XmlDriverTest\\:\\:assertArraySubset\\(\\) expects array\\<mixed\\>\\|ArrayAccess, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/XmlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'/\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'title\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$name on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$propertyMetadata on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 10,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method loadMetadataForClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 6,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\YamlDriverTest\\:\\:getDriver\\(\\) should return Metadata\\\\Driver\\\\DriverInterface but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\YamlDriverTest\\:\\:getDriverForSubDir\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\YamlDriverTest\\:\\:getDriverForSubDir\\(\\) has parameter \\$subDir with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\YamlDriverTest\\:\\:testAccessorOrderIsInferred\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\YamlDriverTest\\:\\:testBlogPost\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\YamlDriverTest\\:\\:testBlogPostAccessor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\YamlDriverTest\\:\\:testBlogPostCaseInsensitive\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\YamlDriverTest\\:\\:testBlogPostExcludeNoneStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\Driver\\\\YamlDriverTest\\:\\:testShortExposeSyntax\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$input of function array_keys expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertArrayHasKey\\(\\) expects array\\|ArrayAccess, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$array of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertArrayNotHasKey\\(\\) expects array\\|ArrayAccess, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Metadata/Driver/YamlDriverTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\ExpressionPropertyMetadataTest\\:\\:testSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/ExpressionPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\PropertyMetadataTest\\:\\:testSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/PropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\StaticPropertyMetadataTest\\:\\:testSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/StaticPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Metadata\\\\VirtualPropertyMetadataTest\\:\\:testSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Metadata/VirtualPropertyMetadataTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method fromArray\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method toArray\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ArrayTest\\:\\:scalarValues\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ArrayTest\\:\\:testFromArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ArrayTest\\:\\:testToArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ArrayTest\\:\\:testToArrayConversNestedArrayObjects\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ArrayTest\\:\\:testToArrayReturnsArrayObjectAsArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ArrayTest\\:\\:testToArrayWithScalar\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ArrayTest\\:\\:testToArrayWithScalar\\(\\) has parameter \\$input with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ArrayTest\\:\\:\\$serializer has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ArrayTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Argument of an invalid type mixed supplied for foreach, only iterables are supported\\.$#',
	'identifier' => 'foreach.nonIterable',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'boolean_\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method object\\:\\:getTimestamp\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method PHPUnit\\\\Framework\\\\Assert\\:\\:assertNull\\(\\) with null will always evaluate to true\\.$#',
	'identifier' => 'method.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method PHPUnit\\\\Framework\\\\Assert\\:\\:assertTrue\\(\\) with false and \'Serialization…\' will always evaluate to false\\.$#',
	'identifier' => 'method.impossibleType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$author on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$comments on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$comments2 on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$etag on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$i on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$id on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$name on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$published on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$readOnlyProperty on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$reviewed on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$someProperty on array\\|bool\\|float\\|int\\|object\\|string\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$tag on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$title on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addExclusionStrategy\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method enableMaxDepthChecks\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method format\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getParent\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getTimestamp\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 8,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method registerHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setGroups\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 8,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setSerializeNull\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 7,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setVersion\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:deserialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:deserialize\\(\\) has parameter \\$content with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:deserialize\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:expressionFunctionProvider\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getBooleans\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getContent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getContent\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getDateTime\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getDateTimeImmutable\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getField\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getField\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getField\\(\\) has parameter \\$obj with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getFormat\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getNumerics\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:getTypes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:hasDeserializer\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:serialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:serialize\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:setField\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:setField\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:setField\\(\\) has parameter \\$obj with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:setField\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testAccessorOrder\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testAdvancedGroups\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testArrayBooleans\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testArrayEmpty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testArrayFloats\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testArrayIntegers\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testArrayListAndMapDifference\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testArrayMixed\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testArrayObjects\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testArrayStrings\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testArticle\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testBlogPost\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testBooleans\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testBooleans\\(\\) has parameter \\$boolean with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testBooleans\\(\\) has parameter \\$strBoolean with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testCircularReference\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testConstraintViolation\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testConstraintViolationList\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testCurrencyAwarePrice\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testCustomAccessor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testCustomHandler\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateInterval\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateTime\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateTime\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateTime\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateTime\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateTimeArrays\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateTimeImmutable\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateTimeImmutable\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateTimeImmutable\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDateTimeImmutable\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDepthExclusionStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDeserializeNullObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDeserializingIntoExistingObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDeserializingNull\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testDoctrineProxy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testEmptyChild\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testExpressionAccessorStrategNotEnabled\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testExpressionAuthor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testExpressionExclusion\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testExpressionExclusion\\(\\) has parameter \\$json with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testExpressionExclusionConfiguredWithDisjunctStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testExpressionExclusionNotConfigured\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testFormErrors\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testFormErrorsWithNonFormComponents\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testGroups\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testInitializedDoctrineProxy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testInline\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testInlineEmptyChild\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testInput\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testInvalidGroupName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testLifecycleCallbacks\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testLog\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testMaxDepthWithSkippableObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testMixedAccessTypes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNamedDateTimeArrays\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNamedDateTimeImmutableArrays\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNestedFormErrors\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNestedPolymorphicInterfaces\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNestedPolymorphicObjects\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNull\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNull\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNumerics\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNumerics\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNumerics\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testNumerics\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testObjectUsingTypeCasting\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testObjectWithEmptyHash\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testObjectWithNullableArrays\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testOrder\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testOrderWithCurrencyAwarePrice\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testPolymorphicObjects\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testPolymorphicObjectsInvalidDeserialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testPolymorphicObjectsWithGroup\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testPrice\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testReadOnly\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testReadOnlyClass\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testSerializeNullArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testSerializeNullArrayExcludingNulls\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testSerializeNullObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testSerializeObjectWhenNull\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testSimpleInternalObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testSimpleObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testSimpleObjectStaticProp\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testSkipEmptyChild\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testString\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testTimestamp\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testVirtualProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:testVirtualVersions\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$author of method JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\AuthorList\\:\\:add\\(\\) expects JMS\\\\Serializer\\\\Tests\\\\Fixtures\\\\Author, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of method JMS\\\\Serializer\\\\Serializer\\:\\:deserialize\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) expects array\\|bool\\|float\\|int\\|object\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$factory of class JMS\\\\Serializer\\\\Serializer constructor expects Metadata\\\\MetadataFactoryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 5,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$iterator of function iterator_to_array expects Traversable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of function get_class expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method ReflectionProperty\\:\\:getValue\\(\\) expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$objectOrValue of method ReflectionProperty\\:\\:setValue\\(\\) expects object\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$var of function count expects array\\|Countable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$context of method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:serialize\\(\\) expects JMS\\\\Serializer\\\\Context\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 10,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$format of method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 21,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$handlerRegistry of class JMS\\\\Serializer\\\\Serializer constructor expects JMS\\\\Serializer\\\\Handler\\\\HandlerRegistryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 6,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$property of class ReflectionProperty constructor expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$type of method JMS\\\\Serializer\\\\Serializer\\:\\:deserialize\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$context of method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) expects JMS\\\\Serializer\\\\SerializationContext\\|null, JMS\\\\Serializer\\\\Context\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$context of method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) expects JMS\\\\Serializer\\\\SerializationContext\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 9,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$context of method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:deserialize\\(\\) expects JMS\\\\Serializer\\\\Context\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$format of method JMS\\\\Serializer\\\\Handler\\\\HandlerRegistry\\:\\:registerHandler\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$format of method JMS\\\\Serializer\\\\Serializer\\:\\:deserialize\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$message of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertEquals\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$objectConstructor of class JMS\\\\Serializer\\\\Serializer constructor expects JMS\\\\Serializer\\\\Construction\\\\ObjectConstructorInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$context of method JMS\\\\Serializer\\\\Serializer\\:\\:deserialize\\(\\) expects JMS\\\\Serializer\\\\DeserializationContext\\|null, JMS\\\\Serializer\\\\Context\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$serializationVisitors of class JMS\\\\Serializer\\\\Serializer constructor expects PhpCollection\\\\MapInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 5,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$deserializationVisitors of class JMS\\\\Serializer\\\\Serializer constructor expects PhpCollection\\\\MapInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 6,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:\\$deserializationVisitors has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:\\$factory has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:\\$handlerRegistry has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:\\$objectConstructor has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:\\$serializationVisitors has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'identifier' => 'deadCode.unreachable',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/BaseSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Anonymous function has an unused use \\$child\\.$#',
	'identifier' => 'closure.unusedUse',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Anonymous function has an unused use \\$object\\.$#',
	'identifier' => 'closure.unusedUse',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 0 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 5,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 2 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$attributes on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$children on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$name on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 6,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addExclusionStrategy\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method build\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method count\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method get\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getInitialType\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method isVisiting\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method serialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method set\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setInitialType\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setSerializeNull\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method shouldSerializeNull\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 5,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method startVisiting\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method stopVisiting\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ContextTest\\:\\:getScalars\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ContextTest\\:\\:testCanVisitScalars\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ContextTest\\:\\:testCanVisitScalars\\(\\) has parameter \\$scalar with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ContextTest\\:\\:testInitialTypeCompatibility\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ContextTest\\:\\:testSerializationContextPathAndDepth\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ContextTest\\:\\:testSerializationMetadataStack\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ContextTest\\:\\:testSerializeNullOption\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/ContextTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\DateIntervalFormatTest\\:\\:testFormat\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/DateIntervalFormatTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method build\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setMetadataDriverFactory\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\IntegrationTest\\:\\:createConnection\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\IntegrationTest\\:\\:createEntityManager\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\IntegrationTest\\:\\:prepareDatabase\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\IntegrationTest\\:\\:testDiscriminatorIsInferredForEntityBaseClass\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\IntegrationTest\\:\\:testDiscriminatorIsInferredForGenericBaseClass\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:__construct\\(\\) has parameter \\$proxyInterface with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:__construct\\(\\) has parameter \\$serviceCreator with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:getService\\(\\) should return Doctrine\\\\Persistence\\\\ObjectManager but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$con of method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\IntegrationTest\\:\\:createEntityManager\\(\\) expects Doctrine\\\\DBAL\\\\Connection, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, mixed given\\.$#',
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
	'message' => '#^Parameter \\#4 \\$defaultConnection of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, int\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$defaultManager of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, int\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$proxyInterfaceName of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects class\\-string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\IntegrationTest\\:\\:\\$serializer \\(JMS\\\\Serializer\\\\Serializer\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:\\$serviceCreator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleManagerRegistry\\:\\:\\$services has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/IntegrationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to method PHPUnit\\\\Framework\\\\Assert\\:\\:assertNull\\(\\) with object will always evaluate to false\\.$#',
	'identifier' => 'method.impossibleType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addDefaultHandlers\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method build\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setMetadataDriverFactory\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setObjectConstructor\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:createConnection\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:createEntityManager\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:createSerializerWithDoctrineObjectConstructor\\(\\) should return JMS\\\\Serializer\\\\SerializerInterface but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:createXmlEntityManager\\(\\) should return Doctrine\\\\ORM\\\\EntityManager but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:prepareDatabase\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testFindEntity\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testFindManagedEntity\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testInvalidArg\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testMissingAuthor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testMissingAuthorException\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testMissingAuthorFallback\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testMissingData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testMissingNotManaged\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testNamingForIdentifierColumnIsConsidered\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:testReference\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:__construct\\(\\) has parameter \\$proxyInterface with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:__construct\\(\\) has parameter \\$serviceCreator with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:getService\\(\\) should return Doctrine\\\\Persistence\\\\ObjectManager but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$con of method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:createEntityManager\\(\\) expects Doctrine\\\\DBAL\\\\Connection, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$con of method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:createXmlEntityManager\\(\\) expects Doctrine\\\\DBAL\\\\Connection, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$function of function call_user_func expects callable\\(\\)\\: mixed, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$defaultConnection of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, int\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$defaultManager of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects string, int\\|string\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#6 \\$proxyInterfaceName of method Doctrine\\\\Persistence\\\\AbstractManagerRegistry\\:\\:__construct\\(\\) expects class\\-string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:\\$serializer \\(JMS\\\\Serializer\\\\Serializer\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\ObjectConstructorTest\\:\\:\\$serializer is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:\\$serviceCreator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Doctrine\\\\SimpleBaseManagerRegistry\\:\\:\\$services has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Doctrine/ObjectConstructorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:all\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:bar\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:foo\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access an offset on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:createEventDispatcher\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:dispatch\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:dispatch\\(\\) has parameter \\$class with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:dispatch\\(\\) has parameter \\$eventName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:dispatch\\(\\) has parameter \\$format with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:testDispatch\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:testHasListeners\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:testListenerCanDispatchEvent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:testListenerCanStopPropagation\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:__call\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:__call\\(\\) has parameter \\$args with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:__call\\(\\) has parameter \\$method with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:_replay\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:_verify\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:_verify\\(\\) has parameter \\$message with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockSubscriber\\:\\:getSubscribedEvents\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockSubscriber\\:\\:getSubscribedEvents\\(\\) should return array but returns mixed\\.$#',
	'identifier' => 'return.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$context of class JMS\\\\Serializer\\\\EventDispatcher\\\\Event constructor expects JMS\\\\Serializer\\\\Context, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$eventName of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:dispatch\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callable of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:addListener\\(\\) expects callable\\(\\)\\: mixed, array\\{JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener, \'all\'\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callable of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:addListener\\(\\) expects callable\\(\\)\\: mixed, array\\{JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener, \'bar\'\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callable of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:addListener\\(\\) expects callable\\(\\)\\: mixed, array\\{JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener, \'foo\'\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$class of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:dispatch\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$type of class JMS\\\\Serializer\\\\EventDispatcher\\\\Event constructor expects array, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$format of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:dispatch\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$message of static method PHPUnit\\\\Framework\\\\Assert\\:\\:assertSame\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$event of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:dispatch\\(\\) expects JMS\\\\Serializer\\\\EventDispatcher\\\\Event, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:\\$dispatcher \\(JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherTest\\:\\:\\$event has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:\\$actual has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:\\$expected has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:\\$wasReplayed has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockSubscriber\\:\\:\\$events has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/EventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:all\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:bar\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\MockListener\\:\\:foo\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherTest\\:\\:createContainer\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherTest\\:\\:createEventDispatcher\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherTest\\:\\:registerListenerService\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherTest\\:\\:registerListenerService\\(\\) has parameter \\$serviceId with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherTest\\:\\:testDispatchWithListenerAsService\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherTest\\:\\:testHasListenersWithListenerAsService\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callable of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:addListener\\(\\) expects callable\\(\\)\\: mixed, array\\{\'a\', \'foo\'\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callable of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:addListener\\(\\) expects callable\\(\\)\\: mixed, array\\{\'b\', \'all\'\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callable of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:addListener\\(\\) expects callable\\(\\)\\: mixed, array\\{\'b\', \'bar\'\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$callable of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:addListener\\(\\) expects callable\\(\\)\\: mixed, array\\{\'b\', \'foo\'\\} given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherTest\\:\\:\\$container has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset string on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method set\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherWithPsr11ContainerTest\\:\\:createContainer\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherWithPsr11ContainerTest\\:\\:registerListenerService\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherWithPsr11ContainerTest\\:\\:registerListenerService\\(\\) has parameter \\$serviceId with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Psr11Container\\:\\:set\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Psr11Container\\:\\:set\\(\\) has parameter \\$id with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Psr11Container\\:\\:set\\(\\) has parameter \\$service with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Psr11Container\\:\\:\\$services has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithPsr11ContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method set\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithSymfonyContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherWithSymfonyContainerTest\\:\\:createContainer\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithSymfonyContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherWithSymfonyContainerTest\\:\\:registerListenerService\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithSymfonyContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\LazyEventDispatcherWithSymfonyContainerTest\\:\\:registerListenerService\\(\\) has parameter \\$serviceId with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/LazyEventDispatcherWithSymfonyContainerTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Anonymous function has an unused use \\$realClassEventTriggered1\\.$#',
	'identifier' => 'closure.unusedUse',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\VisitorInterface\\:\\:method\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getType\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 6,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method willReturn\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:createEvent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:createEvent\\(\\) has parameter \\$object with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:createEvent\\(\\) has parameter \\$type with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:testDoesNotRewriteCustomType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:testEventTriggeredOnRealClassName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:testListenersCanChangeType\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:testListenersDoNotChangeTypeOnProxiesAndVirtualTypes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:testOnPreSerializeMaintainsParams\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:testProxyLoadingCanBeSkippedByExclusionStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:testProxyLoadingCanBeSkippedForVirtualTypes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:testRewritesProxyClassName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$context of class JMS\\\\Serializer\\\\EventDispatcher\\\\PreSerializeEvent constructor expects JMS\\\\Serializer\\\\Context, JMS\\\\Serializer\\\\VisitorInterface given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$event of method JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriber\\:\\:onPreSerialize\\(\\) expects JMS\\\\Serializer\\\\EventDispatcher\\\\PreSerializeEvent, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 6,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$event of method JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcher\\:\\:dispatch\\(\\) expects JMS\\\\Serializer\\\\EventDispatcher\\\\Event, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\DoctrineProxySubscriberTest\\:\\:\\$visitor \\(JMS\\\\Serializer\\\\VisitorInterface\\) does not accept JMS\\\\Serializer\\\\Context&PHPUnit\\\\Framework\\\\MockObject\\\\MockObject\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/DoctrineProxySubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method build\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method configureListeners\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method deserialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method expects\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method method\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setAttribute\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method will\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method with\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriberTest\\:\\:testValidate\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriberTest\\:\\:testValidateThrowsExceptionWhenListIsNotEmpty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriberTest\\:\\:testValidationIsOnlyPerformedOnRootObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriberTest\\:\\:testValidatorIsNotCalledWhenNoGroupsAreSet\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$context of class JMS\\\\Serializer\\\\EventDispatcher\\\\ObjectEvent constructor expects JMS\\\\Serializer\\\\Context, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$originalClassName of method PHPUnit\\\\Framework\\\\TestCase\\:\\:createMock\\(\\) expects class\\-string\\<Symfony\\\\Component\\\\Validator\\\\ValidatorInterface\\>, string given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$validator of class JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriber constructor expects Symfony\\\\Component\\\\Validator\\\\Validator\\\\ValidatorInterface, PHPUnit\\\\Framework\\\\MockObject\\\\MockObject&Symfony\\\\Component\\\\Validator\\\\ValidatorInterface given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertCount\\(\\) expects Countable\\|iterable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriberTest\\:\\:\\$validator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method build\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method configureListeners\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method deserialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method expects\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method method\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setAttribute\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method will\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method with\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorValidatorSubscriberTest\\:\\:testValidate\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorValidatorSubscriberTest\\:\\:testValidateThrowsExceptionWhenListIsNotEmpty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorValidatorSubscriberTest\\:\\:testValidationIsOnlyPerformedOnRootObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorValidatorSubscriberTest\\:\\:testValidatorIsNotCalledWhenNoGroupsAreSet\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$context of class JMS\\\\Serializer\\\\EventDispatcher\\\\ObjectEvent constructor expects JMS\\\\Serializer\\\\Context, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$haystack of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertCount\\(\\) expects Countable\\|iterable, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorValidatorSubscriberTest\\:\\:\\$subscriber \\(JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorSubscriber\\) does not accept JMS\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorValidatorSubscriber\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\EventDispatcher\\\\Subscriber\\\\SymfonyValidatorValidatorSubscriberTest\\:\\:\\$validator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/EventDispatcher/Subscriber/SymfonyValidatorValidatorSubscriberTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'foo\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'name\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'params\' on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$propertyMetadata on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method accept\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addListener\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method expects\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 9,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMetadataForClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getType\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method method\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 9,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method registerSubscribingHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setType\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method will\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 9,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:testNavigatorChangeTypeOnSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:testNavigatorPassesInstanceOnSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:testNavigatorPassesNullOnDeserialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:testResourceThrowsException\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TestSubscribingHandler\\:\\:getSubscribingMethods\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$metadataFactory of class JMS\\\\Serializer\\\\GraphNavigator constructor expects Metadata\\\\MetadataFactoryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$handlerRegistry of class JMS\\\\Serializer\\\\GraphNavigator constructor expects JMS\\\\Serializer\\\\Handler\\\\HandlerRegistryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$context of method JMS\\\\Serializer\\\\GraphNavigator\\:\\:accept\\(\\) expects JMS\\\\Serializer\\\\Context, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$objectConstructor of class JMS\\\\Serializer\\\\GraphNavigator constructor expects JMS\\\\Serializer\\\\Construction\\\\ObjectConstructorInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$dispatcher of class JMS\\\\Serializer\\\\GraphNavigator constructor expects JMS\\\\Serializer\\\\EventDispatcher\\\\EventDispatcherInterface\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:\\$context has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:\\$dispatcher has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:\\$handlerRegistry has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:\\$metadataFactory has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:\\$navigator has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\GraphNavigatorTest\\:\\:\\$objectConstructor has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\SerializableClass\\:\\:\\$foo has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/GraphNavigatorTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'http\\://foo\\.bar…\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to an undefined method JMS\\\\Serializer\\\\EventDispatcher\\\\Event\\:\\:getObject\\(\\)\\.$#',
	'identifier' => 'method.notFound',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset \'readonly\' on 0\\|0\\.0\\|\'\'\\|\'0\'\\|array\\{\\}\\|false\\|null\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset mixed on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method addData\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method get\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getAuthor\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getFoo\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getName\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method hasData\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method registerHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setData\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setInitialType\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 28,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:getContent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:getContent\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:getFormat\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:getPrimitiveTypes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:getTypeHintedArrays\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:getTypeHintedArraysAndStdClass\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testAddLinksToOutput\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testDeserializingObjectWithObjectProperty\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testDeserializingObjectWithObjectPropertyWithNoArrayToObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testInlineArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testPrimitiveTypes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testPrimitiveTypes\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testPrimitiveTypes\\(\\) has parameter \\$primitiveType with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testReplaceNameInOutput\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testSerializeArrayWithEmptyObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testSerializeEmptyObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testSerializeRootArrayWithDefinedKeys\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testSerializeWithNonUtf8EncodingWhenDisplayErrorsOff\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testSerializeWithNonUtf8EncodingWhenDisplayErrorsOn\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testSkipEmptyArrayAndHash\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testTypeHintedArrayAndStdClassSerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testTypeHintedArrayAndStdClassSerialization\\(\\) has parameter \\$array with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testTypeHintedArraySerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\JsonSerializationTest\\:\\:testTypeHintedArraySerialization\\(\\) has parameter \\$array with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\LinkAddingSubscriber\\:\\:getSubscribedEvents\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\LinkAddingSubscriber\\:\\:onPostSerialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ReplaceNameSubscriber\\:\\:getSubscribedEvents\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\ReplaceNameSubscriber\\:\\:onPostSerialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$str of function ucfirst expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$format of method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 6,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#3 \\$context of method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) expects JMS\\\\Serializer\\\\SerializationContext\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 6,
	'path' => __DIR__ . '/tests/Serializer/JsonSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Naming\\\\IdenticalPropertyNamingStrategyTest\\:\\:providePropertyNames\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Naming/IdenticalPropertyNamingStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Naming\\\\IdenticalPropertyNamingStrategyTest\\:\\:testTranslateName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Naming/IdenticalPropertyNamingStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\Naming\\\\IdenticalPropertyNamingStrategyTest\\:\\:testTranslateName\\(\\) has parameter \\$propertyName with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/Naming/IdenticalPropertyNamingStrategyTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method deserialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method fromArray\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method serialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setDeserializationContextFactory\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setSerializationContextFactory\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method toArray\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\SerializationContextFactoryTest\\:\\:testDeserializeUseProvidedDeserializationContext\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\SerializationContextFactoryTest\\:\\:testFromArrayUseProvidedDeserializationContext\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\SerializationContextFactoryTest\\:\\:testSerializeUseProvidedSerializationContext\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\SerializationContextFactoryTest\\:\\:testToArrayUseProvidedSerializationContext\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\SerializationContextFactoryTest\\:\\:\\$serializer has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/SerializationContextFactoryTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method parse\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 6,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:getTypes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:testEmptyParams\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:testLeadingBackslash\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:testMustStartWithName\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:testNoTrailingComma\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:testParamTypeMustEndWithBracket\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:testParse\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:testParse\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:testParse\\(\\) has parameter \\$params with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:testParse\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\TypeParserTest\\:\\:\\$parser has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/TypeParserTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'\\<result\\>\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between mixed and \'_no_cdata\' results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$absentAndNs on array\\|bool\\|float\\|int\\|object\\|string\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$author on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$etag on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$language on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$title on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$xmlRootNamespace on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method add\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method format\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method get\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method getMetadataForClass\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method registerHandler\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method registerXPathNamespace\\(\\) on SimpleXMLElement\\|false\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setDoctypeWhitelist\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setGroups\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot cast mixed to string\\.$#',
	'identifier' => 'cast.string',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:getContent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:getFormat\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:getXMLBooleans\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testAccessorSetterDeserialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testArrayKeyValues\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDateTimeImmutableNoCData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDateTimeImmutableNoCData\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDateTimeImmutableNoCData\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDateTimeImmutableNoCData\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDateTimeNoCData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDateTimeNoCData\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDateTimeNoCData\\(\\) has parameter \\$type with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDateTimeNoCData\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDeserializeArrayKeyValues\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDeserializeEmptyString\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDeserializeTypedAndNestedArrayKeyValues\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDeserializeWithObjectWithToStringMethod\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDeserializingNull\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDiscriminatorAsNotCData\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDiscriminatorAsXmlAttribute\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDiscriminatorAsXmlAttributeWithNamespace\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDiscriminatorWithNamespace\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testDocumentTypesAreNotAllowed\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testEvaluatesToNull\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testExternalEntitiesAreDisabledByDefault\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testInvalidUsageOfXmlValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testObjectWithNamespaceAndNestedList\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testObjectWithNamespacesAndList\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testObjectWithOnlyNamespacesAndList\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testObjectWithXmlNamespaces\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testObjectWithXmlNamespacesAndBackReferencedNamespaces\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testObjectWithXmlNamespacesAndBackReferencedNamespacesWithListeners\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testObjectWithXmlRootNamespace\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testPropertyIsCollectionOfObjectsWithAttributeAndValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testPropertyIsObjectWithAttributeAndValue\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testUnserializeMissingArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testVirtualAttributes\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testVirtualValues\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testVirtualXmlList\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testVirtualXmlMap\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testWhitelistedDocumentTypesAreAllowed\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testWithoutFormatedOutputByXmlSerializationVisitor\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testXMLBooleans\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testXMLBooleans\\(\\) has parameter \\$boolean with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testXMLBooleans\\(\\) has parameter \\$xmlBoolean with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testXmlAttributeMapWithoutArray\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:testXmlNamespacesInheritance\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:xpathFirstToString\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:xpathFirstToString\\(\\) has parameter \\$xpath with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$array of function reset expects array\\|object, array\\<SimpleXMLElement\\>\\|false\\|null given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of function simplexml_load_string expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of method JMS\\\\Serializer\\\\Serializer\\:\\:deserialize\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$data of method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) expects array\\|bool\\|float\\|int\\|object\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$expectedXml of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertXmlStringEqualsXmlString\\(\\) expects DOMDocument\\|string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$expression of method SimpleXMLElement\\:\\:xpath\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$factory of class JMS\\\\Serializer\\\\Serializer constructor expects Metadata\\\\MetadataFactoryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$xml of method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\XmlSerializationTest\\:\\:xpathFirstToString\\(\\) expects SimpleXMLElement, SimpleXMLElement\\|false given\\.$#',
	'identifier' => 'argument.type',
	'count' => 5,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$context of method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\BaseSerializationTest\\:\\:serialize\\(\\) expects JMS\\\\Serializer\\\\Context\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 7,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$format of method JMS\\\\Serializer\\\\Serializer\\:\\:serialize\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 4,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$handlerRegistry of class JMS\\\\Serializer\\\\Serializer constructor expects JMS\\\\Serializer\\\\Handler\\\\HandlerRegistryInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#4 \\$serializationVisitors of class JMS\\\\Serializer\\\\Serializer constructor expects PhpCollection\\\\MapInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 2,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#5 \\$deserializationVisitors of class JMS\\\\Serializer\\\\Serializer constructor expects PhpCollection\\\\MapInterface, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 3,
	'path' => __DIR__ . '/tests/Serializer/XmlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between literal\\-string&non\\-falsy\\-string and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setInitialType\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 14,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:getContent\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:getContent\\(\\) has parameter \\$key with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:getFormat\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:getTypeHintedArrays\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:hasDeserializer\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testConstraintViolation\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testConstraintViolationList\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testEmptyChild\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testFormErrors\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testFormErrorsWithNonFormComponents\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testNestedFormErrors\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testObjectUsingTypeCasting\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testSkipEmptyChild\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testTypeHintedArraySerialization\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Serializer\\\\YamlSerializationTest\\:\\:testTypeHintedArraySerialization\\(\\) has parameter \\$array with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function sprintf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/Serializer/YamlSerializationTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between mixed and \'/annotations\' results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between mixed and \'/metadata\' results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access property \\$name on mixed\\.$#',
	'identifier' => 'property.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method deserialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 5,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method remove\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method serialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 12,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method setSerializeNull\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 2,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:expressionFunctionProvider\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:getField\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:getField\\(\\) has parameter \\$name with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:getField\\(\\) has parameter \\$obj with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:getIncludeInterfaces\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testAdvancedNamingStrategy\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testBuildWithoutAnythingElse\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testDoesAddDefaultHandlers\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testDoesNotAddDefaultHandlersWhenExplicitlyConfigured\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testDoesNotAddOtherVisitorsWhenConfiguredExplicitly\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testExpressionEngine\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testExpressionEngine\\(\\) has parameter \\$json with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testExpressionEngineWhenDeserializing\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testIncludeInterfaceMetadata\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testSetCallbackSerializationContextWithNotSerializeNull\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testSetCallbackSerializationContextWithSerializeNull\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testSetDeserializationContext\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testSetSerializationContext\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:testWithCache\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertFileDoesNotExist\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$filename of method PHPUnit\\\\Framework\\\\Assert\\:\\:assertFileExists\\(\\) expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#1 \\$object of method ReflectionProperty\\:\\:getValue\\(\\) expects object, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\$property of class ReflectionProperty constructor expects string, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:\\$builder \\(JMS\\\\Serializer\\\\SerializerBuilder\\) does not accept mixed\\.$#',
	'identifier' => 'assign.propertyType',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:\\$fs has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Property JMS\\\\Serializer\\\\Tests\\\\SerializerBuilderTest\\:\\:\\$tmpDir has no type specified\\.$#',
	'identifier' => 'missingType.property',
	'count' => 1,
	'path' => __DIR__ . '/tests/SerializerBuilderTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Twig\\\\SerializerExtensionTest\\:\\:testRuntimeSerializerExtension\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Twig/SerializerExtensionTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Twig\\\\SerializerExtensionTest\\:\\:testRuntimeSerializerHelper\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Twig/SerializerExtensionTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Method JMS\\\\Serializer\\\\Tests\\\\Twig\\\\SerializerExtensionTest\\:\\:testSerialize\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/Twig/SerializerExtensionTest.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "\\." between \'benchmark…\' and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Binary operation "/" between float and mixed results in an error\\.$#',
	'identifier' => 'binaryOp.invalid',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 1 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 2 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot access offset 3 on mixed\\.$#',
	'identifier' => 'offsetAccess.nonOffsetAccessible',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method build\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method serialize\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot use array destructuring on mixed\\.$#',
	'identifier' => 'offsetAccess.nonArray',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Function benchmark\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Function benchmark\\(\\) has parameter \\$times with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Function createCollection\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Function createObject\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Parameter \\#2 \\.\\.\\.\\$values of function printf expects bool\\|float\\|int\\|string\\|null, mixed given\\.$#',
	'identifier' => 'argument.type',
	'count' => 1,
	'path' => __DIR__ . '/tests/benchmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Cannot call method add\\(\\) on mixed\\.$#',
	'identifier' => 'method.nonObject',
	'count' => 1,
	'path' => __DIR__ . '/tests/bootstrap.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
