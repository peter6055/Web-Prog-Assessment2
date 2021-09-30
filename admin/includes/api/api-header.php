<?php

//ini_set("display_errors", 1);
//error_reporting(E_ALL);

// Make DB connection.
$mysqli = new mysqli("www.databaseaustralia.com", "s3789585_a2", "Peter0466555592_phpmyadmin", "s3789585_a2");

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}


