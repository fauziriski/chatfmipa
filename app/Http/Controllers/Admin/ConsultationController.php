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
}
