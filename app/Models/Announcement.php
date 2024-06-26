<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    // Menentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'course_name',           // Nama kursus
        'title_announcement',    // Judul pengumuman
        'announcement',          // Isi pengumuman
    ];

    // Menentukan tabel yang terkait dengan model ini
    protected $table = 'announcement';
}
