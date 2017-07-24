<?php
namespace App\Http\Controllers;

class ThemeController
{
    public function show($page = 'home')
    {
        return view($page);
    }
}
