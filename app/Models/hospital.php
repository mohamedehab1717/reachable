<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HospitalInfo; // هنا ضروري تستورد HospitalInfo

class Hospital extends Model
{
    use HasFactory;

    protected $table = 'hospitals'; // تحدد اسم الجدول (مهم عشان اسم الموديل مش جمع)

    protected $fillable = [
        'name', 'location', 'photo'
        // زود الأعمدة حسب اللي موجود عندك
    ];

    public function info()
{
    return $this->hasOne(HospitalInfo::class, 'hospital_id', 'id');
}

}
