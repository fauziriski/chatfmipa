<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Chat;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user_id = Auth::user()->id;
        $chat = count(Chat::where('from_id',$user_id)->orWhere('to_id', $user_id)->orderBy('created_at','desc')->get());
        return view('dosen.index', compact('chat'));
    }
}
