<?php

namespace App\Tests\Service;

use App\Service\Math;
use PHPUnit\Framework\TestCase;

/**
 * Class MathTest
 *
 * @package App\Tests\Service
 */
class MathTest extends TestCase
{
    /**
     * @covers \App\Service\Math
     */
    public function testAddInt(): void
    {
        static::assertSame(2, Math::addInt(1, 1));
    }
}
