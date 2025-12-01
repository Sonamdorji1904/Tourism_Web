<?php

/**
 * ConfigLoader Class
 * 
 * Handles loading and retrieving environment variables from .env file
 * using vlucas/phpdotenv package.
 */

// Ensure Composer autoload (vendor) is available when this file is loaded directly.
// This helps both runtime (to find vlucas/phpdotenv) and language servers that
// index vendor classes for type information.
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

use Dotenv\Dotenv;

class ConfigLoader
{
    /**
     * Flag to track if .env has been loaded
     */
    private static bool $loaded = false;

    /**
     * Loads the .env file once if it hasn't been loaded already.
     * Uses vlucas/phpdotenv to parse .env and populate environment variables.
     * 
     * @return void
     */
    public static function initializeDotEnv(): void
    {
        if (self::$loaded) {
            return;
        }

        try {
            $rootPath = dirname(__DIR__);

            $dotenv = Dotenv::createImmutable($rootPath);
            $dotenv->safeLoad();

            self::$loaded = true;
        } catch (\Exception $e) {
            error_log("ConfigLoader: Error loading .env file: " . $e->getMessage());
        }
    }

    /**
     * Get an environment variable value with optional default fallback.
     * 
     * Automatically ensures .env is loaded before retrieving the value.
     *
     * @param string $key The environment variable name
     * @param mixed $default Optional default value if the variable is not set
     * @return mixed The environment variable value or the default
     * 
     * @example
     *   $host = ConfigLoader::env('MailHost', 'localhost');
     *   $debug = ConfigLoader::env('APP_DEBUG', false);
     */
    public static function env(string $key, $default = null): mixed
    {
        // Ensure environment variables are loaded before attempting to read them
        self::initializeDotEnv();

        // Try to get from $_ENV first (where Dotenv puts variables)
        // Then fall back to getenv(), then to defaults
        $value = $_ENV[$key] ?? getenv($key) ?? null;

        // Remove surrounding quotes if present (Dotenv may include them)
        if (is_string($value)) {
            $value = trim($value);
            if (($value[0] === '"' && $value[-1] === '"') ||
                ($value[0] === "'" && $value[-1] === "'")
            ) {
                $value = substr($value, 1, -1);
            }
        }

        // If value is falsy or empty string, use the default
        return (!empty($value) && $value !== false) ? $value : $default;
    }

    /**
     * Check if a specific environment variable is set.
     *
     * @param string $key The environment variable name
     * @return bool True if the variable is set and not empty, false otherwise
     */
    public static function has(string $key): bool
    {
        return self::env($key) !== null;
    }

    /**
     * Get all environment variables (filtered to only those from .env if possible).
     *
     * @return array Array of all environment variables
     */
    public static function all(): array
    {
        self::initializeDotEnv();
        return getenv();
    }
}

// Automatically load the .env file as soon as this class is required
// This ensures all environment variables are available throughout the application
ConfigLoader::initializeDotEnv();
