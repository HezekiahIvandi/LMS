<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lessons')->insert([
            [
                'course_id' => 1,
                'lesson_title' => 'Bab 1 Pengantar',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_1.pdf',
                'video_content_url' => 'assets/Video_1.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 1,
                'lesson_title' => 'Bab 2 Kelayakan Artikel',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_2.pdf',
                'video_content_url' => 'assets/Video_2.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 1,
                'lesson_title' => 'Bab 3 Referensi',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_3.pdf',
                'video_content_url' => 'assets/Video_3.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 1,
                'lesson_title' => 'Bab 4 Parafrasa',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_4.pdf',
                'video_content_url' => 'assets/Video_4.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 1,
                'lesson_title' => 'Bab 5 Gaya Bahasa',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_5.pdf',
                'video_content_url' => 'assets/Video_5.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 1,
                'lesson_title' => 'Bab 6 Sudut Pandang Netral',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_6.pdf',
                'video_content_url' => 'assets/Video_6.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 2,
                'lesson_title' => 'Bab 1',
                'text_content' => null,
                'file_content_url' => 'assets/PDF_1.pdf',
                'video_content_url' => null,
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 2,
                'lesson_title' => 'Bab 2',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_2.pdf',
                'video_content_url' => null,
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 3,
                'lesson_title' => 'Bab 1',
                'text_content' => null,
                'file_content_url' => null,
                'video_content_url' => 'assets/Video_1.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 3,
                'lesson_title' => 'Bab 2',
                'text_content' => null,
                'file_content_url' => null,
                'video_content_url' => 'assets/Video_2.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 4,
                'lesson_title' => 'Bab 1',
                'text_content' => null,
                'file_content_url' => null,
                'video_content_url' => null,
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 5,
                'lesson_title' => 'Bab 1',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_4.pdf',
                'video_content_url' => 'assets/Video_4.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 5,
                'lesson_title' => 'Bab 2',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_5.pdf',
                'video_content_url' => 'assets/Video_5.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 5,
                'lesson_title' => 'Bab 3',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_6.pdf',
                'video_content_url' => 'assets/Video_6.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 6,
                'lesson_title' => 'Bab 1',
                'text_content' => null,
                'file_content_url' => null,
                'video_content_url' => null,
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 7,
                'lesson_title' => 'Bab 1',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => null,
                'video_content_url' => null,
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 8,
                'lesson_title' => 'Bab 1',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_1.pdf',
                'video_content_url' => 'assets/Video_1.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 10,
                'lesson_title' => 'Bab 1 Pengantar',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_1.pdf',
                'video_content_url' => 'assets/Video_1.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 10,
                'lesson_title' => 'Bab 2 Kelayakan Artikel',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_2.pdf',
                'video_content_url' => 'assets/Video_2.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
            [
                'course_id' => 10,
                'lesson_title' => 'Bab 3 Referensi',
                'text_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'file_content_url' => 'assets/PDF_3.pdf',
                'video_content_url' => 'assets/Video_3.mp4',
                'created_at' => 'now',
                'updated_at' => 'now',
            ],
        ]);
    }
}
