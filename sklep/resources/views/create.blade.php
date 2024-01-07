<!-- resources/views/orders/create.blade.php -->

<h1>Składanie Zamówienia</h1>

<form action="{{ route('orders.store') }}" method="post">
    @csrf
    <label for="product">Wybierz Produkt:</label>
    <select name="product" id="product">
        @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->title }} - ${{ $product->price }}</option>
        @endforeach
    </select>
    <br>
    <label for="quantity">Ilość:</label>
    <input type="number" name="quantity" id="quantity" min="1" value="1">
    <br>
    <button type="submit">Złóż Zamówienie</button>
</form>
