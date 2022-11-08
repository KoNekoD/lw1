<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function __invoke(): Factory|View|Application
    {
        return view('welcome', [
            'HelloText' => 'Hello user, it is sample text ...',
            'DateText' => date('Y-m-d - h:i:s')
        ]);
    }
}
