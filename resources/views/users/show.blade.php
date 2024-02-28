@extends('layouts.app')

@section('content')
    <h1>User Details</h1>

    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <!-- Display more user details here -->

    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-secondary">Edit</a>
@endsection
