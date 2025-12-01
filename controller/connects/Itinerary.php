<?php
require_once __DIR__ . '/../../model/BaseModel.php';

class Itinerary extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "detailed_itinerary";
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
    public function findTourItineraryByTourId(int $tourId): ?array
    {
        return parent::findTourItineraryByTourId($tourId);
    }
}
