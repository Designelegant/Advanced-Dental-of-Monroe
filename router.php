<?php
// PHP built-in dev server router — strips extensions so URLs match production
$uri  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Strip .html extension if present
$cleanUri = $uri;
if (pathinfo($uri, PATHINFO_EXTENSION) === 'html') {
    $cleanUri = substr($uri, 0, -5);
}

$file = __DIR__ . $cleanUri;

// Serve real files (assets, images, css, js) directly
if ($uri !== '/' && is_file(__DIR__ . $uri)) {
    return false;
}

// Try .php extension
if (is_file($file . '.php')) {
    include $file . '.php';
    exit;
}

// Default to index
include __DIR__ . '/index.php';

