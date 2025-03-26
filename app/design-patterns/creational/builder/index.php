<?php

require_once('MysqlQueryBuilder.php');

$query = new MysqlQueryBuilder();
$mysqlQuery = $query->select("users", ["name", "email", "password"])
    ->where("age", 18, ">")
    ->where("age", 30, "<")
    ->limit(10, 20)
    ->getSQL();
echo $mysqlQuery . PHP_EOL;
