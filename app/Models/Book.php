<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable=['isbn','title','price','publisher','published'];


    public static $rules = [
        'isbn' => 'required',
        'title' => 'required|string|max:10',
        'price' => 'integer|min:0',
        'publisher' => 'required|max:255',
        'published' => 'required|date'
    ];

    public function scopePublished($query){
        $query->where('published','<=', now());
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
