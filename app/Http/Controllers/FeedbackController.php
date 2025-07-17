<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // دالة لعرض التعليقات
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedbacks.index', compact('feedbacks'));
    }

    // دالة لإضافة تعليق
    public function store(Request $request, $school_id)
{
    // التحقق من صحة البيانات المدخلة
    $request->validate([
        'comment' => 'required|string',
        'rating' => 'required|integer|between:1,5',
    ]);

    // إضافة التعليق إلى قاعدة البيانات
    Feedback::create([
        'school_id' => $school_id,
        'comment' => $request->comment,
        'rating' => $request->rating,
    ]);

    // إعادة توجيه المستخدم إلى نفس صفحة المدرسة مع رسالة نجاح
    return redirect()->route('school.details', ['id' => $school_id])->with('success', 'Feedback submitted successfully');
}

}
