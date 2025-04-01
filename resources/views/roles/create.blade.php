@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create a New Roll</h1>
   
    <form action="{{ route('rolls.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Roll Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter roll name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" placeholder="Enter roll description" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Enter roll price" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Enter quantity" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Roll</button>
    </form>
</div>
@endsection