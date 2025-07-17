<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliesShopController extends Controller
{
    public function index()
    {
        return view('supplies.supplies');
    }

    public function medical()
    {
        return view('supplies.medical');
    }

    public function horus()
    {
        return view('supplies.horus');
    }

    public function elmasryia()
    {
        return view('supplies.elmasryia');
    }

    public function miracle()
    {
        return view('supplies.miracle');
    }

    public function alqasr()
    {
        return view('supplies.alqasr');
    }

    public function golden()
    {
        return view('supplies.golden');
    }
}
