<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    // Kolumny, które można uzupełnić (dodawane przez masową aktualizację)
    protected $fillable = ['order_id', 'product_id', 'quantity', 'subtotal'];
}
