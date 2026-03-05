<?php

namespace Core\Middleware;

class Auth
{
    public function handle()
    {

            if(! $_SESSION['user_id'] ?? false) {
//                       dd($_SERVER['user_id']);
                header('Location: /');
                exit();

        }
    }
}