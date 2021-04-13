<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        return view('mahasiswa.history');
    }

    public function show()
    {
        return view('mahasiswa.detailconsultation');
    }

    public function create()
    {
        return view('mahasiswa.addconsultation');
    }
}
