@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categories.store') }}" method="post">
    @csrf

    <div>
        <label for="name">Naam</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="product_id">Product</label>
        <select name="product_id" id="product_id">
            @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>    
            @endforeach
        </select>
    </div>

    <button type="submit">
        Toevoegen
    </button>
</form>
<br>
