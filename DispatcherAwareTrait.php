<?php
namespace def\Event;

trait DispatcherAwareTrait
{
    /**
     * @var def\Event\Dispatcher
     */
    private $dispatcher;

    /**
     * @return def\Event\Dispatcher
     */
    public function getDispatcher()
    {
        return $this->dispatcher ?: $this->dispatcher = new Dispatcher();
    }

    /**
     * @param def\Event\Dispatcher $dispatcher
     */
    public function setDispatcher(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }
}
