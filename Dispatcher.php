<?php
namespace def\Event;

class Dispatcher
{
	protected $listeners = [];
	
	public function attach($event, callable $listener)
	{
		$this->listeners[$event][] = $listener;
	}

	public function detach($event, callable $listener = null)
	{
		if(!isset($listener)) {
			unset($this->listeners[$event]);
		} elseif(isset($this->listeners[$event]) && false !== $key = \array_search($listener, $this->listeners[$event], true)) {
			unset($this->listeners[$event][$key]);
		}
	}

	public function listeners($event)
	{
		return isset($this->listeners[$event]) ? $this->listeners[$event] : [];
	}

	public function dispatch($event, ...$args)
	{
		foreach($this->listeners($event) as $listener) {
			$listener($event, ...$args);
		}
	}

	public function events()
	{
		return \array_keys($this->listeners);
	}

	public function subscriber(SubscriberInterface $subscriber)
	{
		foreach($subscriber->subscribed() as $event => $method) {
			$this->attach($event, [$subscriber, $method]);
		}
	}

}
