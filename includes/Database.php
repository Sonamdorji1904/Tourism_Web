<?php
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/ConfigLoader.php';
}

class Database
{
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;

    public $pdo;

    public function __construct()
    {
        $this->host = ConfigLoader::env('DB_HOST') ?: '';
        $this->db = ConfigLoader::env('DB_NAME') ?: '';
        $this->user = ConfigLoader::env('DB_USER') ?: '';
        $this->pass = ConfigLoader::env('DB_PASS') ?: '';
        $this->charset = ConfigLoader::env('DB_CHARSET') ?: 'utf8mb4';

        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die("DB Connection Failed: " . $e->getMessage());
        }
    }
}
