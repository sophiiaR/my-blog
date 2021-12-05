<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //One to many inverse
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    //Many to many
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    //Polimorfic One to One
    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    }
}
