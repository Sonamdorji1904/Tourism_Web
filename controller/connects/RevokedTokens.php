<?php
require_once __DIR__ . '/../../model/BaseModel.php';

class RevokedTokens extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'revoked_tokens';
    }

    public function revokeJti(string $jti, int $exp): bool
    {
        if (empty($jti) || $exp <= 0) return false;
        $data = [
            'jti_hash' => hash('sha256', $jti),
            'revoked_at' => date('Y-m-d H:i:s'),
            'expires_at' => date('Y-m-d H:i:s', $exp),
        ];
        return $this->insert($data);
    }

    public function isRevoked(string $jti): bool
    {
        if (empty($jti)) return true;
        $hash = hash('sha256', $jti);
        try {
            $stmt = $this->pdo->prepare("SELECT COUNT(*) as c FROM `{$this->table}` WHERE `jti_hash` = ? LIMIT 1");
            $stmt->execute([$hash]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return ($row && intval($row['c']) > 0);
        } catch (PDOException $e) {
            error_log('RevokedTokens::isRevoked error: ' . $e->getMessage());
            // fail-safe: if DB error, treat token as revoked
            return true;
        }
    }

    public function cleanupExpired(): bool
    {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM `{$this->table}` WHERE `expires_at` < NOW()");
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log('RevokedTokens::cleanupExpired error: ' . $e->getMessage());
            return false;
        }
    }
}
