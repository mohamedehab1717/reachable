<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    use HasFactory;
    protected $table = 'schools';


    protected $fillable = ['title', 'location', 'description', 'address', 'faculties','phone', 'email', 'map_url', 'images'];
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
    
    // إذا كان لديك علاقات مع النماذج الأخرى يمكنك تعريفها هنا
}

