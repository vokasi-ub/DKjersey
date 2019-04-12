<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jersey;


class JerseyController extends Controller
{
    //
    public function index()
    {
        $datajersey = Jersey::all();
        return view('jersey2', compact('datajersey'));
    }

    public function maps(){
        return view('maps');
    }

}
