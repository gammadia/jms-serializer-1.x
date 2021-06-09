JMS Serializer 1.14.1
==========

Learn more about it in its [documentation](http://jmsyst.com/libs/serializer/1.x).

A fork for modern days [![CI](https://github.com/gammadia/jms-serializer-1.x/actions/workflows/ci.yaml/badge.svg)](https://github.com/gammadia/jms-serializer-1.x/actions/workflows/ci.yaml)
==========

This is a fork of `jms/serializer` at the version `1.14.1` adapted for modern PHP development, which supports :

* PHP `7.2` <-> `8.0`
* Symfony `3.4` <-> `5.3`

The following changes were applied to the dev dependencies :

* PHPUnit upgraded to 8.x
* PHPStan baseline added to keep the code in good health
* Rector installed to ease automated refactorings
* Migrate Travis CI to GitHub Actions

### BC break changes

* Doctrine dependency bumped from `~2.1` to `^2.8` (because of namespaces changes)
* Propel support was removed as `propel/propel1` is not working with PHP 8 :

```
PHP Fatal error:
Declaration of
  PropelOnDemandCollection::asort()
must be compatible with
  ArrayObject::asort(int $flags = SORT_REGULAR)
in vendor/propel/propel1/runtime/lib/collection/PropelOnDemandCollection.php on line 151
```
