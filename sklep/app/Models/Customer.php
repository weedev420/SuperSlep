<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Kolumny, które można uzupełnić (dodawane przez masową aktualizację)
    protected $fillable = ['name', 'email', 'password', 'address'];
}
