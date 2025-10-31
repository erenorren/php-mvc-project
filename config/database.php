<?php
// /config/database.php
return [
    'host' => getenv('MYSQL_HOST') ?: 'localhost', // Menggunakan MYSQL_HOST
    'port' => getenv('MYSQL_PORT') ?: '3306', // Menggunakan MYSQL_PORT
    'dbname' => getenv('MYSQL_DATABASE') ?: 'mvc_db', // Menggunakan MYSQL_DATABASE
    'username' => getenv('MYSQL_USER') ?: 'root', // Menggunakan MYSQL_USER
    'password' => getenv('MYSQL_PASSWORD') ?: '', // Menggunakan MYSQL_PASSWORD
    'charset' => 'utf8mb4'
];