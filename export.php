<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=users.csv');

$users = json_decode(file_get_contents(__DIR__ . '/data/users.json'), true) ?? [];

echo "Name,Language,Greeting,TimeGreeting,Timestamp\n";
foreach ($users as $user) {
    echo "\"{$user['name']}\",\"{$user['language']}\",\"{$user['greeting']}\",\"{$user['timeGreeting']}\",\"{$user['timestamp']}\"\n";
}
