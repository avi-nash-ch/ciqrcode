<?php

$file = 'vendor/mikey179/vfsstream/src/main/php/org/bovigo/vfs/vfsStream.php';
$content = file_get_contents($file);

// Replace 'name{0}' with 'name[0]'
$content = str_replace('name{0}', 'name[0]', $content);

file_put_contents($file, $content);

echo 'Replacement completed successfully.' . PHP_EOL;
