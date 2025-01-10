<?php declare(strict_types = 1);

$includes = [];
$includes[] = __DIR__ . '/phpstan-baseline-php7.4.php';
if (PHP_VERSION_ID >= 80000) {
    $includes[] = __DIR__ . '/phpstan-baseline-php8.0.php';
}
if (PHP_VERSION_ID >= 80100) {
    $includes[] = __DIR__ . '/phpstan-baseline-php8.1.php';
}

$config = [];
$config['includes'] = $includes;
$config['parameters']['phpVersion'] = PHP_VERSION_ID;

return $config;
