<div>
    <h1>Alle Categorieën</h1>

    <!-- Lijst van categorieën -->
    <ul>
        @foreach ($categories as $category)
        <li>

            <a href="{{ route('categories.edit', $category->id) }}">
            <div>
                <p>{{ $category->name }}</p>

                @foreach ($category->products as $product)
                    <p>{{ $product->name }}</p> 
                @endforeach
            
            </div>

                <div>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze categorie wilt verwijderen?');">
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
            <a href="{{ route('categories.create') }}">
                Maak een nieuwe categorie
            </a>
        </div>
</div>
