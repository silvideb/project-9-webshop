<x-base-layout>
    <div class="text-center mb-6">
        <!-- Centered Heading -->
        <h1 class="text-3xl font-bold text-gray-800">Alle Categorieën</h1>
    </div>

    <!-- Lijst van categorieën -->
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <ul class="space-y-4">
            @foreach ($categories as $category)
            <li class="flex justify-between items-center bg-gray-100 p-4 rounded-lg shadow-md hover:bg-gray-200 transition duration-200 ease-in-out">
                <!-- Category and Products -->
                <div>
                    <a href="{{ route('categories.edit', $category->id) }}">
                        <p class="text-xl font-semibold text-gray-800">{{ $category->name }}</p>
                        @foreach ($category->products as $product)
                        <p class="text-sm text-gray-600 mt-1">{{ $product->name }}</p>
                        @endforeach
                    </a>
                </div>
    
                <!-- Delete Button -->
                <div>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze categorie wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200 ease-in-out">
                            Verwijder
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>

        <!-- Centered Create Category Button -->
        <div class="mt-6 flex justify-center">
            <a href="{{ route('categories.create') }}" class="bg-green-500 text-white px-6 py-3 rounded-md hover:bg-green-600 transition duration-200 ease-in-out">
                Maak een nieuwe categorie
            </a>
        </div>
    </div>    
</x-base-layout>
