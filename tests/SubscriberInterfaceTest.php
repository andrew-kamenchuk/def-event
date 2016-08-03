<?php
namespace def\Event\Test;

abstract class SubscriberInterfaceTest extends \PHPUnit_Framework_TestCase
{
    abstract protected function getSubscriber();

    public function testImplements()
    {
        $this->assertInstanceOf('def\Event\ServiceProviderInterface', $this->getSubscriber());
    }

    public function testSubscribedEvents()
    {
        $subscriber = $this->getSubscriber();

        $this->assertInternalType('array', $subscriber->events());

        foreach ($subscriber->events() as $method) {
            $this->assertTrue(is_callable([$subscriber, $method]));
        }
    }
}
