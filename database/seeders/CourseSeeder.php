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
        DB::table('kursus')->insert([
            [
                'name' => 'WikiLatih Daring #20',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Rina Sulastri',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #2',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Andi Wijaya',
            ],
            [
                'name' => 'WikiSosial Daring #24',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Nanda Kurnia',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #6',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Tomi Hartono',
            ],
            [
                'name' => 'WikiSosial Daring #25',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Sinta Yuliani',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #3',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Gita Permana',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia #5',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Prita Sari',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia #6',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Uli Rahma',
            ],
            [
                'name' => 'WikiLatih Daring #18',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Intan Lestari',
            ],
            [
                'name' => 'WikiLatih Daring #21',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Vivi Ariyani',
            ],
            [
                'name' => 'WikiSosial Daring #21',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Budi Santoso',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #5',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Omar Wijaya',
            ],
            [
                'name' => 'WikiLatih Daring #16',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Dian Agustin',
            ],
            [
                'name' => 'WikiSosial Daring #22',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Fitri Handayani',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #4',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Kiki Ramadhan',
            ],
            [
                'name' => 'WikiLatih Daring #19',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Mira Handayani',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia #2',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Citra Dewi',
            ],
            [
                'name' => 'WikiSosial Daring #20',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Ayu Sulastri',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia #3',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Hendri Setiawan',
            ],
            [
                'name' => 'WikiSosial Daring #23',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Joko Susilo',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Raisha Abdillah',
            ],
            [
                'name' => 'WikiLatih Daring #17',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Eko Prasetyo',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #2',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Andi Wijaya',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Nabial Chiekal Gibran',
            ],
        ]);
    }
}
