<?php


namespace Phpml\Math;

use Phpml\Exception\InvalidArgumentException;

class Comparison
{
    /**
     * @throws InvalidArgumentException
     */
    public static function compare($a, $b, $operator)
    {
        switch ($operator) {
            case '>':
                return $a > $b;
            case '>=':
                return $a >= $b;
            case '=':
            case '==':
                return $a == $b;
            case '===':
                return $a === $b;
            case '<=':
                return $a <= $b;
            case '<':
                return $a < $b;
            case '!=':
            case '<>':
                return $a != $b;
            case '!==':
                return $a !== $b;
            default:
                throw InvalidArgumentException::invalidOperator($operator);
        }
    }
}
