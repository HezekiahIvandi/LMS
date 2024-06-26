<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Menentukan atribut yang dapat diisi secara massal
    protected $fillable = [
        'name',       // Nama kursus
        'image_url',  // URL gambar kursus
        'trainer',    // Pelatih kursus
    ];

    // Menentukan tabel yang terkait dengan model ini
    protected $table = 'course';
}
