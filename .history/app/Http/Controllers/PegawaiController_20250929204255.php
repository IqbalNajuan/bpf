<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        // Hitung umur dari tanggal lahir
        $birthDate = Carbon::create('2000', '01', '01');
        $age = $birthDate->age;

        // Tentukan tanggal harus wisuda
        $graduationDate = Carbon::create('2025', '07', '15');
        
        // Hitung sisa hari menuju wisuda
        $daysLeft = now()->diffInDays($graduationDate);

        // Tentukan semester saat ini
        $currentSemester = 4;
        
        // Tentukan pesan berdasarkan semester
        $semesterMessage = ($currentSemester < 3) ? 'Masih Awal, Kejar TAK' : 'Jangan main-main, kurang-kurangi main game!';

        // Buat array data
        $data = [
            'name' => 'Iqbal Najuan',
            'my_age' => $age,
            'hobbies' => ['Membaca', 'Menulis', 'Menggambar', 'Bermain game', 'Memasak'],
            'tgl_harus_wisuda' => $graduationDate->format('d-m-Y'),
            'time_to_study_left' => $daysLeft,
            'current_semester' => $currentSemester,
            'semester_message' => $semesterMessage,
            'future_goal' => 'Menjadi programmer profesional'
        ];

        // Tampilkan data dalam format JSON
        return response()->json($data);
    }
}