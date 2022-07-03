<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author',
        'picture',
    ];

    protected $hiddens = [
        'id',
        'created_at',
        'updated_at'
    ];
    
    public function cart()
    {
        return $this->hasMany(Cart::class, 'book_id');
    }
}
