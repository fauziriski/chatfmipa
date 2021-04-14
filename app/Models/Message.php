<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // use HasFactory;

    protected $fillable = [
        'from_id',
        'to_id',
        'invoice',
        'chat_id',
        'text',
    ];
    public $timestamps = true;

    public function chat()
    {
        return $this->belongsTo(Chat::class, 'chat_id');
    }

    public function to()
    {
        return $this->belongsTo(User::class, 'to_id');
    }

    public function from()
    {
        return $this->belongsTo(User::class, 'from_id');
    }
}
