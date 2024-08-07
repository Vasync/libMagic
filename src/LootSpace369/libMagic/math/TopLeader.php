<?php

declare(strict_types=1);

namespace LootSpace369\libMagic\math;

final class TopLeader {

    /**
     * @param array $top top to find the top person
     * Must have element name => number
     */
    public static function calculate(array $top): array {
        /**
         * @var $number the number of heads there is
         */
        $number = max($top);
        /**
         * @var $name name of the leader
         */
        $name = array_search($number, $top);

        return [$name, $number];
    }
}
