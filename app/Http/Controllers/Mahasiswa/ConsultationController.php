<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use App\Models\Chat;


class ConsultationController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $chat = Chat::where('from_id',$user_id)->orWhere('to_id', $user_id)->get();
        $i = 1;
        return view('mahasiswa.history', compact('chat', 'i'));
    }

    public function show($id)
    {
        $chat = Chat::where('id', $id)->first();
        $message = Message::where('invoice', $chat->invoice)->orderBy('created_at','desc')->get();
        return view('mahasiswa.detailconsultation', compact('chat', 'message'));
    }

    public function create()
    {
        $dosen = DB::table('model_has_roles')->where('role_id', 3)->get();
        
        $user = array();

        foreach ($dosen as $key => $value) {
            $user[] = User::where('id', $value->model_id)->first();
        }
        
        return view('mahasiswa.addconsultation', compact('user'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $dosen =  User::where('id', $request->dosen_id)->first();
        
        $timestamps = date('YmdHis');
        $invoice = $timestamps.$user_id.$dosen->id;
        $chat = Chat::create([
            'from_id' => $user_id,
            'from_name' => $user_name,
            'to_id' => $dosen->id,
            'to_name' => $dosen->name,
            'invoice' => $invoice,
            'information' => $request->information,
            'topic' => $request->topic,
            'status' => '1',
        ]);

        $message = Message::create([
            'from_id'=> $user_id,
            'to_id'=> $dosen->id,
            'invoice'=> $invoice,
            'chat_id' => $chat->id,
            'text' => $request->message,
        ]);

        return redirect('/mhs/consultation');
    }

    public function storeMhs(Request $request)
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $chat = Chat::where('invoice', $request->invoice)->first();

        $message = Message::create([
            'from_id'=> $user_id,
            'to_id'=> $chat->to_id,
            'invoice'=> $chat->invoice,
            'chat_id' => $chat->id,
            'text' => $request->message,
        ]);

        return redirect('/mhs/consultation/show/'. $chat->id);
    }
}
