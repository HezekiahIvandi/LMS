<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course')->insert([
            [
                'name' => 'WikiLatih Daring #20',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Rina Sulastri',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #2',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Andi Wijaya',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiSosial Daring #24',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Nanda Kurnia',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #6',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Tomi Hartono',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiSosial Daring #25',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Sinta Yuliani',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #3',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Gita Permana',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia #5',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Prita Sari',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia #6',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Uli Rahma',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiLatih Daring #18',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Intan Lestari',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiLatih Daring #21',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Vivi Ariyani',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiSosial Daring #21',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Budi Santoso',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #5',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Omar Wijaya',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiLatih Daring #16',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Dian Agustin',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiSosial Daring #22',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Fitri Handayani',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #4',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Kiki Ramadhan',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiLatih Daring #19',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Mira Handayani',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia #2',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Citra Dewi',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiSosial Daring #20',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Ayu Sulastri',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia #3',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Hendri Setiawan',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiSosial Daring #23',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Joko Susilo',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Raisha Abdillah',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiLatih Daring #17',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Eko Prasetyo',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #2',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Andi Wijaya',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Nabial Chiekal Gibran',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
        ]);
    }
}
