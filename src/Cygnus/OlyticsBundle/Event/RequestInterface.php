<?php
namespace Cygnus\OlyticsBundle\Event;

interface RequestInterface
{
    public function getEvent();
    public function getProduct();
}
