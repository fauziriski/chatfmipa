<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
Use Alert;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function profile()
    {
        return view('mahasiswa.editprofile');
    }

    public function updateProfile(Request $request)
    {
        $user_id = Auth::user()->id;
        $password = Auth::user()->password;

        if ($password_hash = Hash::check($request->password, $password)) {
            $user = User::where('id', $user_id)->first();

            $user_update = $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'npm_nisn' => $request->npm, 
                'phone' => $request->notlpn, 
                'dosen_pa' => $request->dosen_pa, 
                'dosen_ta' => $request->dosen_ta,
                'ps' => $request->ps,
                'gender' => $request->gender,
    
            ]);
            Alert::success('Berhasil');

            return redirect('/mhs/profile');
        }
        
        Alert::error('Gagal','Kata sandi salah')->showConfirmButton('Ok', '#3085d6');

        return redirect('/mhs/profile');

    }

    public function password()
    {
        return view('mahasiswa.editpassword');
    }

    public function updatePassword(Request $request)
    {
        $validatedData = $request->validate([
            'oldpassword' => 'required|min:8',
            'newpassword' => 'required|min:8',
            'repassword' => 'required|min:8',
        ]);

        $user_id = Auth::user()->id;
        $password = Auth::user()->password;

        if ($request->newpassword != $request->repassword) {
            Alert::error('Gagal','Kata sandi baru tidak sama')->showConfirmButton('Ok', '#3085d6');
            return redirect('/mhs/password');
        }

        if ($password_hash = Hash::check($request->oldpassword, $password)) {
            $user = User::where('id', $user_id)->first();
            $update = $request->user()->fill([
                        'password' => Hash::make($request->newpassword)
                    ])->save();

            if ($update) {
                Alert::success('Berhasil','Kata sandi berhasil diubah')->showConfirmButton('Ok', '#3085d6');

                return redirect('/mhs/password');
            }

            Alert::error('Gagal','Tidak dapat mengubah kata sandi')->showConfirmButton('Ok', '#3085d6');
            return redirect('/mhs/password');
            
        }

        Alert::error('Gagal','Kata sandi salah')->showConfirmButton('Ok', '#3085d6');
        return redirect('/mhs/password');


    }
}
