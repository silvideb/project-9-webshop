<x-base-layout>
    <div class="text-center mb-6">
        <!-- Centered Heading -->
        <h1>Alle Reviews</h1>
    </div>

    <!-- Lijst van reviews -->
    <div>
        <ul>
            @foreach ($reviews as $review)
            <li>
                <!-- Review and Products -->
                <div>
                    <a href="{{ route('reviews.edit', $review->id) }}">
                        <p>{{ $review->title }}</p>  <!-- Assuming 'name' for reviews -->
                        @foreach ($review->products as $product)
                        <p>{{ $product->name }}</p>
                        @endforeach
                    </a>
                </div>
    
                <!-- Delete Button -->
                <div>
                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze review wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            Verwijder
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>

        <!-- Centered Create Review Button -->
        <div>
            <a href="{{ route('reviews.create') }}">
                Maak een nieuwe review
            </a>
        </div>
    </div>    
</x-base-layout>
