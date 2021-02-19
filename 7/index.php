<?php
require("vendor/autoload.php");
use App\DB;
use App\Model;

$cnx = new DB();
$cnx->CreateConnection();

$resultSet = $cnx->ExecuteQuery("DELETE FROM tweets WHERE id=100");