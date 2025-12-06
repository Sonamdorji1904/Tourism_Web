<?php
require_once __DIR__ . '/../../model/BaseModel.php';

class TrekItineraries extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "trek_itineraries";
    }

    public function saveContent(array $data): bool
    {
        return $this->insert($data);
    }

    public function findTrekItineraryByTrekId(int $trekId): ?array
    {
        return parent::findByTrekId($trekId);
    }

    public function findTrekItineraryById(int $id): ?array
    {
        return parent::findById($id);
    }

    public function updateTrekItinerary(int $id, array $data): bool
    {
        return parent::updateById($id, $data);
    }

    public function deleteTrekItineraryById(int $id): bool
    {
        return parent::deleteById($id);
    }
}
