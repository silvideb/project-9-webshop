    <!-- Foutmeldingen weergeven -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulier -->
    <form action="/products/update/{{$product->id}}" method="post">
        @csrf

        <div>
            <label for="name">Naam</label>
            <input type="text" name="name" id="name" value="{{$product->name}}">
        </div>

        <div>
            <label for="description">Beschrijving</label>
            <input type="text" name="description" id="description" value="{{$product->description}}">
        </div>

        <div>
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock">
        </div>

        <div>
            <label for="price">Prijs</label>
            <input type="number" name="price" id="price">
        </div>

        <div>
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>    
                @endforeach
            </select>
        </div>

        <button type="submit">
            Bewerken
        </button>
    </form>
