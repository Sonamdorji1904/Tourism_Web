<?php
require_once __DIR__ . '/../../model/BaseModel.php';
class TourCard extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "tours";
    }

    public function saveContent(array $data): bool
    {
        return $this->insert($data);
    }

    /**
     * Convenience wrapper to fetch a tour row by id.
     * @param int $id
     * @return array|null
     */
    public function findTourById(int $id): ?array
    {
        return parent::findById($id);
    }
}
