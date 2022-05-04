<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Storage::disk('local')->put('exemple.txt', 'Demo');

        $data = Storage::disk('local')->get('exemple.txt');

        $size = Storage::disk('local')->size('exemple.txt');

        $lastModified = Storage::disk('local')->lastModified('exemple.txt');

        $path = Storage::disk('local')->path('exemple.txt');

        // copy 
        // move
        // prepend
        // append
        // delete

        dump($data);
        dump($size);
        dump($lastModified);
        dd($path);

        return view('home');
    }
}
