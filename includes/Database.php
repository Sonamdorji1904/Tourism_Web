<?php
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
    if (class_exists('\Dotenv\Dotenv')) {
        try {
            $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
            $dotenv->safeLoad();
        } catch (Throwable $e) {
            // ignore dotenv errors; fall back to environment` --- IGNORE ---
        }
    }
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
        $this->host = getenv('DB_HOST') ?: '';
        $this->db = getenv('DB_NAME') ?: '';
        $this->user = getenv('DB_USER') ?: '';
        $this->pass = getenv('DB_PASS') ?: '';
        $this->charset = getenv('DB_CHARSET') ?: 'utf8mb4';

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
