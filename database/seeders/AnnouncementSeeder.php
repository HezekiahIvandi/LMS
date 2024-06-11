<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('announcement')->insert([
            [
                'course_name' => 'WikiLatih Daring #16',
                'title_announcement' => 'Kursus WikiLatih Daring #16 Segera Dimulai!',
                'announcement' => 'Halo semua peserta kursus WikiLatih Daring #16! Kami dengan bangga mengumumkan bahwa kursus WikiLatih Daring #16 telah resmi dimulai. Ini adalah kesempatan luar biasa bagi semua peserta untuk meningkatkan keterampilan mereka dalam penyuntingan Wikipedia dan menguasai berbagai alat yang berguna dalam dunia daring.'
            ],
            [
                'course_name' => 'WikiSosial Daring #20',
                'title_announcement' => 'Sertifikat Kelulusan WikiSosial Daring #20',
                'announcement' => 'Kami dengan senang hati mengumumkan bahwa sertifikat kelulusan Anda telah diproses dan dikirimkan melalui email yang Anda gunakan saat mendaftar. Pastikan untuk memeriksa kotak masuk Anda, termasuk folder spam atau promosi, jika Anda belum menerimanya. Sertifikat ini adalah bukti atas partisipasi dan pencapaian Anda selama kursus WikiSosial Daring #20.'
            ],
            [
                'course_name' => 'Magang Wikimedia Indonesia',
                'title_announcement' => 'Lowongan Magang Teknologi di Wikimedia Indonesia',
                'announcement' => 'Wikimedia Indonesia saat ini membuka lowongan magang di bidang teknologi. Jika Anda tertarik untuk menjadi bagian dari Wikimedia Indonesia, inilah kesempatan Anda! Kirimkan CV dan surat pengantar Anda ke alamat email lowongan@wikimedia.or.id sebelum 28 Juli 2024. Mohon cantumkan subjek email "Magang Teknologi - [Nama Anda]"'
            ],
            [
                'course_name' => 'Hibah Wikimedia Indonesia',
                'title_announcement' => 'Pengajuan Proposal Hibah ke Wikimedia Indonesia',
                'announcement' => 'Kami selalu membuka kesempatan untuk pengajuan proposal hibah. Jika Anda memiliki ide proyek yang inovatif dan berkualitas, kami siap untuk mendukung Anda melalui program hibah kami! Jika Anda memiliki pertanyaan atau memerlukan bantuan selama proses pengajuan proposal, jangan ragu untuk menghubungi kami melalui email hibah@wikimedia.or.id.'
            ],
        ]);
    }
}
