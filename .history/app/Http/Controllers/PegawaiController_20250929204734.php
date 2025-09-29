<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        $birthDate = Carbon::create('2006', '01', '01');
        $age = $birthDate->age;
        $graduationDate = Carbon::create('2028', '07', '15');
        $daysLeft = now()->diffInDays($graduationDate);
        $currentSemester = 4;
        $semesterMessage = ($currentSemester < 3) ? 'Masih Awal, Kejar TAK' : 'Jangan main-main, kurang-kurangi main game!';

        // Kirim data ke view
        return view('pegawai_porto', [
            'name' => 'M. Iqbal',
            'my_age' => $age,
            'hobbies' => [ 'Bermain game', 'Fitsal'],
            'tgl_harus_wisuda' => $graduationDate->format('d-m-Y'),
            'time_to_study_left' => $daysLeft,
            'current_semester' => $currentSemester,
            'semester_message' => $semesterMessage,
            'future_goal' => 'Menjadi programmer profesional'
        ]);
    }
}