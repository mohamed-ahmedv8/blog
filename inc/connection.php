<?php
session_start();
$hostdb = "localhost";
$userdb = "root";
$passdb = "";
$namedb = "blog";
$con = mysqli_connect($hostdb, $userdb, $passdb, $namedb);
