<?php
namespace def\Event\Test;

abstract class DispatcherAwareInterfaceTest extends \PHPUnit_Framework_TestCase
{
    abstract protected function getDispatcherAware();

    public function testImplements()
    {
        $this->assertInstanceOf('def\Event\DispatcherAwareInterface', $this->getDispatcherAware());
    }

    public function testGetDispatcher()
    {
        $this->assertInstanceOf('def\Event\Dispatcher', $this->getDispatcherAware()->getDispatcher());
    }
}
