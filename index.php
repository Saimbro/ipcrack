<?php

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    }
    return $ipaddress;
}

$visitor_ip = get_client_ip();

// Save the IP address to a file
$filename = 'visitor_ips.txt'; // Choose your filename
$file = fopen($filename, 'a'); // Open for appending
fwrite($file, $visitor_ip . PHP_EOL); // Write IP and a newline
fclose($file); // Close the file

// Print "Hello bro" to the visitor
echo "Hello lil bro";