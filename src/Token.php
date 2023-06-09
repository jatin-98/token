<?php

namespace Jatin;

class Token
{

    const EXPIRY_TIME = 3600;
    const ENCRYPTION_DECRYPTION_KEY = '$2y$10$RoelBPwW0UvtTkX.5u78u4p9C.RtDgcyJAIVPoCyw417IUoHAu3y';
    const FILE_PATH = __DIR__ . '/../storage/__tokens/';
    const STORE_TOKENS = true;

    public static function generateToken($email): string
    {
        $payload = self::generatePayload($email);
        $token = self::encode($payload);
        self::STORE_TOKENS === true ? self::storeToken($token) : '';
        return $token;
    }

    public static function encode(array $payload): string
    {
        $json           =   json_encode($payload);
        $iv             =   openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted      =   openssl_encrypt($json, 'aes-256-cbc', self::ENCRYPTION_DECRYPTION_KEY, OPENSSL_RAW_DATA, $iv);
        $encoded        =   base64_encode($iv . $encrypted);
        $finalToken     =   str_replace('/', '@', $encoded);
        return $finalToken;
    }

    public function generatePayload($email): array
    {
        return ['email' => $email, 'expiryTime' => time() + self::EXPIRY_TIME];
    }

    public static function decode($token): string
    {
        $replaced = str_replace('@', '/', $token);
        $decoded = base64_decode($replaced);
        $ivLength = openssl_cipher_iv_length('aes-256-cbc');
        $iv = substr($decoded, 0, $ivLength);
        $encrypted = substr($decoded, $ivLength);
        $json = openssl_decrypt($encrypted, 'aes-256-cbc', self::ENCRYPTION_DECRYPTION_KEY, OPENSSL_RAW_DATA, $iv);

        return $json;
    }

    public static function storeToken($token): bool
    {
        $directory = self::FILE_PATH;
        !file_exists($directory) ? mkdir($directory, 0777, true) : '';
        $filePath = $directory . $token;

        return file_put_contents($filePath, time() + self::EXPIRY_TIME) ?? false;
    }
}
