<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Category;

use App\Models\Categ_school;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
   

public function showSchools()
{
    // المدارس القديمة من جدول Categ_school
    $oldSchools = Categ_school::all();

    // المدارس الجديدة اللي أضافها الأدمن من جدول categories
    $newSchools = Category::where('type', 'school')->get();

    // ندمجهم في مجموعة واحدة
    $schools = $oldSchools->concat($newSchools);

    return view('schools', compact('schools'));
}
public function showSchoolDetails($id)
{
    $school = School::with('feedbacks')->findOrFail($id);
    return view('schoolsdetails', compact('school'));
}


}

