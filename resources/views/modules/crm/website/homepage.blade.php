<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tinatangi Cafe</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
    }
    html{
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
    button {
      background-color: var(--color-coffee) !important;
      color: white !important;
      transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    button:hover {
      background-color: #7e482f !important;
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body class="bg-white">
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
          <a href="#top">
            <img src="{{ asset('/img/website-imgs/tinatangilogo2.png') }}" alt="Logo" class="h-10 cursor-pointer" />
          </a>
          <!-- Navigation Links -->
          <a href="#about" class="text-white font-medium transition hover:text-white">About</a>
          <a href="#food-menu" class="text-white font-medium transition hover:text-white">Menu</a>
          <a href="#tinatangi-gallery" class="text-white font-medium transition hover:text-white">Gallery</a>
        </div>
        <div class="flex items-center space-x-4 border px-5 py-2 rounded-full shadow-md">
          <!-- Store Location with icon -->
          <a href="{{ route('tinatangi.location') }}" class="text-white font-medium transition hover:text-white">
            <i class="fa-solid fa-location-dot"></i> Store Location
          </a>
          <button id="userLoginBtn" class="flex items-center transition hover:scale-110 transform duration-300 rounded-full p-2 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A10 10 0 0118.878 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <span class="ml-2">Guest</span>
          </button>
        </div>
      </div>
    </nav>
    
    <!-- HERO SECTION -->
    <section class="relative h-screen animate-fadeInUp">
      <div class="absolute inset-0 bg-cover bg-center filter blur-sm" style="background-image: url('/img/website-imgs/landingpage.jpg');"></div>
      <div class="relative z-10 h-full flex flex-col">
        <div class="flex-grow flex items-center px-12 mt-20">
          <div class="md:w-1/2 text-left space-y-6">
            <h1 class="headline text-5xl md:text-6xl font-bold leading-tight" style="font-family: 'Playfair Display', serif; color: var(--color-coffee);">
              Crafted with care, poured with passion
            </h1>
            <p class="text-lg max-w-md" style="color: var(--color-warm-white);">
              Basta lalagay dito kung ano yung more summary ng mga drinks and food items na meron sa menu.
            </p>
            <a href="#" id="seeAllBtn" class="mt-4 px-6 py-3 text-white font-medium rounded-full transition transform duration-300 hover:text-white hover:scale-105 cursor-pointer">
              See All <i class="fa-solid fa-arrow-right ml-2"></i>
            </a>
          </div>
        </div>
      </div>
    </section>  
    
    <!-- ABOUT TINATANGI SECTION -->
    <section id="about" class="py-16 bg-[var(--color-cream)] scroll-mt-24">
      <div class="container mx-auto px-8">
        <h1 class="text-5xl md:text-6xl font-bold text-center" style="font-family: 'Raleway', sans-serif; color: var(--color-caramel);">
          About Tinatangi
        </h1>
        <!-- First Row: Story -->
        <div class="flex flex-col md:flex-row justify-between mt-12">
          <div class="md:w-1/2 flex flex-row gap-2">
            <div class="w-1/2">
              <div class="p-8 shadow-lg">
                <img src="/img/website-imgs/about-image1.png" alt="About Image 1" class="w-full h-80 object-cover">
              </div>
            </div>
            <div class="w-1/2 -mt-8">
              <div class="p-8 shadow-lg">
                <img src="/img/website-imgs/about-image2.jpg" alt="About Image 2" class="w-full h-80 object-cover">
              </div>
            </div>
          </div>
          <div class="md:w-1/2 md:pl-8 flex items-center">
            <p class="text-xl leading-relaxed" style="font-family: 'Raleway', sans-serif; color: var(--color-brownie);">
              Tinatangi Coffee Shop began with a simple yet profound love for coffee. Inspired by a farmer's passion for the beans and the creative vision of a coffee shop owner, our story is one of family, dedication, and craft. What started as a dream of blending tradition with creativity has blossomed into a place where every cup tells a unique story.
            </p>
          </div>
        </div>
        <!-- Second Row: Vision -->
        <div class="flex flex-col md:flex-row justify-between mt-20">
          <div class="md:w-1/2">
            <div class="p-8 shadow-lg">
              <img src="/img/website-imgs/about-image3.png" alt="Vision Image" class="w-full h-96 object-cover">
            </div>
          </div>
          <div class="md:w-1/2 md:pl-8 flex items-center">
            <p class="text-xl leading-relaxed" style="font-family: 'Raleway', sans-serif; color: var(--color-brownie);">
              At Tinatangi Coffee Shop, our vision is to create a welcoming space where every cup of coffee reflects both tradition and creativity. We aim to deliver an exceptional coffee experience, blending rich flavors with innovative ideas, fostering connections, and inspiring moments of joy with each sip.
            </p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- TINATANGI GALLERY SECTION -->
    <section id="tinatangi-gallery" class="py-28" style="background-image: url('/img/website-imgs/download.jpg'); background-size: cover; background-position: center;">
      <div class="container mx-auto px-8">
        <div class="mb-12">
          <div class="flex flex-col md:flex-row justify-between items-center">
            <h2 class="text-4xl md:text-5xl font-bold uppercase" style="font-family: 'Raleway', sans-serif; color: var(--color-coffee);">
              TINATANGI CAPTURES Photo Gallery
            </h2>
            <p class="text-lg md:text-xl mt-4 md:mt-0" style="color: var(--color-caramel);">
              Let us create unforgettable moments together in a welcoming and vibrant environment.
            </p>
          </div>
        </div>
        <div class="relative mx-auto" style="height: 500px; perspective: 1200px;">
          <div id="carousel" class="w-full h-full relative" style="transform-style: preserve-3d;">
            <div class="absolute w-[320px] h-[320px] left-1/2 top-1/2 -ml-[160px] -mt-[160px] bg-white border-2 border-gray-300 rounded-2xl overflow-hidden flex items-center justify-center" style="backface-visibility: hidden; transform: rotateY(0deg) translateZ(450px);">
              <img src="/img/website-imgs/gallery1.jpg" alt="Gallery Image 1" class="w-full h-full object-cover">
            </div>
            <div class="absolute w-[320px] h-[320px] left-1/2 top-1/2 -ml-[160px] -mt-[160px] bg-white border-2 border-gray-300 rounded-2xl overflow-hidden flex items-center justify-center" style="backface-visibility: hidden; transform: rotateY(60deg) translateZ(450px);">
              <img src="/img/website-imgs/gallery2.jpg" alt="Gallery Image 2" class="w-full h-full object-cover">
            </div>
            <div class="absolute w-[320px] h-[320px] left-1/2 top-1/2 -ml-[160px] -mt-[160px] bg-white border-2 border-gray-300 rounded-2xl overflow-hidden flex items-center justify-center" style="backface-visibility: hidden; transform: rotateY(120deg) translateZ(450px);">
              <img src="/img/website-imgs/gallery3.jpg" alt="Gallery Image 3" class="w-full h-full object-cover">
            </div>
            <div class="absolute w-[320px] h-[320px] left-1/2 top-1/2 -ml-[160px] -mt-[160px] bg-white border-2 border-gray-300 rounded-2xl overflow-hidden flex items-center justify-center" style="backface-visibility: hidden; transform: rotateY(180deg) translateZ(450px);">
              <img src="/img/website-imgs/gallery4.jpg" alt="Gallery Image 4" class="w-full h-full object-cover">
            </div>
            <div class="absolute w-[320px] h-[320px] left-1/2 top-1/2 -ml-[160px] -mt-[160px] bg-white border-2 border-gray-300 rounded-2xl overflow-hidden flex items-center justify-center" style="backface-visibility: hidden; transform: rotateY(240deg) translateZ(450px);">
              <img src="/img/website-imgs/gallery5.jpg" alt="Gallery Image 5" class="w-full h-full object-cover">
            </div>
            <div class="absolute w-[320px] h-[320px] left-1/2 top-1/2 -ml-[160px] -mt-[160px] bg-white border-2 border-gray-300 rounded-2xl overflow-hidden flex items-center justify-center" style="backface-visibility: hidden; transform: rotateY(300deg) translateZ(450px);">
              <img src="/img/website-imgs/gallery6.jpg" alt="Gallery Image 6" class="w-full h-full object-cover">
            </div>
          </div>
          <button id="prevBtn" class="absolute top-1/2 -translate-y-1/2 left-4 border-4 border-[#4B0101] text-[#4B0101] w-16 h-16 rounded-full flex items-center justify-center text-2xl cursor-pointer transition-colors duration-300 hover:bg-[#4B0101]/10">
            <i class="fa-sharp fa-solid fa-angle-left"></i>
          </button>
          <button id="nextBtn" class="absolute top-1/2 -translate-y-1/2 right-4 border-4 border-[#4B0101] text-[#4B0101] w-16 h-16 rounded-full flex items-center justify-center text-2xl cursor-pointer transition-colors duration-300 hover:bg-[#4B0101]/10">
            <i class="fa-sharp fa-solid fa-angle-right"></i>
          </button>
        </div>
      </div>
    </section>
    
    <!-- FOOD MENU SECTION -->
    <section id="food-menu" class="py-28" style="background: url('/img/website-imgs/wood.jpg'); background-size: cover; background-position: center;">
      <div class="container mx-auto px-8">
        <div class="text-center mb-12">
          <h2 class="text-4xl md:text-5xl font-bold uppercase" style="font-family: 'Raleway', sans-serif; color: #f3e9dc;">
            Food Menu
          </h2>
          <p class="text-lg md:text-xl mt-4" style="color: #F6F5F3;">
            We have a wide variety of foods, from appetizers to pasta, rice meals, and many more.
          </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
          <!-- Menu Item 1: Chicken Alfredo -->
          <div class="relative overflow-hidden shadow-lg rounded-lg transform transition hover:-translate-y-2 hover:shadow-2xl">
            <img src="/img/website-imgs/chickenalfredo.png" alt="Chicken Alfredo" class="w-full h-80 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-white/70 backdrop-blur-sm p-2">
              <h3 class="text-lg font-semibold" style="color: black;">Chicken Alfredo</h3>
              <p class="text-xs mt-1" style="color: black;">₱245.00</p>
            </div>
          </div>
          <!-- Menu Item 2: Charlie Chan Pasta -->
          <div class="relative overflow-hidden shadow-lg rounded-lg transform transition hover:-translate-y-2 hover:shadow-2xl">
            <img src="/img/website-imgs/charliechan.png" alt="Charlie Chan Pasta" class="w-full h-80 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-white/70 backdrop-blur-sm p-2">
              <h3 class="text-lg font-semibold" style="color: black;">Charlie Chan Pasta</h3>
              <p class="text-xs mt-1" style="color: black;">₱250.00</p>
            </div>
          </div>
          <!-- Menu Item 3: Chicken Truffle Pasta -->
          <div class="relative overflow-hidden shadow-lg rounded-lg transform transition hover:-translate-y-2 hover:shadow-2xl">
            <img src="/img/website-imgs/chicktruffle.png" alt="Chicken Truffle Pasta" class="w-full h-80 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-white/70 backdrop-blur-sm p-2">
              <h3 class="text-lg font-semibold" style="color: black;">Chicken Truffle Pasta</h3>
              <p class="text-xs mt-1" style="color: black;">₱255.00</p>
            </div>
          </div>
          <!-- Menu Item 4: Ube Cake -->
          <div class="relative overflow-hidden shadow-lg rounded-lg transform transition hover:-translate-y-2 hover:shadow-2xl">
            <img src="/img/website-imgs/ubecake.png" alt="Ube Cake" class="w-full h-80 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-white/70 backdrop-blur-sm p-2">
              <h3 class="text-lg font-semibold" style="color: black;">Ube Cake</h3>
              <p class="text-xs mt-1" style="color: black;">₱160.00</p>
            </div>
          </div>
          <!-- Menu Item 5: Carrot Cake -->
          <div class="relative overflow-hidden shadow-lg rounded-lg transform transition hover:-translate-y-2 hover:shadow-2xl">
            <img src="/img/website-imgs/carrotcake.png" alt="Carrot Cake" class="w-full h-80 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-white/70 backdrop-blur-sm p-2">
              <h3 class="text-lg font-semibold" style="color: black;">Carrot Cake</h3>
              <p class="text-xs mt-1" style="color: black;">₱160.00</p>
            </div>
          </div>
          <!-- Menu Item 6: Grilled Pork Steak -->
          <div class="relative overflow-hidden shadow-lg rounded-lg transform transition hover:-translate-y-2 hover:shadow-2xl">
            <img src="/img/website-imgs/porksteak.png" alt="Grilled Pork Steak" class="w-full h-80 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-white/70 backdrop-blur-sm p-2">
              <h3 class="text-lg font-semibold" style="color: black;">Grilled Pork Steak</h3>
              <p class="text-xs mt-1" style="color: black;">₱355.00</p>
            </div>
          </div>
          <!-- Menu Item 7: Caramelized Sriracha Chicken Wings -->
          <div class="relative overflow-hidden shadow-lg rounded-lg transform transition hover:-translate-y-2 hover:shadow-2xl">
            <img src="/img/website-imgs/chickwings.png" alt="Caramelized Sriracha Chicken Wings" class="w-full h-80 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-white/70 backdrop-blur-sm p-2">
              <h3 class="text-lg font-semibold" style="color: black;">Caramelized Sriracha Chicken Wings</h3>
              <p class="text-xs mt-1" style="color: black;">₱235.00</p>
            </div>
          </div>
          <!-- Menu Item 8: Pork Sisig -->
          <div class="relative overflow-hidden shadow-lg rounded-lg transform transition hover:-translate-y-2 hover:shadow-2xl">
            <img src="/img/website-imgs/porksisig.png" alt="Pork Sisig" class="w-full h-80 object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-white/70 backdrop-blur-sm p-2">
              <h3 class="text-lg font-semibold" style="color: black;">Pork Sisig</h3>
              <p class="text-xs mt-1" style="color: black;">₱180.00</p>
            </div>
          </div>
        </div>
        <!-- Centered "See All" Button -->
        <div class="flex justify-center mt-8">
          <a href="{{ route('tinatangi.menu') }}" id="menuSeeAll" class="px-8 py-3 text-white font-medium rounded-full transition transform duration-300 hover:scale-105 cursor-pointer">
            See All <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </section>
  </div>
  
  <!-- MODAL: Login Container -->
  <div id="loginModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-12 w-full max-w-lg mx-4 relative shadow-2xl">
      <button id="closeModalRight" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-3xl cursor-pointer">
        &times;
      </button>
      <div class="text-center space-y-6">
        <h2 class="text-3xl font-bold text-gray-800" style="font-family: 'Playfair Display', serif;">
          Sign In
        </h2>
        <p class="text-lg text-gray-600">
          Welcome, Guest
        </p>
        <hr class="border-t-2 border-gray-200 my-4">
        <p class="text-md text-gray-600">
          Access your account by signing in with Google
        </p>
        <button id="googleLoginBtn" class="mt-4 border border-gray-300 flex items-center justify-center px-6 py-3 rounded-lg transition transform hover:scale-105 hover:bg-gray-100 cursor-pointer mx-auto">
          <img src="/img/website-imgs/googleicon.png" alt="Google Icon" class="h-8 w-8 mr-2">
          <span class="text-gray-800 font-medium">Continue with Google</span>
        </button>
      </div>
    </div>
  </div>
  
  <!-- Floating "Book an event" Button -->
  <a id="floatingEventButton" href="{{ route('tinatangi.reservation') }}" class="fixed bottom-6 right-6 z-50 flex items-center px-5 py-2 rounded-full bg-[var(--color-coffee)] text-white transition transform duration-300 hover:bg-[#7e482f] hover:scale-105 cursor-pointer">
    <i class="fa-solid fa-calendar-days mr-2"></i> Book an event
  </a>
  
  <!-- NEW STORE HOURS SECTION -->
  <section id="store-hours" class="py-16 bg-cover bg-center" style="background-image: url('/img/website-imgs/bg-hours.png');">
    <div class="bg-black bg-opacity-50 py-16">
      <div class="container mx-auto px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white" style="font-family: 'Raleway', sans-serif;">
          Store Hours & Information
        </h2>
        <p class="text-lg text-gray-300 mt-4" style="font-family: 'Raleway', sans-serif;">
          Visit us and enjoy a warm, inviting atmosphere.
        </p>
        <div class="mt-8 flex justify-center space-x-12 text-white">
          <div>
            <h3 class="text-2xl font-semibold" style="font-family: 'Raleway', sans-serif;">Monday - Saturday</h3>
            <p class="mt-2" style="font-family: 'Raleway', sans-serif;">7:00 AM - 7:00 PM</p>
          </div>
          <div>
            <h3 class="text-2xl font-semibold" style="font-family: 'Raleway', sans-serif;">Sunday</h3>
            <p class="mt-2" style="font-family: 'Raleway', sans-serif;">8:00 AM - 5:00 PM</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- PROFESSIONAL FOOTER -->
  <footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-col lg:flex-row justify-between items-center">
        <!-- Logo Section (only the logo image) -->
        <div class="flex items-center">
          <img src="/img/website-imgs/tinatangilogo2.png" alt="Logo" class="h-12">
        </div>
        <!-- Navigation Links with FAQ added -->
        <div class="mt-4 lg:mt-0">
          <ul class="flex space-x-6">
            <li><a href="{{ route('tinatangi.home') }}#top" class="hover:text-gray-400">Home</a></li>
            <li><a href="{{ route('tinatangi.home') }}#about" class="hover:text-gray-400">About Us</a></li>
            <li><a href="{{ route('tinatangi.menu') }}#food-menu" class="hover:text-gray-400">Menu</a></li>
            <li><a href="{{ route('tinatangi.home') }}#tinatangi-gallery" class="hover:text-gray-400">Gallery</a></li>
            <li><a href="#faq" class="hover:text-gray-400">FAQ</a></li>
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
            Email: <a href="mailto:info@tinatangicafe.com" class="hover:text-gray-400">
              info@tinatangicafe.com
            </a>
          </p>
        </div>
      </div>
      <div class="flex flex-col lg:flex-row justify-between items-center mt-6 border-t border-gray-700 pt-4">
        <!-- Social Media Icons -->
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-400"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-twitter"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-instagram"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <!-- Copyright -->
        <p class="text-sm mt-4 lg:mt-0">&copy; 2025 Tinatangi Coffee Shop. All rights reserved.</p>
      </div>
    </div>
  </footer>
  
  <!-- SCRIPTS -->
  <script>
    // Modal functionality
    const userLoginBtn = document.getElementById("userLoginBtn");
    const loginModal = document.getElementById("loginModal");
    const pageContent = document.getElementById("pageContent");
    const closeModalRight = document.getElementById("closeModalRight");
  
    function closeModal() {
      loginModal.classList.add("hidden");
      pageContent.classList.remove("blur-md");
    }
  
    userLoginBtn.addEventListener("click", () => {
      loginModal.classList.remove("hidden");
      pageContent.classList.add("blur-md");
    });
  
    closeModalRight.addEventListener("click", closeModal);
  
    window.addEventListener("click", function(e) {
      if (e.target === loginModal) {
        closeModal();
      }
    });
  
    // 3D Carousel functionality
    let angle = 0;
    const carousel = document.getElementById("carousel");
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");
  
    nextBtn.addEventListener("click", () => {
      angle -= 60;
      carousel.style.transition = "transform 0.5s ease";
      carousel.style.transform = `rotateY(${angle}deg)`;
    });
  
    prevBtn.addEventListener("click", () => {
      angle += 60;
      carousel.style.transition = "transform 0.5s ease";
      carousel.style.transform = `rotateY(${angle}deg)`;
    });
  
    // Auto-rotate carousel slowly
    function autoScroll() {
      carousel.style.transition = "none";
      angle -= 0.02;
      carousel.style.transform = `rotateY(${angle}deg)`;
      requestAnimationFrame(autoScroll);
    }
    requestAnimationFrame(autoScroll);
  
    // Smooth scroll for the 'See All' button in the hero section
    document.getElementById("seeAllBtn").addEventListener("click", function() {
      document.getElementById("about").scrollIntoView({ behavior: "smooth" });
    });
  </script>
</body>
</html>
