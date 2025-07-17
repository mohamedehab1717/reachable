<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // تحديد الجدول الذي يرتبط بالنموذج (افتراضيًا سيكون بالجمع: feedbacks)
    protected $table = 'feedbacks';

    // تحديد الأعمدة التي يمكن ملؤها (Mass Assignment)
    protected $fillable = [
        'school_id',
        'comment',
        'rating',
    ];

    // تعطيل استخدام الأعمدة created_at و updated_at
    public $timestamps = false;

    // العلاقة مع نموذج School
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    // داخل النموذج Feedback
    public static function boot()
    {
        parent::boot();

        static::creating(function ($feedback) {
            if ($feedback->rating < 1 || $feedback->rating > 5) {
                throw new \Exception('التقييم يجب أن يكون بين 1 و 5');
            }
        });
    }
}
