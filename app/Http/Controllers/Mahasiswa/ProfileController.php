<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('mahasiswa.editprofile');
    }

    public function password()
    {
        return view('mahasiswa.editpassword');
    }
}
