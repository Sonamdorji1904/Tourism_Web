<?php
require_once "../includes/Database.php";

class BaseModel
{
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->pdo;
    }

    protected function processDates(array $values): array
    {
        foreach ($values as $key => $value) {
            if ($value instanceof DateTime) {
                $values[$key] = $value->format("Y-m-d");
            }
        }
        return $values;
    }

    // ⭐ UNIVERSAL INSERT FUNCTION
    public function insert(array $values): bool
    {
        $columns = '`' . implode('`, `', array_keys($values)) . '`';

        // Build placeholder list
        $placeholders = ':' . implode(', :', array_keys($values));

        // Create final query
        $query = "INSERT INTO `{$this->table}` ($columns) VALUES ($placeholders)";

        // Format any dates (optional)
        $values = $this->processDates($values);

        // Execute
        $stmt = $this->pdo->prepare($query);
        try {
            return $stmt->execute($values);
        } catch (PDOException $e) {
            error_log("DB Insert Error: " . $e->getMessage());
            error_log("Query: " . $query);
            error_log("Values: " . print_r($values, true));
            throw $e;
        }
    }

    /**
     * Find a row by primary id.
     * Assumes the primary key column is named `id`.
     * Returns associative array or null when not found.
     *
     * @param int $id
     * @return array|null
     */

    public function findById(int $id): ?array
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM `{$this->table}` WHERE `id` = ? LIMIT 1");
            $stmt->execute([$id]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row === false ? null : $row;
        } catch (PDOException $e) {
            error_log('BaseModel::findById error: ' . $e->getMessage());
            return null;
        }
    }
    public function findTourDetailByTourId(int $tourId): ?array
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM `{$this->table}` WHERE `tour_id` = ? LIMIT 1");
            $stmt->execute([$tourId]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row === false ? null : $row;
        } catch (PDOException $e) {
            error_log('BaseModel::findById error: ' . $e->getMessage());
            return null;
        }
    }

    public function findTourItineraryByTourId(int $tourId): ?array
    {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM `{$this->table}` WHERE `tour_id` = ? LIMIT 1");
            $stmt->execute([$tourId]);
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $row === false ? null : $row;
        } catch (PDOException $e) {
            error_log('BaseModel::findById error: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Return the last insert id for the current PDO connection.
     * Useful after insert() to obtain the newly created primary key.
     *
     * @return string
     */
    public function getLastInsertId(): string
    {
        try {
            return $this->pdo->lastInsertId();
        } catch (Throwable $e) {
            error_log('BaseModel::getLastInsertId error: ' . $e->getMessage());
            return '';
        }
    }
}
