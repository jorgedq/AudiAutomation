<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Type;

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
        $types = Type::orderBy('id','ASC')->pluck('name','id');
        return view('home', compact('types'));
    }
}
