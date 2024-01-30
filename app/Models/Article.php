<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Article extends Model
{
    use HasFactory;
    function user(){
        return $this-> belongsTo(User::class);
    }
    function commentaire(){
        return  $this-> hasMany(Commentaire::class);
    }
    protected $table = 'articles';
    protected $fillable = [
        'titre',
        'description',
        'prix',
        'photo',
    ];
}
