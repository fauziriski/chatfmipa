<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        return view('dosen.history');
    }

    public function show()
    {
        return view('dosen.detailconsultation');
    }

    // public function create()
    // {
    //     return view('dosen.addconsultation');
    // }
}
