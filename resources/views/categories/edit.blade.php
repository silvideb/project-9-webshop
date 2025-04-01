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
<form action="/categories/update/{{$category->id}}" method="post">
    @csrf

    <div>
        <label for="name">Naam</label>
        <input type="text" name="name" id="name" value="{{$category->name}}">
    </div>

    <div>
        <label for="product_id">Product</label>
        <select name="product_id" id="product_id">
            @foreach ($category->products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>    
            @endforeach
        </select>
    </div>

    <button type="submit">
        Bewerken
    </button>
</form>
