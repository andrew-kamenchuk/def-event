<?php
namespace def\Event;

trait DispatcherAwareTrait
{
	protected $dispatcher;

	public function dispatcher(Dispatcher $dispatcher = null)
	{
		return 0 == \func_num_args() ? ($this->dispatcher ?: $this->dispatcher = new Dispatcher)
		                             :  $this->dispatcher = $dispatcher;
	}
}
