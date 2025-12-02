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
        return parent::findAll();
    }
}
