<?php
require_once __DIR__ . '/../../model/BaseModel.php';

class Festival extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "events";
    }

    public function saveContent(array $data): bool
    {
        return $this->insert($data);
    }

    public function getAllFestivals(): array
    {
        return parent::findAll();
    }

    public function updateFestival(int $id, array $data): bool
    {
        return parent::updateById($id, $data);
    }
    public function deleteFestival(int $id): bool
    {
        return parent::deleteById($id);
    }
    public function findFestivalById(int $id): ?array
    {
        return parent::findById($id);
    }
}
