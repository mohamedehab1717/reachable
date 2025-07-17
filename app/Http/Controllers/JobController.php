<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all(); // جلب جميع الوظائف
        return view('job', compact('jobs')); // إرسالهم للـ View
    }
}
