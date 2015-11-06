<?php
$lang = 'en';

$Server = "103.249.162.130";
$DbUserName = "suga_user";
$DbPassword = 'Pw$suga@123';
$DbName = "cas_db";

$_CONFIG = array(
    'root_path' => dirname(__FILE__) . '/../php/',
    'encoding' => 'utf-8',
    'pdo_dsn' => "sqlsrv:Server=$Server;Database=$DbName",
    'pdo_user' => "$DbUserName",
    'pdo_pass' => "$DbPassword",
);