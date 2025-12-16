#!/usr/bin/env php
<?php

require_once __DIR__ . '/src/Config.php';
require_once __DIR__ . '/src/Utils/LogParser.php';
require_once __DIR__ . '/src/Utils/Formatter.php';
require_once __DIR__ . '/src/Core/Analyzer.php';

use LogAnlyzer\Core\Analyzer;

if ($argc < 2) {
    echo "Usage: php loganlyzer.php <log_file> [--json] [--csv]\n";
    exit(1);
}

$logFile = $argv[1];
$flags = array_slice($argv, 2);

if (!file_exists($logFile)) {
    echo "[!] Log file not found: {$logFile}\n";
    exit(1);
}

$analyzer = new Analyzer($logFile, $flags);
$analyzer->run();
