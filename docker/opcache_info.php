<?php
$output = [];

if (function_exists('opcache_get_status'))
{
    $data = opcache_get_status();
    unset($data['scripts']);
    $output = json_encode($data);
}

header('Content-Type: application/json');
echo $output;
