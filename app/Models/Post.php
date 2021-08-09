<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','path','order'];

    protected static function booted() {
        self::created(function (self $post){
            $post->order = $post->id;
            $post->save();
        });
    }
}
