<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Commentaire extends Model
{
    use HasFactory;
    function user(){
        return $this->belongsTo(User::class);
    }

    function article(){
        return $this->belongsTo(Article::class);
    }
}
