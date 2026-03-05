<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Laravel\Fortify\Features;

class HomeCsontroller extends Controller
{
    public function __invoke(){
        return Inertia::render('welcome', [
            'canRegister' => Features::enabled(Features::registration()),
            'greeting' => 'Welcome back!',
        ]);
    }
}
