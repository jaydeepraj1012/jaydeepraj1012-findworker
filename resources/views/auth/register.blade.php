@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container mx-auto max-w-md p-6">
    <h2 class="text-xl font-bold mb-4">Worker Sign Up</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
            <label>Name</label>
            <input class="w-full px-3 py-2 border rounded" name="name" type="text" required>
        </div>
        <div class="mb-4">
            <label>Email</label>
            <input class="w-full px-3 py-2 border rounded" name="email" type="email" required>
            <button type="button" id="send-otp" class="bg-blue-600 text-white px-4 py-2 rounded">Send OTP</button>
        </div>
        <div class="mb-4">
            <label>Password</label>
            <input class="w-full px-3 py-2 border rounded" name="password" type="password" required>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded" type="submit">Sign Up</button>
    </form>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function () {
    $('#send-otp').click(function () {
        var email = $('input[name="email"]').val();
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token

        $.ajax({
            url: "{{ route('send.otp') }}",
            method: "POST",
            data: { email: email, _token: csrfToken }, // Include _token in data
            success: function (response) {
                alert(response.message);
            },
            error: function (xhr) {
                console.error('Error:', xhr.responseText);
            }
        });
    });
});
</script>
