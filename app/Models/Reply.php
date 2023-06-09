<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Quetion::class,'quetion_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function like()
    {
        return $this->hasMany(Like::class,'reply_id','id');
    }
}
