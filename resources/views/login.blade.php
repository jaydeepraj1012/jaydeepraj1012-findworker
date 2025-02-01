<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <form action="{{ url('/') }}/login" method="post">
        @csrf
        <x-login-form />
    </form>

    <!-- Toastr Notifications -->
    <script>
        @if(Session::has('error'))
                    // toastr.error("{{ Session::get('error') }}", 'Error');
             Swal.fire({
            title: 'Oops..!',
                text: "{{ Session::get('error') }}",
                icon: '{{ Session::get("error") == "Login successful!" ? "success" : "error" }}',
                confirmButtonText: 'Ok'
            });
        @elseif(Session::has('success'))
            toastr.success("{{ Session::get('success') }}", 'Success');
        @endif
    </script>
</body>

</html>
