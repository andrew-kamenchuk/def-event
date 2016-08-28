<?php
namespace def\Event;

interface DispatcherAwareInterface
{
    /**
     * @return def\Event\Dispatcher
     */
    public function getDispatcher();

    /**
     * @param def\Event\Dispatcher $dispatcher
     */
    public function setDispatcher(Dispatcher $dispatcher);
}
