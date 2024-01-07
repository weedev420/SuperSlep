<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Kolumny, które można uzupełnić (dodawane przez masową aktualizację)
    protected $fillable = ['title', 'artist', 'genre', 'price', 'stock'];
}
