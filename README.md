JMS Serializer 1.14.1
==========

Learn more about it in its [documentation](http://jmsyst.com/libs/serializer/1.x).

A fork for modern days [![CI](https://github.com/gammadia/jms-serializer-1.x/actions/workflows/ci.yaml/badge.svg)](https://github.com/gammadia/jms-serializer-1.x/actions/workflows/ci.yaml)
==========

This is a fork of `jms/serializer` at the version `1.14.1` adapted for more modern PHP development, which supports :

* PHP `7.4` <-> `8.4`
* Symfony `3.4` <-> `7.2`
* Doctrine `2.8` <-> `2.9`

The following changes were backported from more recent versions :

* Use symfony/cache for FileSystem cache implementation instead of doctrine/cache (needed to allow doctrine/annotations 2.0)

The following changes were applied to the dev dependencies :

* PHPUnit upgraded to 9.x
* PHPStan baseline added to keep the code in good health
* Migrate Travis CI to GitHub Actions

### BC break changes

* `ReadOnly` annotation was renamed to `ReadOnlyProperty` to avoid conflicts with PHP 8.1 readonly reserved keyword
* PHP version bumped to PHP 7.4 to prevent having to deal with PHP's Serializable cross-version compatibility...
* Doctrine dependency bumped from `~2.1` to `^2.8` (because of namespaces changes)
* Doctrine ODM PHPCR support was removed (because they removed classes and I don't know how to replace them)
* Propel support was removed as `propel/propel1` is not working with PHP 8 :

```
PHP Fatal error:
Declaration of
  PropelOnDemandCollection::asort()
must be compatible with
  ArrayObject::asort(int $flags = SORT_REGULAR)
in vendor/propel/propel1/runtime/lib/collection/PropelOnDemandCollection.php on line 151
```
