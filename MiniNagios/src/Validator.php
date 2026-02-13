<?php
namespace App;

class Validator
{





    public static function isHostnameValid(string $hostname): bool

    {
       return preg_match (pattern:'/^[a-zA-Z0-9-]+$/',$hostname);

    }
}