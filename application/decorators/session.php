<?php

class Session
{

    public static function start()
    {
        session_start();
    }

    public static function GetUser()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        return null;
    }

    public static function SetUser($data)
    {
        $_SESSION['user'] = ['username' => $data['username'], 'email' => $data['email'], 'id' => $data['id'], 'status' => $data['status']];
    }


}