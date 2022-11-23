<?php

namespace App\Http\HomeControllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function index() : View
    {
        return view('home', [
            'bookone' => 'Под куполом ',
            'discriptionone' =>'тутуутут',
            'booktwo' => 'Кэрри',
            'discriptiontwo' =>'тутутут',
            'bookthree' => 'Бессонница',
            'discriptionthree' =>'тутутут',
        ]);
    }
}