CREATE TABLE IF NOT EXISTS `revoked_tokens` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `jti_hash` CHAR(64) NOT NULL,
  `revoked_at` DATETIME NOT NULL,
  `expires_at` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX (`jti_hash`),
  INDEX (`expires_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
