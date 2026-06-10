<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HospitalInfo; // 

class Hospital extends Model
{
    use HasFactory;

    protected $table = 'hospitals'; 

    protected $fillable = [
        'name', 'location', 'photo'
        
    ];

    public function info()
{
    return $this->hasOne(HospitalInfo::class, 'hospital_id', 'id');
}

}
