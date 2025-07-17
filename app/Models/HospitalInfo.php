<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hospital;

class HospitalInfo extends Model
{
    use HasFactory;

    protected $table = 'hospitalsinfo'; // حدد الجدول صح

    protected $fillable = [
        'hospital_id',
        'info',       // بدل description
        'address',    // بدل services
        'des',
        'map_url',
        'email',
        'phone',
        'img1', 'img2', 'img3', 'img4', 'img5', 'img6', 'img7', 'img8'
    ];
    

    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id', 'id');
    }
}
