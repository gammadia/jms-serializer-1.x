JMS Serializer 1.14.1
==========

Learn more about it in its [documentation](http://jmsyst.com/libs/serializer/1.x).

A fork for modern days [![Build Status](https://travis-ci.org/gnutix/jms-serializer-1.x.svg?branch=master)](https://travis-ci.org/gnutix/jms-serializer-1.x)
==========

This is a fork of `jms/serializer` at the version `1.14.1` adapted for modern PHP development, which supports :

* PHP `7.2` <-> `8.0`
* Symfony `3.4` <-> `5.2`

The following changes were applied to the dev dependencies :

* PHPUnit upgraded to 8.x
* PHPStan baseline added to keep the code in good health
* Rector installed to ease automated refactorings

### BC break changes

* Doctrine dependency bumped from `~2.1` to `^2.8` (because of namespaces changes)

### Probable issues

* Propel 1 support is probably broken on PHP 8 because of this error (and maybe others) :

```
PHP Fatal error:
Declaration of
  PropelOnDemandCollection::asort()
must be compatible with
  ArrayObject::asort(int $flags = SORT_REGULAR)
in vendor/propel/propel1/runtime/lib/collection/PropelOnDemandCollection.php on line 151
```
