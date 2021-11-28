<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Home',
            'hosting'   => Service::where('type', 'Shared Hosting')->get(),
            'vps'       => Service::where('type', 'VPS Hosting')->get(),
            'mail'      => Service::where('type', 'Mail Server')->get()
        ];
        return view('web.home.index', $data);
    }
}
