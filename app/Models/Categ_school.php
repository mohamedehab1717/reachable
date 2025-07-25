<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categ_school extends Model
{
    use HasFactory;
    protected $table = 'categ_schools';


    protected $fillable = ['title', 'img1', 'description'];

    
}

