<?php
if (isset($_SERVER['HTTP_ALI_SWIFT_STAT_HOST'])) { $_SERVER['SERVER_NAME'] = $_SERVER['HTTP_ALI_SWIFT_STAT_HOST']; $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_ALI_SWIFT_STAT_HOST']; } define('LARAVEL_START', microtime(true)); require __DIR__ . '/../vendor/autoload.php'; $sp43cab0 = (require_once __DIR__ . '/../bootstrap/app.php'); $spb61f40 = $sp43cab0->make(Illuminate\Contracts\Http\Kernel::class); $sp5241d0 = $spb61f40->handle($sp0fc69c = Illuminate\Http\Request::capture()); $sp5241d0->send(); $spb61f40->terminate($sp0fc69c, $sp5241d0);