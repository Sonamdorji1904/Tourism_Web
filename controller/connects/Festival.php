<?php
require_once __DIR__ . '/../../model/BaseModel.php';

class Festival extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "Festival";
    }

    public function saveContent(array $data): bool
    {
        return $this->insert($data);
    }

    public function getAllFestivals(): array
    {
        // Assuming your BaseModel has a method like 'select' or 'fetchAll'
        // This will fetch all rows from the 'Festival' table.
        $sql = "SELECT * FROM {$this->table} ORDER BY date DESC";
        return $this->select($sql); // or $this->query($sql)->fetchAll(); based on your BaseModel
    }
}
