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

    /**
     * Fetch all tours from the database.
     * @return array|null
     */
    public function findAllTours(): ?array
    {
        return parent::findAll();
    }

    /**
     * Get total count of tours.
     * @return int
     */
    public function getTourCount(): int
    {
        return parent::count();
    }

    public function updateTourById(int $id, array $data): bool
    {
        return parent::updateById($id, $data);
    }

    public function deleteTourById(int $id): bool
    {
        return parent::deleteById($id);
    }
}
