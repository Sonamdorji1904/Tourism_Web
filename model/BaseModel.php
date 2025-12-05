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

            $placeholders = ':' . implode(', :', array_keys($values));

            $query = "INSERT INTO `{$this->table}` ($columns) VALUES ($placeholders)";

            $values = $this->processDates($values);

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
                $stmt = $this->pdo->prepare("SELECT * FROM `{$this->table}` WHERE `tour_id` = ?");
                $stmt->execute([$tourId]);
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return empty($rows) ? null : $rows;
            } catch (PDOException $e) {
                error_log('BaseModel::findTourItineraryByTourId error: ' . $e->getMessage());
                return null;
            }
        }

        public function getLastInsertId(): string
        {
            try {
                return $this->pdo->lastInsertId();
            } catch (Throwable $e) {
                error_log('BaseModel::getLastInsertId error: ' . $e->getMessage());
                return '';
            }
        }

        public function getRandomExcluding(int $excludeId, int $limit = 3): ?array
        {
            try {
                $sql = "SELECT * 
                FROM `{$this->table}` 
                WHERE id != :excludeId
                ORDER BY RAND()
                LIMIT :limit";


                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(':excludeId', $excludeId, PDO::PARAM_INT);
                $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
                $stmt->execute();

                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                return $rows ?: [];
            } catch (PDOException $e) {
                error_log('BaseModel::getRandomExcluding error: ' . $e->getMessage());
                if (isset($stmt) && $stmt !== false) {
                    error_log('PDO ERROR INFO: ' . print_r($stmt->errorInfo(), true));
                }
                error_log('PDO CONNECTION ERROR: ' . print_r($this->pdo->errorInfo(), true));
                return null;
            }
        }
    }
