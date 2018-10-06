<?php
declare(strict_types=1);
/**
 * author: Alexander Podybailo
 * email: ninjootsu@gmail.com
 * date: 10/6/18
 */

namespace ggatsby\SumHelper;


class SumHelper
{
    /**
     * Summarize helper.
     *
     * @param int $number Value to summarize
     * @return int
     */
    public static function sumUpTo(int $number): int
    {
        return $number * ($number + 1) / 2;
    }
}