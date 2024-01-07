    <!-- resources/views/products/index.blade.php -->

<h1>Lista Produktów</h1>

@foreach($products as $product)
    <div>
        <p><strong>Tytuł:</strong> {{ $product->title }}</p>
        <p><strong>Artysta:</strong> {{ $product->artist }}</p>
        <p><strong>Gatunek:</strong> {{ $product->genre }}</p>
        <p><strong>Cena:</strong> ${{ $product->price }}</p>
        <p><strong>Dostępność:</strong> {{ $product->stock }} szt.</p>
        <hr>
    </div>
@endforeach
