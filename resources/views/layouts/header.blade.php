<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a class="text-2xl font-bold text-blue-600" href="#">
            FindWorkers
        </a>
        <nav class="space-x-4">
            <a class="text-gray-600 hover:text-blue-600" href="{{ url('/') }}">Home</a>
            <a class="text-gray-600 hover:text-blue-600" href="{{ url('/about') }}">About</a>
            <a class="text-gray-600 hover:text-blue-600" href="{{ url('/services') }}">Services</a>
            <a class="text-gray-600 hover:text-blue-600" href="{{ url('/contact') }}">Contact</a>
        </nav>

        <div class="space-x-4">
            @if(session('userid'))
                <div class="flex items-center space-x-4">
                    <span class="font-semibold">{{ session('username') }}</span>
                    <a class="bg-red-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-red-700" href="{{ url('/logout') }}">
                        Logout
                    </a>
                </div>
            @else
                <a class="bg-blue-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-700" href="{{url('/login')}}">
                    Admin Login
                </a>
                <a class="bg-blue-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-700" href="{{url('/worker/login')}}">
                    Worker Login
                </a>
            @endif
        </div>
    </div>
</header>
