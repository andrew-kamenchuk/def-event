<?php
namespace def\Event;

interface SubscriberInterface
{
	/**
	 * @return array
	 */
	public function subscribed();
}
