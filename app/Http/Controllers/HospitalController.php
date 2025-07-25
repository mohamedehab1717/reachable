<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\Category;

class HospitalController extends Controller
{
    public function index()
    {
        
        $oldHospitals = Hospital::all();

        
        $newHospitals = Category::where('type', 'hospital')->get();

        
        $hospitals = $oldHospitals->concat($newHospitals);

        return view('hospitals.index', compact('hospitals'));
    }

    public function show($id)
    {
    
        $hospital = Category::find($id);

    
        if (!$hospital) {
            $hospital = Hospital::findOrFail($id);
        }

        return view('hospitalsinfo', compact('hospital'));
    }
}
