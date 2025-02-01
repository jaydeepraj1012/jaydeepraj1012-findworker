@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container mx-auto max-w-md p-6">
    <h2 class="text-xl font-bold mb-4">Worker Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <label>Email</label>
            <input class="w-full px-3 py-2 border rounded" name="email" type="email" required>
        </div>
        <div class="mb-4">
            <label>Password</label>
            <input class="w-full px-3 py-2 border rounded" name="password" type="password" required>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded" type="submit">Login</button>
    </form>
</div>
@endsection
