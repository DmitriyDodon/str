<?php


namespace Hillel\Str;


class Str
{
    public static function after(string $subject, string $after): string
    {
        if (strpos($subject, $after) !== false) {
            return substr($subject, strpos($subject, $after) + strlen($after));
        } else {
            return $subject;
        }
    }

    public static function afterLast(string $subject, string $after): string
    {
        if (strrpos($subject, $after) !== false) {
            return substr($subject, strrpos($subject, $after) + strlen($after));
        } else {
            return $subject;
        }
    }
}