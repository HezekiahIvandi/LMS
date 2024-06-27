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
                'name' => 'WikiLatih Daring #1',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Rina Sulastri',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #1',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Andi Wijaya',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiSosial Daring #1',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Nanda Kurnia',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #2',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Tomi Hartono',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiSosial Daring #2',
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
                'name' => 'Hibah Wikimedia Indonesia #1',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Prita Sari',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Hibah Wikimedia Indonesia #2',
                'image_url' => 'assets/Hibah WMID.png',
                'trainer' => 'Uli Rahma',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiLatih Daring #2',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Intan Lestari',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiLatih Daring #3',
                'image_url' => 'assets/Kursus WikiLatih.png',
                'trainer' => 'Vivi Ariyani',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'WikiSosial Daring #3',
                'image_url' => 'assets/Kursus WikiSosial.png',
                'trainer' => 'Budi Santoso',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'name' => 'Magang Wikimedia Indonesia #4',
                'image_url' => 'assets/Magang WMID.png',
                'trainer' => 'Omar Wijaya',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
        ]);
    }
}
