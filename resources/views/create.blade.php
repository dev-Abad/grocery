@extends('layout')

@section('title','Add Grocery Item')

@section('layout')
<div class="container mt-4">
        <h2>Add New Item</h2>
        <form method="post" action="{{ route('store') }}">
            @csrf
            <div class="form-group">
                <label for="itemname">Item Name:</label>
                <input type="text" class="form-control" id="itemname" name="itemname">
            </div><br>
            <div class="form-group">
                <label>Category: </label></br>
                    <select class="form-control" id="category" name="category">
                    <option value="select"></option>
                    <option value="Drink">Drink</option>
                    <option value="Meat">Meat</option>
                    <option value="Bread">Bread</option>
                    <option value="Fruit">Fruit</option>
                    <option value="Grain">Grain</option>
                    <option value="Dairy Products">Dairy Product</option>
                    <option value="Snacks">Snacks</option>
                    <option value="Fruit">Fruit</option>
                    <option value="Produce">Produce</option>
                    <option value="Lunch Meat">Lunch Meat</option>
                    <option value="Vegetables">Vegetables</option>
                    <option value="Food Freezing">Food Freezing</option>
                    <option value="Pasta">Pasta</option>
                    <option value="Dried Fruit">Dried Fruit</option>
                    </select><br>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
            </div><br>
            <button type="submit" class="btn btn-tertiary mb-3 text-bg-warning">Add Item</button>
            <a href="{{ route('index') }}" class="btn btn-tertiary mb-3 text-bg-warning" id="cancelBtn">Cancel</a>
        </form>
    </div>

    <script>
        document.getElementById('cancelBtn').addEventListener('click', function(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to cancel?')) {
                window.location.href = this.getAttribute('href');
            }
        });
    </script>   
@endsection