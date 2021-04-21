<?php

namespace App\Http\Controllers\Admin;

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
        $chat = Chat::orderBy('created_at','desc')->get();
        $i = 1;

        return view('admin.history', compact('chat', 'i'));
    }

    public function show($id)
    {
        $chat = Chat::where('id', $id)->first();
        $message = Message::where('invoice', $chat->invoice)->orderBy('created_at','desc')->get();
        return view('admin.detailconsultation', compact('chat', 'message'));
    }

    public function complete($id)
    {
        $chat = Chat::where('id', $id)->first();
        $chat->update([
            'status' => '2'
        ]);

        return response()->json('susscess');
    }

    public function notComplete($id)
    {
        $chat = Chat::where('id', $id)->first();
        $chat->update([
            'status' => '0'
        ]);

        return response()->json('susscess');
    }

    public function inProgresss($id)
    {
        $chat = Chat::where('id', $id)->first();
        $chat->update([
            'status' => '1'
        ]);

        return response()->json('susscess');
    }

    public function deleteMessage($id)
    {
        $message = Message::where('id', $id)->first();
        $invoice = $message->chat_id;
        $message->delete();

        return redirect('/akses-admin/consultation/show/'. $invoice);

    }

    
}
