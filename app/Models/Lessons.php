<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'lesson_title',
        'text_content',
        'file_content_url',
        'video_content_url'
    ];

    protected $table = 'lessons';
}
