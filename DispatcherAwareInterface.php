<?php
namespace def\Event;

interface DispatcherAwareInterface
{
    /**
     * @return def\Event\Dispatcher;
     */
    public function getDispatcher();
}
