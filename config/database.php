<?php
// /config/database.php
return [
    'host' => getenv('MYSQLHOST') ?: 'localhost', // Menggunakan MYSQL_HOST
    'port' => getenv('MYSQLPORT') ?: '3306', // Menggunakan MYSQL_PORT
    'dbname' => getenv('MYSQLDATABASE') ?: 'mvc_db', // Menggunakan MYSQL_DATABASE
    'username' => getenv('MYSQLUSER') ?: 'root', // Menggunakan MYSQL_USER
    'password' => getenv('MYSQLPASSWORD') ?: '', // Menggunakan MYSQL_PASSWORD
    'charset' => 'utf8mb4'
];