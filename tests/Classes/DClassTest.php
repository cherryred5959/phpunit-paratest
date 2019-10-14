<?php

declare(strict_types = 1);

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class DClassTest
 * @package Tests
 */
class DClassTest extends TestCase
{
    use RandomSleep;

    /**
     * @group classes
     */
    public function testD(): void
    {
        $this->assertTrue(true);
    }

    protected function setUp(): void
    {
        parent::setup();
        $this->sleep();
    }
}