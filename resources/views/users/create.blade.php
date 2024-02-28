@extends('layouts.app')

@section('content')
    <h1>Create User</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <!-- Add more form fields here -->

        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
@endsection
