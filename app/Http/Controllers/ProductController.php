<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function eduGames()
    {
        return "Marbel Edu Games";
    }

    public function kidsGames()
    {
        return "Marbel and Friends Kids Games";
    }

    public function storyBooks()
    {
        return "Riri Story Books";
    }

    public function kidsSongs()
    {
        return "Kolak Kids Songs";
    }
}
