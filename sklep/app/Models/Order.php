<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Kolumny, które można uzupełnić (dodawane przez masową aktualizację)
    protected $fillable = ['customer_id', 'order_date', 'total_amount'];
}
