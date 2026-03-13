<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job'; // اسم الجدول

    protected $fillable = ['context','text','image1','image2','image3'];

    // إذا كان فيه علاقات مع جداول ثانية، ممكن تضيفها هنا مثل:
    // public function company()
    // {
    //     return $this->belongsTo(Company::class);
    // }
}