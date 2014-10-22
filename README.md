## def-event

Simple event dispatcher

usage:
```php
use def\Event\Dispatcher;

$someObj = new SomeClass;

$someObjDispatcher = new Dispatcher($someObj);

$someObjDispatcher->attach('before.save', function(SomeClass $obj, array $args) {
	// some processing	
});

$someObjDispatcher->attach('after.save', function(SomeClass $obj, array $args) {
	// some processing
});

$someObj->setData($someData);

$someObjDispatcher->dispatch('before.save', $someData);

$someObj->save();

$someObjDispatcher->dispatch('after.save');
```
