<?php
require_once __DIR__ . '/../../model/BaseModel.php';

class Contact extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "booking";
    }

    public function saveMessage(array $data): bool
    {
        return $this->insert($data);
    }
}
