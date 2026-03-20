<?php


class Securite{

    public static function verifierConnexion(): void{
        if(session_status()=== PHP_SESSION_NONE);
    }
}