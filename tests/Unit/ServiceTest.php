<?php

namespace TestApp\Tests\Unit;

use TestApp\Service;
use PHPUnit\Framework\TestCase;

class ServiceTest extends TestCase
{
    public function testClassCanBeInstantiated()
    {
        $classUnderTest = $this->getClassUnderTest();
        $this->assertInstanceOf(Service::class, $classUnderTest);
    }

    private function getClassUnderTest() : RenderService
    {
        return new Service();
    }
}