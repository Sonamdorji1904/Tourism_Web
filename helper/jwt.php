<?php
// helper/jwt.php

function base64url_encode(string $data): string
{
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode(string $data): string
{
    $remainder = strlen($data) % 4;
    if ($remainder) $data .= str_repeat('=', 4 - $remainder);
    return base64_decode(strtr($data, '-_', '+/'));
}

function jwt_sign(array $header, array $payload, string $secret): string
{
    $h = base64url_encode(json_encode($header, JSON_UNESCAPED_SLASHES));
    $p = base64url_encode(json_encode($payload, JSON_UNESCAPED_SLASHES));
    $sig = hash_hmac('sha256', "$h.$p", $secret, true);
    return "$h.$p." . base64url_encode($sig);
}

function jwt_verify(string $jwt, string $secret): ?array
{
    $parts = explode('.', $jwt);
    if (count($parts) !== 3) return null;

    [$h, $p, $s] = $parts;
    $expected = base64url_encode(hash_hmac('sha256', "$h.$p", $secret, true));

    // constant-time compare
    if (!hash_equals($expected, $s)) return null;

    $payload = json_decode(base64url_decode($p), true);
    if (!is_array($payload)) return null;

    // expiry check
    if (isset($payload['exp']) && time() >= (int)$payload['exp']) return null;

    return $payload;
}
