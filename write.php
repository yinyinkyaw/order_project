<?php

$document_root = $_SERVER['DOCUMENT_ROOT'];

$fileName = "$document_root/order/orders_with_line_no.txt";

$outputString = "<< writing sample >>" . "\n";

if (file_exists($fileName)) {
    @$f = fopen($fileName, 'ab');
    flock($f, LOCK_EX);
    fwrite($f, $outputString, strlen($outputString));
    flock($f, LOCK_UN);
    fclose($f);

    echo '<p>Order written</p>';
}
