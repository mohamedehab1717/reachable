<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MallController extends Controller
{
    public function index()
    {
        return view('malls.mall');
    }

    public function mallegypt()
    {
        return view('malls.mallegypt');
    }

    public function cfc()
    {
        return view('malls.cfc');
    }

    public function almaza()
    {
        return view('malls.almaza');
    }

    public function carrefour()
    {
        return view('malls.carrefour');
    }

    public function hyperone()
    {
        return view('malls.hyperone');
    }

    public function lulu()
    {
        return view('malls.lulu');
    }
}
