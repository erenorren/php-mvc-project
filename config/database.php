<?php
// /config/database.php

return [
    // --- GANTI DB_ dengan MYSQL_ ---
    'host' => getenv('MYSQL_HOST') ?: 'localhost',
    'port' => getenv('MYSQL_PORT') ?: '3306',
    
    // --- Tambahkan UNDERSCORE dan pastikan nama database yang benar ---
    'dbname' => getenv('MYSQL_DATABASE') ?: 'mvc_db', // Pastikan nama DB di Railway sudah ditambahkan
    'username' => getenv('MYSQL_USER') ?: 'root',
    'password' => getenv('MYSQL_PASSWORD') ?: '',
    'charset' => 'utf8mb4'
];