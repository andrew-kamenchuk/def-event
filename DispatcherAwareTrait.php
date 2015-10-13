<?php
namespace def\Event;

trait DispatcherAwareTrait
{
	protected $dispatcher;

	public function dispatcher(Dispatcher $dispatcher = null)
	{
		return \func_num_args() ? ($this->dispatcher = $dispatcher) : ($this->dispatcher ?: $this->dispatcher = new Dispatcher);
	}
}
