<?php
require_once __DIR__ . "/../includes/Database.php";

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

    // ⭐ UNIVERSAL UPDATE FUNCTION
    public function updateById(int $id, array $values): bool
    {
        if ($id <= 0 || empty($values)) {
            return false;
        }

        $sets = [];
        $params = [];
        foreach ($values as $col => $val) {
            $sets[] = "`$col` = ?";
            $params[] = $val;
        }
        $params[] = $id;

        $sql = "UPDATE `{$this->table}` SET " . implode(', ', $sets) . " WHERE `id` = ? LIMIT 1";

        try {
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute($params);
        } catch (PDOException $e) {
            error_log("BaseModel::updateById error: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Delete a row by id.
     *
     * @param int $id
     * @return bool
     */
    public function deleteById(int $id): bool
    {
        if ($id <= 0) return false;

        try {
            $stmt = $this->pdo->prepare("DELETE FROM `{$this->table}` WHERE `id` = ? LIMIT 1");
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            error_log("BaseModel::deleteById error: " . $e->getMessage());
            return false;
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

    /**
     * Fetch all records from the table.
     *
     * @return array|null
     */
    public function findAll(): ?array
    {
        try {
            $query = "SELECT * FROM `{$this->table}`";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $rows === false ? null : $rows;
        } catch (PDOException $e) {
            error_log('BaseModel::findAll error: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get total count of records in the table.
     *
     * @return int
     */
    public function count(): int
    {
        try {
            $stmt = $this->pdo->prepare("SELECT COUNT(*) as total FROM `{$this->table}`");
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['total'] ?? 0;
        } catch (PDOException $e) {
            error_log('BaseModel::count error: ' . $e->getMessage());
            return 0;
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
