<?php

echo 'Copying contents from dbms.txt into dbms2.txt' . '<br>';
$file_read = 'dbms.txt';
$file_write = 'dbms2.txt';
$current = file_get_contents($file_read);
file_put_contents($file_write, $current);
echo 'Done' . '<br>';

echo 'Contents of dbms.txt' . '<br>';
echo '----------------------------------------------------------------' . '<br>';
$lines = file("dbms.txt");
foreach ($lines as $line) {
    echo $line . '<br>';
}
echo '----------------------------------------------------------------' . '<br>';
