<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;
use App\Models\Category;

class HospitalController extends Controller
{
    public function index()
    {
        // بيانات قديمة من جدول hospitals
        $oldHospitals = Hospital::all();

        // بيانات جديدة من جدول categories حسب النوع hospital
        $newHospitals = Category::where('type', 'hospital')->get();

        // دمج الاتنين مع بعض
        $hospitals = $oldHospitals->concat($newHospitals);

        return view('hospitals.index', compact('hospitals'));
    }

    public function show($id)
    {
        // حاول تجيب من categories الأول
        $hospital = Category::find($id);

        // لو ملقاش، جرب تجيب من hospitals
        if (!$hospital) {
            $hospital = Hospital::findOrFail($id);
        }

        return view('hospitalsinfo', compact('hospital'));
    }
}
