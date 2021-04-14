<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('dosen.editprofile');
    }

    public function password()
    {
        return view('dosen.editpassword');
    }
}
