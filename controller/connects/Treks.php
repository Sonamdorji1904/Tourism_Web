<?php
require_once __DIR__ . '/../../model/BaseModel.php';
class Treks extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "treks";
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
    public function findTrekById(int $id): ?array
    {
        return parent::findById($id);
    }

    /**
     * Fetch all tours from the database.
     * @return array|null
     */
    public function findAllTrek(): ?array
    {
        return parent::findAll();
    }

    public function updateTrek(int $id, array $data): bool
    {
        return parent::updateById($id, $data);
    }

    public function deleteTreak(int $id): bool
    {
        return parent::deleteById($id);
    }

    public function getRandomTreksExcluding(int $excludeTourId, int $limit = 3): ?array
    {
        return parent::getRandomExcluding($excludeTourId, $limit);
    }
}
