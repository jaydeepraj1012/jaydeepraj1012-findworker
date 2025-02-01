@extends('layouts.app')

@section('title', 'FindWorker Login')

@section('content')

<section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">Worker Login & Signup</h1>
        <p class="text-lg mb-8">Access your account or create a new one to find the best job opportunities.</p>
    </div>
</section>

<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="flex justify-center mb-8">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-700 mr-4" id="show-login">
                Login
            </button>
            <button class="bg-blue-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-700" id="show-signup">
                Sign Up
            </button>
        </div>

        <!-- Login Form -->
        <div class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto" id="login-form">
            <h3 class="text-xl font-bold mb-4">Worker Login</h3>
            <form action="{{ route('worker.login') }}" method="post">
              @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="login-email">Email</label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="login-email" name="email" type="email" required/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="login-password">Password</label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="login-password" name="password" type="password" required/>
                </div>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-700" type="submit">
                    Login
                </button>
            </form>
        </div>

        <!-- Signup Form -->
        <div class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto hidden" id="signup-form">
            <h3 class="text-xl font-bold mb-4">Worker Sign Up</h3>
            <form id="signup-form-submit">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="signup-name">Name</label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="signup-name" name="name" type="text" required/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="signup-email">Email</label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="signup-email" name="email" type="email" required/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="signup-password">Password</label>
                    <input class="w-full px-3 py-2 border rounded-lg" id="signup-password" name="password" type="password" required/>
                </div>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-700" type="submit">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Modal for Email Verification -->
<div id="verification-modal" class="modal hidden">
    <div class="modal-content">
        <h3 class="text-xl font-bold mb-4">Enter Verification Code</h3>
        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="verification-code">Verification Code</label>
            <input class="w-full px-3 py-2 border rounded-lg" id="verification-code" name="verification-code" type="text" required/>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-700" type="submit" id="verify-otp">
            Verify
        </button>
        <button type="button" class="text-red-600 mt-2 block" id="close-modal">Cancel</button>
    </div>
</div>

<!-- Loading Indicator -->
<div id="loading-modal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <div class="text-white">Sending OTP...</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('error'))
        Swal.fire({
            title: 'Oops..!',
            text: "{{ Session::get('error') }}",
            icon: '{{ Session::get("error") == "Login successful!" ? "success" : "error" }}',
            confirmButtonText: 'Ok'
        });
    @elseif(Session::has('success'))
        toastr.success("{{ Session::get('success') }}", 'Success');
    @endif

    $(document).ready(function () {
        var otpCode;  // Store OTP code sent to email

        // Show the login form when "Login" is clicked
        $('#show-login').click(function () {
            $('#signup-form').addClass('hidden');
            $('#login-form').show();
        });

        // Show the signup form when "Sign Up" is clicked
        $('#show-signup').click(function () {
            $('#login-form').hide();
            $('#signup-form').removeClass('hidden');
        });

        // Handle Signup form submission
        $('#signup-form-submit').submit(function (e) {
            e.preventDefault(); // Prevent the default form submission

            var email = $('input[name="email"]').val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get CSRF token

            // Show loading indicator
            $('#loading-modal').removeClass('hidden');

            $.ajax({
    url: "{{ route('send.otp') }}",
    method: "POST",
    data: { email: email, _token: csrfToken },
    beforeSend: function () {
        // Optional: Disable the submit button while request is processing
        $('#loading-modal').removeClass('hidden');  // Show loading modal
        $('button[type="submit"]').prop('disabled', true).text('Sending OTP...');
    },
    success: function (response) {
        // Hide loading modal
        $('#loading-modal').addClass('hidden');  // Hide loading modal
        
        // Store OTP for verification
        otpCode = response.otp;
        
        // Show OTP verification modal
        $('#verification-modal').removeClass('hidden');
        
        // Re-enable the submit button
        $('button[type="submit"]').prop('disabled', false).text('Sign Up');

        // Show success message using SweetAlert or toastr
        Swal.fire({
            title: 'Success!',
            text: response.message,
            icon: 'success',
            confirmButtonText: 'OK'
        });

        // Alternatively, using toastr
        // toastr.success(response.message);
    },
    error: function (xhr) {
        // Hide loading modal on error
        $('#loading-modal').addClass('hidden');

        // Handle errors
        let errorMessage = xhr.responseJSON.error || 'An error occurred, please try again.';
        
        // Show error message using SweetAlert or toastr
        Swal.fire({
            title: 'Oops...',
            text: errorMessage,
            icon: 'error',
            confirmButtonText: 'OK'
        });

        // Alternatively, using toastr
        // toastr.error(errorMessage);
        
        // Re-enable the submit button
        $('button[type="submit"]').prop('disabled', false).text('Sign Up');
    }
});

        });

        // Handle OTP Verification
        $('#verify-otp').click(function () {
            var enteredOtp = $('#verification-code').val();

            if (enteredOtp == otpCode) {
                // OTP matches, proceed to save worker data
                var name = $('#signup-name').val();
                var email = $('#signup-email').val();
                var password = $('#signup-password').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: "{{ route('worker.register') }}",  // Your route to save worker info
                    method: "POST",
                    data: { name: name, email: email, password: password, _token: csrfToken },
                    success: function (response) {
                        toastr.success('Registration Successful!');
                        $('#verification-modal').addClass('hidden'); // Close modal
                    },
                    error: function (xhr) {
                        toastr.error('Error: ' + xhr.responseText);
                    }
                });
            } else {
                toastr.error('Invalid OTP!');
            }
        });

        // Hide modal for email verification
        $('#close-modal').click(function () {
            $('#verification-modal').addClass('hidden');
        });
    });
</script>

@endsection
