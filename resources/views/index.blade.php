@extends('layout')

@section('title','Grocery Item')

@section('layout')
<div class="container mt-4">
        <h2>Grocery List</h2>
        <a href="{{ route('create') }}" class="btn btn-tertiary mb-3 bg-success p-2 text-white bg-opacity-75">Add New Item</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->itemname }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection