<?php

declare(strict_types = 1);

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class FunctionalTest
 * @package Tests
 */
class FunctionalTest extends TestCase
{
    use RandomSleep;

    /**
     * @group functional
     */
    public function testRandomA(): void
    {
        $this->assertTrue(true);
    }

    /**
     * @group functional
     */
    public function testRandomB(): void
    {
        $this->assertTrue(true);
    }

    /**
     * @group functional
     */
    public function testRandomC(): void
    {
        $this->assertTrue(true);
    }

    /**
     * @group functional
     */
    public function testRandomD(): void
    {
        $this->assertTrue(true);
    }

    /**
     * @group functional
     */
    public function testRandomE(): void
    {
        $this->assertTrue(true);
    }

    /**
     * @group functional
     */
    public function testRandomF(): void
    {
        $this->assertTrue(true);
    }


    protected function setUp(): void
    {
        parent::setup();
        $this->sleep();
    }
}