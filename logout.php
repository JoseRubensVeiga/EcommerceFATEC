<?php

session_start();
session_destroy();

$fallback = 'index.php';

$anterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : $fallback;

header("location: {$anterior}");
exit;