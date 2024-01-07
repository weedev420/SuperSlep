<!-- resources/views/customers/orders.blade.php -->

<h1>Zamówienia Klienta: {{ $customer->name }}</h1>

@foreach($orders as $order)
    <div>
        <p><strong>Data Zamówienia:</strong> {{ $order->order_date }}</p>
        <p><strong>Łączna Kwota:</strong> ${{ $order->total_amount }}</p>
        <hr>
    </div>
@endforeach
