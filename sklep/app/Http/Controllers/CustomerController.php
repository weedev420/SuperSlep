<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    public function showOrders($customerId)
    {
        $customer = Customer::findOrFail($customerId);
        $orders = $customer->orders;
        return view('customers.orders', ['customer' => $customer, 'orders' => $orders]);
    }
}
