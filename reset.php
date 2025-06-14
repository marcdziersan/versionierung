<?php
file_put_contents(__DIR__ . '/data/users.json', json_encode([], JSON_PRETTY_PRINT));
header('Location: index.php');
exit;
