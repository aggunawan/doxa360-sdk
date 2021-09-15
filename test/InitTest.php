<?php

namespace Test;

use Aggunawan\Doxa360\Init;
use PHPUnit\Framework\TestCase;
use ReflectionProperty;

class InitTest extends TestCase
{
    public function testSetServiceUrl()
    {
        $init = new Init();
        $init->setServiceUrl('http://localhost:2000');

        $reflection = new ReflectionProperty(Init::class, 'serviceUrl');
        $reflection->setAccessible(true);

        self::assertSame('http://localhost:2000', $reflection->getValue($init));
    }

    public function testGetServiceUrl()
    {
        $init = new Init();

        $reflection = new ReflectionProperty(Init::class, 'serviceUrl');
        $reflection->setAccessible(true);
        $reflection->setValue($init, 'http://localhost:2000');

        self::assertSame('http://localhost:2000', $init->getServiceUrl());
    }
}