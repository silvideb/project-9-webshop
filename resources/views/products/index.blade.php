
    <div>
        <h1>Alle Producten</h1>

        <!-- Lijst van producten -->
        <ul>
            
            @foreach ($products as $product)
            <li>
                    <a href="{{ route('products.edit', $product->id) }}">
                    <div>
                        <p>{{ $product->name }}</p>
                        <p>{{ $product->description }}</p>
                        <p>{{ $product->price }}</p>
                        <p>{{ $product->stock }}</p>
                        @foreach ($product->categories as $category)
                            <p>{{ $category->name }}</p>
                        @endforeach
                    </div>

                        <div>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit product wilt verwijderen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    Verwijder
                                </button>
                            </form>
                        </div>
                </a>

            </li>
        @endforeach
        
        </ul>

            <!-- Create Button -->
            <div>
                <a href="{{ route('products.create') }}">
                    Maak een nieuw product
                </a>
            </div>
    </div>

