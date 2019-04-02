<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jersey;


class jersey_controller extends Controller
{
    //
    public function index()
    {
        $datajersey = Jersey::all();
        return view('jersey', compact('datajersey'));
    }
}
