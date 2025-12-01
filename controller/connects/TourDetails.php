<?php
require_once __DIR__ . '/../../model/BaseModel.php';

class TourDetails extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "tour_details";
    }

    public function saveContent(array $data): bool
    {
        return $this->insert($data);
    }

    /**
     * Convenience wrapper to fetch a tour details row by id.
     * @param int $id
     * @return array|null
     */
    public function findTourDetailByTourId(int $tourId): ?array
    {
        return parent::findTourDetailByTourId($tourId);
    }
}
