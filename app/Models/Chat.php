<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    // use HasFactory;
    protected $fillable = [
        'from_id',
        'from_name',
        'to_id',
        'to_name',
        'invoice',
        'information',
        'topic',
        'status',
    ];
    public $timestamps = true;

    public function message()
    {
        return $this->hasMany(Message::class);
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
