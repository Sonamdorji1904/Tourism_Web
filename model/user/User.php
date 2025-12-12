<?php
require_once __DIR__ . '/../BaseModel.php';

class User extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "users";
    }

    public function findByUsername(string $username): array
    {
        return $this->getByUsername($username);
    }
    public function updatePassword(int $id, string $passwordHash): bool
    {
        return parent::updatePassword($id, $passwordHash);
    }
}
