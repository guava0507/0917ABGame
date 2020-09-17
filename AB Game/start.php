<?php
session_start();
$ran = $_POST["ran"];

$ran = rand(1000, 9999);

$_SESSION["rannum"] = $ran;
echo $ran;
return;
