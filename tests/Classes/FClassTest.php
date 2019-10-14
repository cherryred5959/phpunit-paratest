<?php

declare(strict_types = 1);

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class FClassTest
 * @package Tests
 */
class FClassTest extends TestCase
{
    use RandomSleep;

    /**
     * @group classes
     */
    public function testF(): void
    {
        $this->assertTrue(true);
    }

    protected function setUp(): void
    {
        parent::setup();
        $this->sleep();
    }
}