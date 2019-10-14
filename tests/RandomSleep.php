<?php

declare(strict_types = 1);

namespace Tests;

/**
 * Trait RandomSleep
 * @package Tests
 */
trait RandomSleep
{
    private function sleep(): void
    {
        sleep($this->random());
    }

    private function random(): int
    {
        return mt_rand(1, 10);
    }
}