<?php
if (!defined('_GNUBOARD_')) exit;

// 환경 구분 (기본: local)
$env = getenv('APP_ENV') ?: 'local';

if ($env === 'production') {
    require __DIR__ . '/dbconfig.prod.php';
} else {
    require __DIR__ . '/dbconfig.local.php';
}