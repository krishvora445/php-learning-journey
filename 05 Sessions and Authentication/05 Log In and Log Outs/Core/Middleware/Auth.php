<?php

namespace Core\Middleware;

class Auth
{
    public function handle()
    {

            if(! $_SESSION['user'] ?? false) {
//                       dd($_SERVER['user_id']);
                header('Location: /');
                exit();
                exit();

        }
    }
}