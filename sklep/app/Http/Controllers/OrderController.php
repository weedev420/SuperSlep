<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\Product;

class OrderController extends Controller
{
    public function create()
    {
        // Pobierz dostępne produkty
        $products = Product::all();
        return view('orders.create', ['products' => $products]);
    }

    public function store()
    {
        // Implementacja składania zamówienia
        // (tworzenie zamówienia, dodawanie pozycji itp.)
    }
}
