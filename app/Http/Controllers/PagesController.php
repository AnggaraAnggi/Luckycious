<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class PagesController extends Controller
{
    public function index()
    {
        return view('page.index', ['text' => 'Luckycious Present']);
    }

    public function portofolio()
    {

        return view('page.portofolio', ['text' => 'My Portofolio']);
    }
}