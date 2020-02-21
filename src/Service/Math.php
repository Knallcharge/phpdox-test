<?php

namespace App\Service;

/**
 * Class Math
 *
 * @package App\Service
 */
class Math
{
    /**
     * @param int $a
     * @param int $b
     *
     * @return int
     */
    public static function addInt(int $a, int $b): int
    {
        return $a + $b;
    }
}