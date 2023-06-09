<?php

namespace Jatin;

class TokenConditions extends Token
{
    public static function isTokenPresent($token): bool
    {
        $directory = self::FILE_PATH;
        $filePath = $directory . $token;

        return file_exists($filePath);
    }


    public static function checkExpiry($token): bool
    {        
        return time() > file_get_contents(self::FILE_PATH . $token) ? false : true;
    }
}
