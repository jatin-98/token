<?php

namespace Jatin;

class TokenMiddleware
{
    public static function checkToken($token)
    {
        try {

            if (empty($token)) {
                throw new TokenException('Token can not be null');
            }

            if (!TokenConditions::isTokenPresent($token)) {
                throw new TokenException('Invalid Token!');
            }

            if (TokenConditions::checkExpiry($token) === false) {
                throw new TokenException('Token Expired!');
            }

            return true;
        } catch (TokenException $e) {
            return $e->getMessage();
        }
    }
}
