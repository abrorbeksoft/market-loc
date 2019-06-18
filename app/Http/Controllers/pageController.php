<?php

namespace App\Http\Controllers;

use App\Kitob;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        $kitob=Kitob::all();

        return view('main',['kitob'=>$kitob]);
    }
    public function add()
    {
        return view('add');
    }
    public function show($id)
    {
        $kitob=Kitob::find($id);
        return view('show',['kitob'=>$kitob]);
    }
}
