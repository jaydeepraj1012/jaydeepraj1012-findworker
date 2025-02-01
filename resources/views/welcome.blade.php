@extends('layouts.app')

@section('title', 'Welcome to FindWorkers')

@section('content')

<section class="bg-blue-600 text-white py-20">
  <div class="container mx-auto px-4 text-center">
    <h1 class="text-4xl font-bold mb-4">
      Find the Best Workers for Your Needs
    </h1>
    <p class="text-lg mb-8">
      Connecting you with skilled professionals in various fields.
    </p>
    <a class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold" href="#">
      Get Started
    </a>
  </div>
</section>
<section class="py-20">
  <div class="container mx-auto px-4"> 

    <h2 class="text-3xl font-bold text-center mb-12">
      Our Services
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Construction workers on a building site" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/5zU14SQ7VVZrCB8TDhuInNRsJvPvyN2ClvL6RwqSV9ClkzBF.jpg" width="100" />
        <h3 class="text-xl font-bold mb-2">
          Construction
        </h3>
        <p class="text-gray-600">
          Find skilled construction workers for your building projects.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Plumber fixing a sink" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/fPS4WLYdjBWsCKyXd4vem2tcfaxjlZGOolnSNfUcGX11K5cQB.jpg" width="100" />
        <h3 class="text-xl font-bold mb-2">
          Plumbing
        </h3>
        <p class="text-gray-600">
          Hire experienced plumbers for all your plumbing needs.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Electrician working on a circuit board" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/dca7bwgFjDLxHpORcSG7LWifNlwje1DdMnblHpoNFbTrSOHUA.jpg" width="100" />
        <h3 class="text-xl font-bold mb-2">
          Electrical
        </h3>
        <p class="text-gray-600">
          Get professional electricians for your electrical projects.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Painter painting a wall" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/OfyO9Z33YCymIameeurT1nnSeKENB5arTC6m5DCBcyftTy5gC.jpg" width="100" />
        <h3 class="text-xl font-bold mb-2">
          Painting
        </h3>
        <p class="text-gray-600">
          Professional painters for your home and office projects.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Carpenter working on wood" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/vrPHxnU0RUr7G9euGgSzFtpppFzJhLXmF3FHuqkuI3aLJnDKA.jpg" width="100" />
        <h3 class="text-xl font-bold mb-2">
          Carpentry
        </h3>
        <p class="text-gray-600">
          Skilled carpenters for custom furniture and woodwork.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Cleaner cleaning a window" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/RrgFlyYnSk7REBCJrinIFU0vElfofhkkSJleQZANZ5QykcOoA.jpg" width="100" />
        <h3 class="text-xl font-bold mb-2">
          Cleaning
        </h3>
        <p class="text-gray-600">
          Reliable cleaning services for homes and offices.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Gardener working in a garden" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/d0CgW25MuG4oJJAzje5UmX0IPRwIeBvK1amYu1jnIS3xSOHUA.jpg" width="100" />
        <h3 class="text-xl font-bold mb-2">
          Gardening
        </h3>
        <p class="text-gray-600">
          Expert gardeners to maintain and beautify your garden.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Mechanic working on a car engine" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/qgjOrBBWeoT9bCoEN6AnQwtHHaGmASpaXRR7IRR1iV0PJnDKA.jpg" width="100" />
        <h3 class="text-xl font-bold mb-2">
          Mechanic
        </h3>
        <p class="text-gray-600">
          Professional mechanics for vehicle repair and maintenance.
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="IT technician working on a computer" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/77ElV1Q96Z7VBV0Afo0W6z1tO7cEezAB2APc1rcgVOkekcOoA.jpg" width="100" />
        <h3 class="text-xl font-bold mb-2">
          IT Support
        </h3>
        <p class="text-gray-600">
          Reliable IT support for your technical needs.
        </p>
      </div>
    </div>
  </div>
