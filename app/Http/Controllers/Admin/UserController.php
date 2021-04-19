<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use App\Models\Chat;
use Alert;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::all();
        $data = array();
        $status = array();

        foreach ($user as $key => $value) {
            $status = DB::table('model_has_roles')->where('model_id', $value->id)->first();
            $role = DB::table('roles')->where('id', $status->role_id)->first();
            $user[$key]->status = $role->name; 
            
        }
        $i = 1;

        return view('admin.user', compact('i', 'user'));
    }

    public function storeDosen(Request $request)
    {
        $email = User::where('email', $request->email)->first();
        $nip = User::where('npm_nisn', $request->nip)->first();
        if ($email) {
            Alert::error('Gagal','Email Sudah Digunakan')->showConfirmButton('Ok', '#3085d6');

            return redirect('/akses-admin/user');
        } elseif ($nip) {
            Alert::error('Gagal','NIP Sudah Digunakan')->showConfirmButton('Ok', '#3085d6');

            return redirect('/akses-admin/user');
        } elseif (strlen($request->password) < 8) {
            Alert::error('Gagal','Password tidak boleh kurang dari 8 karakter')->showConfirmButton('Ok', '#3085d6');

            return redirect('/akses-admin/user');
        }


        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'npm_nisn'=> $request->nip, 
            'gender' => ' '
        ]);

        if ($user) {
            $user->assignRole('dosen');
            Alert::success('Berhasil','Berhasil Menambahkan Dosen')->showConfirmButton('Ok', '#3085d6');

            return redirect('/akses-admin/user');
        } else {
            Alert::error('Gagal','Gagal Menambahkan Dosen')->showConfirmButton('Ok', '#3085d6');

            return redirect('/akses-admin/user');
        }
        
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        $chat = Chat::where('from_id',$user->id)->orWhere('to_id', $user->id)->get();
        foreach ($chat as $key => $value) {
            $message = Message::where('invoice', $value->invoice)->get();
            $message->each->delete();
        }
        $chat->each->delete();
        $dosen = DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->delete();

        return response()->json('susscess');
    }

    public function changePassword(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $update = $user->update([
                    'password' => Hash::make($request->password)
                ]);

        if ($update) {
            Alert::success('Berhasil','Kata sandi berhasil diubah')->showConfirmButton('Ok', '#3085d6');

            return redirect('/akses-admin/user');
        }

        Alert::error('Gagal','Tidak dapat mengubah kata sandi')->showConfirmButton('Ok', '#3085d6');
        return redirect('/akses-admin/user');
    }
}
