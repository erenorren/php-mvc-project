<!-- <?php

// return [
    // 'host' => getenv('DB_HOST') ?: 'localhost',
    // 'port' => getenv('DB_PORT') ?: '3306',
    // 'dbname' => getenv('DB_NAME') ?: 'mvc_db',
    // 'username' => getenv('DB_USER') ?: 'root',
    // 'password' => getenv('DB_PASSWORD') ?: '',
    // 'charset' => 'utf8mb4'
// ]; -->

try {
    $host = getenv('MYSQLHOST');
    $port = getenv('MYSQLPORT');
    $db = getenv('MYSQLDATABASE');
    $user = getenv('MYSQLUSER');
    $pass = getenv('MYSQLPASSWORD');
    
    echo "Connecting to: $host:$port / $db as $user\n";
    
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    echo "Connected successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
