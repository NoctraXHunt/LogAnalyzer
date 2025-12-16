<?php
namespace LogAnlyzer\Utils;

class LogParser
{
    public static function parseLine(string $line): ?array
    {
        /*
         Support Apache / Nginx combined log
         Example:
         192.168.1.10 - - [16/Dec/2025:10:12:33 +0700] "POST /login HTTP/1.1" 200 532
        */

        $pattern = '/^(\d+\.\d+\.\d+\.\d+).*?"([A-Z]+)\s+([^"]+?)\s+HTTP\/[0-9.]+"/';

        if (!preg_match($pattern, $line, $m)) {
            return null;
        }

        return [
            'ip'     => $m[1],
            'method' => $m[2],
            'path'   => $m[3],
        ];
    }
}
