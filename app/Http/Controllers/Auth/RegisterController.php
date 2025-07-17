<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    // عرض نموذج التسجيل
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // دالة لإنشاء الحساب
    public function create(Request $request)
    {
        // التحقق من صحة المدخلات
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'secondname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // يجب أن يكون هناك حقل password_confirmation في الـ form
            
        ]);

        // إنشاء المستخدم وتخزينه في قاعدة البيانات
        $user = new User();
$user->firstname = $request->firstname;
$user->secondname = $request->secondname;

$user->email = $request->email;
$user->password = Hash::make($request->password);
$user->save();

        // التوجيه إلى صفحة الهوم بعد التسجيل
        return redirect()->route('home');  // تأكد من وجود route للـ home
    }
}
