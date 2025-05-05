<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tinatangi Cafe</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
  @include('sweetalert2::index')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts: Inter, Playfair Display, and Raleway -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Playfair+Display:wght@700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet" />
  <style>
    /* Custom Color Variables */
    :root {
      --color-warm-white: #F6F5F3;
      --color-cream: #f3e9dc;
      --color-caramel: #c08552;
      --color-brownie: #5e3023;
      --color-coffee: #895737;
    }

    /* Default font and margin reset */
    body {
      font-family: 'Raleway', sans-serif;
      margin: 0;
      transition: 0.5s all ease;
    }

    html {
      scroll-behavior: smooth;
    }

    /* FadeInUp Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fadeInUp {
      animation: fadeInUp 1.5s ease-out forwards;
    }

    /* Global Button Styling */
    .button {
      background-color: var(--color-coffee) !important;
      color: white !important;
      transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .button:hover {
      background-color: #7e482f !important;
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }

    #exclude-button {
      background-color: transparent;
    }
  </style>
  @yield('styles')
</head>

<body class="bg-white">
  @if(session('success'))
  <script>
    Swal.fire({
      title: "{{ session('success') }}",
      icon: 'success',
      confirmButtonText: 'Okay'
    });
  </script>
  @endif
  <!-- Top Anchor for Logo Click -->
  <div id="top"></div>

  <!-- Main Page Content Container -->
  <div id="pageContent">
    <!-- Sticky Header with Blurry Background -->
    <nav class="sticky top-0 left-0 w-full z-50 p-6 border-b border-gray-300"
      style="background-color: rgba(94,48,35,0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);">
      <div class="flex justify-between items-center">
        <div class="flex items-center space-x-8">
          <!-- Logo linking to top -->
          <a href="{{ route('tinatangi.home') }}#top">
            <img src="{{ asset('/img/website-imgs/tinatangilogo2.png') }}" alt="Logo" class="h-10 cursor-pointer" />
          </a>
          <!-- Navigation Links -->
          <a href="{{ route('tinatangi.home') }}#top" class="text-white font-medium transition hover:text-white">Home</a>
          <a href="{{ route('tinatangi.home') }}#about" class="text-white font-medium transition hover:text-white">About</a>
          <a href="{{ route('tinatangi.home') }}#food-menu" class="text-white font-medium transition hover:text-white">Menu</a>
          <a href="{{ route('tinatangi.home') }}#tinatangi-gallery" class="text-white font-medium transition hover:text-white">Gallery</a>
        </div>
        <div class="flex items-center space-x-4 border px-5 py-2 rounded-full shadow-md">
          <!-- Store Location with icon -->
          
          @if(Auth::check())
          <a href="{{ route('tinatangi.location.auth') }}" class="text-white font-medium transition hover:text-white">
            <i class="fa-solid fa-location-dot"></i> Store Location
          </a>
          <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
          </form>

          <button onclick="confirmLogout()" class="text-white flex items-center transition hover:scale-110 transform duration-300 rounded-full p-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A10 10 0 0118.878 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="ml-2">Logout</span>
          </button>
          @else
          <a href="{{ route('tinatangi.location') }}" class="text-white font-medium transition hover:text-white">
            <i class="fa-solid fa-location-dot"></i> Store Location
          </a>
          <a href="{{ route('login') }}" class="text-white flex items-center transition hover:scale-110 transform duration-300 rounded-full p-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5.121 17.804A10 10 0 0118.878 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="ml-2">Login</span>
          </a>
          @endif

        </div>
      </div>
    </nav>

    @yield('content')

    <!-- PROFESSIONAL FOOTER -->
    <footer class="bg-gray-900 text-white py-8">
      <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-between items-center">
          <!-- Logo Section (only the logo image) -->
          <div class="flex items-center">
            <img src="/img/website-imgs/tinatangilogo2.png" alt="Logo" class="h-12">
          </div>
          <!-- Navigation Links with FAQ added -->
           @if (Auth::check())
           <div class="mt-4 lg:mt-0">
            <ul class="flex space-x-6">
              <li><a href="{{ route('tinatangi.home') }}#top" class="hover:text-gray-400">Home</a></li>
              <li><a href="{{ route('tinatangi.home') }}#about" class="hover:text-gray-400">About Us</a></li>
              <li><a href="{{ route('tinatangi.menu.auth') }}" class="hover:text-gray-400">Menu</a></li>
              <li><a href="{{ route('tinatangi.home') }}#tinatangi-gallery" class="hover:text-gray-400">Gallery</a></li>
              <li><a href="{{ route('tinatangi.faq.auth') }}" class="hover:text-gray-400">FAQ</a></li>
              <li><a href="{{ route('tinatangi.feedback') }}" class="hover:text-gray-400">Feedback</a></li>
            </ul>
          </div>
           @else
           <div class="mt-4 lg:mt-0">
            <ul class="flex space-x-6">
              <li><a href="{{ route('tinatangi.home') }}#top" class="hover:text-gray-400">Home</a></li>
              <li><a href="{{ route('tinatangi.home') }}#about" class="hover:text-gray-400">About Us</a></li>
              <li><a href="{{ route('tinatangi.menu') }}" class="hover:text-gray-400">Menu</a></li>
              <li><a href="{{ route('tinatangi.home') }}#tinatangi-gallery" class="hover:text-gray-400">Gallery</a></li>
              <li><a href="{{ route('tinatangi.faq') }}" class="hover:text-gray-400">FAQ</a></li>
              <li><a href="{{ route('tinatangi.feedback') }}" class="hover:text-gray-400">Feedback</a></li>
            </ul>
          </div>
           @endif
          
          <!-- Contact Information -->
          <div class="mt-4 lg:mt-0 text-center lg:text-right">
            <p class="text-sm">
              123 Main St, Suite 456,<br>
              Dasmariñas, Cavite, Philippines 4114
            </p>
            <p class="text-sm mt-2">
              Email: <a href="mailto:info@tinatangicafe.com" class="hover:text-gray-400">
                info@tinatangicafe.com
              </a>
            </p>
          </div>
        </div>
        <div class="flex flex-col lg:flex-row justify-between items-center mt-6 border-t border-gray-700 pt-4">
          <!-- Social Media Icons -->
          <div class="flex space-x-4">
            <a href="https://www.facebook.com/TinatangiCafe" class="hover:text-gray-400"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/tinatangi_cafe?" class="hover:text-gray-400"><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@tinatangi.cafe" class="hover:text-gray-400"><i class="fab fa-tiktok"></i></a>
          </div>
          <!-- Copyright -->
          <p class="text-sm mt-4 lg:mt-0">&copy; 2025 Tinatangi Coffee Shop. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <!-- SCRIPTS -->
    <script>
      function confirmLogout() {
        Swal.fire({
          title: 'Are you sure you want to logout?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes',
          cancelButtonText: 'Cancel'
        }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById("logout-form").submit();
          }
        });
      }
    </script>
    @yield('scripts')

</body>

</html>