</section>
<section class="bg-gray-200 py-20">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">
      Top Workers
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Portrait of John Doe, a top construction worker" class="w-24 h-24 rounded-full mx-auto mb-4" height="96" src="https://storage.googleapis.com/a1aa/image/LALFZh7eqL0LKytWssPPcXsS6ZvveHXakQ98js4LaoFkSOHUA.jpg" width="96" />
        <h3 class="text-xl font-bold mb-2">
          John Doe
        </h3>
        <p class="text-gray-600">
          Construction Worker
        </p>
        <p class="text-yellow-500">
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star-half-alt">
          </i>
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Portrait of Jane Smith, a top plumber" class="w-24 h-24 rounded-full mx-auto mb-4" height="96" src="https://storage.googleapis.com/a1aa/image/LajEfCh1chR9ACdwgJgKnn8bRlODUqhENl8xgKwujBUYJnDKA.jpg" width="96" />
        <h3 class="text-xl font-bold mb-2">
          Jane Smith
        </h3>
        <p class="text-gray-600">
          Plumber
        </p>
        <p class="text-yellow-500">
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Portrait of Mike Johnson, a top electrician" class="w-24 h-24 rounded-full mx-auto mb-4" height="96" src="https://storage.googleapis.com/a1aa/image/sjKa4TXtXfQRf0lJGiSZj1zv7OP5728XIHWfcj2lsysRlcOoA.jpg" width="96" />
        <h3 class="text-xl font-bold mb-2">
          Mike Johnson
        </h3>
        <p class="text-gray-600">
          Electrician
        </p>
        <p class="text-yellow-500">
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star-half-alt">
          </i>
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Portrait of Emily Davis, a top painter" class="w-24 h-24 rounded-full mx-auto mb-4" height="96" src="https://storage.googleapis.com/a1aa/image/CXHngn1jWe3sSCd1xn1PE0vSw5Y2dIrIxje4IA5U7nZnSOHUA.jpg" width="96" />
        <h3 class="text-xl font-bold mb-2">
          Emily Davis
        </h3>
        <p class="text-gray-600">
          Painter
        </p>
        <p class="text-yellow-500">
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Portrait of Robert Brown, a top carpenter" class="w-24 h-24 rounded-full mx-auto mb-4" height="96" src="https://storage.googleapis.com/a1aa/image/MTLQ8HaAk9L1PZArHrrfGLadKXUB80ezyaeAD5su9b13kcOoA.jpg" width="96" />
        <h3 class="text-xl font-bold mb-2">
          Robert Brown
        </h3>
        <p class="text-gray-600">
          Carpenter
        </p>
        <p class="text-yellow-500">
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star-half-alt">
          </i>
        </p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <img alt="Portrait of Lisa White, a top cleaner" class="w-24 h-24 rounded-full mx-auto mb-4" height="96" src="https://storage.googleapis.com/a1aa/image/khafof1e56OpGILRaUwOQCpCUB5im8ClPULPWU6ecCuNK5cQB.jpg" width="96" />
        <h3 class="text-xl font-bold mb-2">
          Lisa White
        </h3>
        <p class="text-gray-600">
          Cleaner
        </p>
        <p class="text-yellow-500">
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
          <i class="fas fa-star">
          </i>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="py-20">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">
      Customer Reviews
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-gray-600 mb-4">
          "John Doe did an amazing job on our new house. Highly recommend his services!"
        </p>
        <div class="flex items-center">
          <img alt="Portrait of Sarah Connor, a satisfied customer" class="w-12 h-12 rounded-full mr-4" height="48" src="https://storage.googleapis.com/a1aa/image/rIQMM7YPEpq3JJQIoaHTNLfrqteUyRONiYQyzlh3WUSvSOHUA.jpg" width="48" />
          <div>
            <h4 class="text-lg font-bold">
              Sarah Connor
            </h4>
            <p class="text-gray-600">
              Homeowner
            </p>
          </div>
        </div>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-gray-600 mb-4">
          "Jane Smith fixed our plumbing issues quickly and efficiently. Great service!"
        </p>
        <div class="flex items-center">
          <img alt="Portrait of John Wick, a satisfied customer" class="w-12 h-12 rounded-full mr-4" height="48" src="https://storage.googleapis.com/a1aa/image/YGKXlaskYWanF9OmItCIVogZxvhxKSP9lWBFwxlixixlkzBF.jpg" width="48" />
          <div>
            <h4 class="text-lg font-bold">
              John Wick
            </h4>
            <p class="text-gray-600">
              Homeowner
            </p>
          </div>
        </div>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-gray-600 mb-4">
          "Mike Johnson is the best electrician we've ever hired. Very professional."
        </p>
        <div class="flex items-center">
          <img alt="Portrait of Ellen Ripley, a satisfied customer" class="w-12 h-12 rounded-full mr-4" height="48" src="https://storage.googleapis.com/a1aa/image/owWg2HzlBfQIDyvurID2s9aF18A5S9h0iWCC7PZ0aezhSOHUA.jpg" width="48" />
          <div>
            <h4 class="text-lg font-bold">
              Ellen Ripley
            </h4>
            <p class="text-gray-600">
              Business Owner
            </p>
          </div>
        </div>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-gray-600 mb-4">
          "Emily Davis painted our office beautifully. Highly skilled and professional."
        </p>
        <div class="flex items-center">
          <img alt="Portrait of Tony Stark, a satisfied customer" class="w-12 h-12 rounded-full mr-4" height="48" src="https://storage.googleapis.com/a1aa/image/fCA8W2dGPSz0YqUQQz793P3xGQNmzF99iYyBwEX2RTdOJnDKA.jpg" width="48" />
          <div>
            <h4 class="text-lg font-bold">
              Tony Stark
            </h4>
            <p class="text-gray-600">
              Business Owner
            </p>
          </div>
        </div>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-gray-600 mb-4">
          "Robert Brown crafted a beautiful custom table for us. Excellent work!"
        </p>
        <div class="flex items-center">
          <img alt="Portrait of Bruce Wayne, a satisfied customer" class="w-12 h-12 rounded-full mr-4" height="48" src="https://storage.googleapis.com/a1aa/image/VfBF7FWMh4wrK6YFn4SBlBGJisYPKHueeSkiSGkRwuHNlcOoA.jpg" width="48" />
          <div>
            <h4 class="text-lg font-bold">
              Bruce Wayne
            </h4>
            <p class="text-gray-600">
              Homeowner
            </p>
          </div>
        </div>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="text-gray-600 mb-4">
          "Lisa White's cleaning service is top-notch. Our office has never been cleaner."
        </p>
        <div class="flex items-center">
          <img alt="Portrait of Diana Prince, a satisfied customer" class="w-12 h-12 rounded-full mr-4" height="48" src="https://storage.googleapis.com/a1aa/image/IGKDDEzK6nrNCpHgKHfa0cyGovExfisEMq4ugeCFnmUUlcOoA.jpg" width="48" />
          <div>
            <h4 class="text-lg font-bold">
              Diana Prince
            </h4>
            <p class="text-gray-600">
              Business Owner
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
@endsection