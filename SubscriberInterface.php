<?php
namespace def\Event;

interface SubscriberInterface
{
    /**
     * @return string[] event method map
     */
    public function events();
}
