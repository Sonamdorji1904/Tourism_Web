<?php
require_once __DIR__ . '/../../model/BaseModel.php';

class TrekDetails extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "trek_details";
    }

    public function saveContent(array $data): bool
    {
        return $this->insert($data);
    }

    /**
     * Convenience wrapper to fetch a trek details row by id.
     * @param int $id
     * @return array|null
     */
    public function findTrekDetailByTrekId(int $trekId): ?array
    {
        return parent::findByTrekId($trekId);
    }
}
