<?php

declare(strict_types = 1);

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Class AClassTest
 * @package Tests
 */
class EClassTest extends TestCase
{
    use RandomSleep;

    /**
     * @group classes
     */
    public function testE(): void
    {
        $this->assertTrue(true);
    }

    protected function setUp(): void
    {
        parent::setup();
        $this->sleep();
    }
}