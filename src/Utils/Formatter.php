<?php
namespace LogAnlyzer\Utils;

class Formatter
{
    public static function green(string $text): string
    {
        return "\033[32m{$text}\033[0m";
    }

    public static function red(string $text): string
    {
        return "\033[31m{$text}\033[0m";
    }

    public static function yellow(string $text): string
    {
        return "\033[33m{$text}\033[0m";
    }

    public static function cyan(string $text): string
    {
        return "\033[36m{$text}\033[0m";
    }
}
