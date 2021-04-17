<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use App\Models\Chat;

class ConsultationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user_id = Auth::user()->id;
        $chat = Chat::where('from_id',$user_id)->orWhere('to_id', $user_id)->orderBy('created_at','desc')->get();
        $i = 1;

        return view('dosen.history', compact('chat', 'i'));
    }

    public function show($id)
    {
        $chat = Chat::where('id', $id)->first();
        $message = Message::where('invoice', $chat->invoice)->orderBy('created_at','desc')->get();
        return view('dosen.detailconsultation', compact('chat', 'message'));
    }


    public function storeDsn(Request $request)
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $chat = Chat::where('invoice', $request->invoice)->first();
        

        $message = Message::create([
            'from_id'=> $user_id,
            'to_id'=> $chat->from_id,
            'invoice'=> $chat->invoice,
            'chat_id' => $chat->id,
            'text' => $request->message,
        ]);

        return redirect('/dsn/consultation/show/'. $chat->id);
    }
}
