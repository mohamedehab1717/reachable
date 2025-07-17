<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // حدد الحقول التي يمكن تعيينها عبر mass assignment
    protected $fillable = ['title', 'des', 'img', 'type'];


}
