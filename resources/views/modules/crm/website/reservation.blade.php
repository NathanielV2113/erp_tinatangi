<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reservation Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts: Raleway -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Raleway', sans-serif;
      background-color: var(--color-warm-white);
    }

    :root {
      --color-warm-white: #F6F5F3;
      --color-cream: #f3e9dc;
      --color-caramel: #c08552;
      --color-brownie: #5e3023;
      --color-coffee: #895737;
    }
  </style>
</head>

<body class="flex flex-col min-h-screen">
  <!-- HEADER (untouched) -->
  <nav class="sticky top-0 left-0 w-full z-50 p-6 border-b border-gray-300" style="background-color: rgba(94,48,35,0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);">
    <div class="flex justify-between items-center">
      <div class="flex items-center space-x-8">
        <!-- Logo linking to top -->
        <a href="{{ route('tinatangi.home') }}#top">
          <img src="/img/website-imgs/tinatangilogo2.png" alt="Logo" class="h-10 cursor-pointer" />
        </a>
        <!-- Navigation Links -->
        <a href="{{ route('tinatangi.home') }}#top" class="text-white font-medium transition hover:text-white">Home</a>
        <a href="{{ route('tinatangi.home') }}#about" class="text-white text-lg font-medium transition hover:text-white">About</a>
        <a href="{{ route('tinatangi.home') }}#food-menu" class="text-white text-lg font-medium transition hover:text-white">Menu</a>
        <a href="{{ route('tinatangi.home') }}#tinatangi-gallery" class="text-white text-lg font-medium transition hover:text-white">Gallery</a>
      </div>
      <div class="flex items-center space-x-4 border px-5 py-2 rounded-full shadow-md">
        <!-- Store Location with icon -->
        <a href="{{ route('tinatangi.location') }}" class="text-white text-lg font-medium transition hover:text-gray-300">
          <i class="fa-solid fa-location-dot"></i> Store Location
        </a>
        <button id="userLoginBtn" class="flex items-center transition hover:scale-110 transform duration-300 rounded-full p-2 cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5.121 17.804A10 10 0 0118.878 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <span class="ml-2 text-lg">Guest</span>
        </button>
      </div>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow py-12">
    <div class="container mx-auto px-4">
      <div class="bg-[var(--color-cream)] shadow-lg rounded-xl p-8 w-full max-w-lg mx-auto">
        <h2 class="text-3xl font-semibold text-center text-[var(--color-coffee)] mb-8">Reserve Our Place</h2>
        <form action="#" method="POST">
          <div class="mb-6">
            <label for="fullName" class="block text-[var(--color-coffee)] font-medium mb-2">Full Name</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
          </div>

          <div class="mb-6">
            <label for="phone" class="block text-[var(--color-coffee)] font-medium mb-2">Phone</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
          </div>

          <div class="flex mb-6 space-x-4">
            <div class="flex-1">
              <label for="date" class="block text-[var(--color-coffee)] font-medium mb-2">Date</label>
              <input type="date" id="date" name="date" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
            </div>
            <div class="flex-1">
              <label for="time" class="block text-[var(--color-coffee)] font-medium mb-2">Time</label>
              <input type="time" id="time" name="time" required
                class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
            </div>
          </div>

          <div class="flex justify-center">
            <button type="submit"
              class="bg-[var(--color-caramel)] hover:bg-[var(--color-brownie)] text-white px-8 py-3 rounded-lg transition duration-300 ease-in-out shadow-md focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:ring-opacity-50">
              Book Now
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <!-- FOOTER (updated navigation with Feedback, without Contact) -->
  <footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-col lg:flex-row justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center">
          <img src="/img/website-imgs/tinatangilogo2.png" alt="Logo" class="h-12">
        </div>
        <!-- Navigation Links with Feedback added; Contact removed -->
        <div class="mt-4 lg:mt-0">
          <ul class="flex space-x-6">
            <li><a href="{{ route('tinatangi.home') }}#top" class="hover:text-gray-400">Home</a></li>
            <li><a href="{{ route('tinatangi.home') }}#about" class="hover:text-gray-400">About Us</a></li>
            <li><a href="{{ route('tinatangi.menu') }}#food-menu" class="hover:text-gray-400">Menu</a></li>
            <li><a href="{{ route('tinatangi.home') }}#tinatangi-gallery" class="hover:text-gray-400">Gallery</a></li>
            <li><a href="{{ route('tinatangi.faq') }}#faq" class="hover:text-gray-400">FAQ</a></li>
            <li><a href="{{ route('tinatangi.feedback') }}#feedback" class="hover:text-gray-400">Feedback</a></li>
          </ul>
        </div>
        <!-- Contact Information -->
        <div class="mt-4 lg:mt-0 text-center lg:text-right">
          <p class="text-sm">
            123 Main St, Suite 456,<br>
            Dasmariñas, Cavite, Philippines 4114
          </p>
          <p class="text-sm mt-2">
            Email: <a href="mailto:info@tinatangicafe.com" class="hover:text-gray-400">info@tinatangicafe.com</a>
          </p>
        </div>
      </div>
      <div class="flex flex-col lg:flex-row justify-between items-center mt-6 border-t border-gray-700 pt-4">
        <div class="flex space-x-4">
          <a href="https://www.facebook.com/TinatangiCafe" class="hover:text-gray-400"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/tinatangi_cafe?" class="hover:text-gray-400"><i class="fab fa-instagram"></i></a>
          <a href="https://www.tiktok.com/@tinatangi.cafe" class="hover:text-gray-400"><i class="fab fa-tiktok"></i></a>
        </div>
        <p class="text-sm mt-4 lg:mt-0">&copy; 2025 Tinatangi Coffee Shop. All rights reserved.</p>
      </div>
    </div>
  </footer>

</body>

</html>