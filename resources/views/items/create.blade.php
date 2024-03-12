<!-- resources/views/items/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create New Item')

@section('content')
    <h1>Create New Item</h1>

    <form method="post" action="items">
      @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Item</button>
    </form>
@endsection
