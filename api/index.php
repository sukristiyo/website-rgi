<?php

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

// Create a safe storage directory in Vercel's ephemeral /tmp mapping
$storagePath = '/tmp/storage';
$dirs = [
    $storagePath,
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/testing',
    $storagePath . '/framework/views',
    $storagePath . '/logs'
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Boot the application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Override storage path before handling the request
$app->useStoragePath($storagePath);

// Handle Request
$app->handleRequest(Illuminate\Http\Request::capture());
