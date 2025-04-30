@extends('modules.crm.website.layout')
@section('content')
<!-- HERO SECTION -->
<section class="relative h-screen animate-fadeInUp">
      <!-- Changed hero background image -->
      <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/img/website-imgs/hero-bg2.png');"></div>
      <!-- Removed mt-20 so the hero content sits flush with the header -->
      <div class="relative z-10 h-full flex items-center px-12">
        <div class="flex-grow flex flex-col md:flex-row items-center w-full">
          <!-- Left Side: Text Content -->
          <div class="md:w-1/2 text-left space-y-6">
            <h1 class="headline text-5xl md:text-6xl font-bold leading-tight" style="font-family: 'Playfair Display', serif; color: var(--color-brownie);">
              Crafted with care, poured with passion 
            </h1>
            <p class="text-lg max-w-md" style="color: var(--color-coffee);">
              each creation is a testament to the dedication and love that goes into making every detail truly unforgettable.
            </p>
            <button id="seeAllBtn" class="button mt-4 px-6 py-3 text-white font-medium rounded-full transition transform duration-300 hover:text-white hover:scale-105 cursor-pointer">
              See All <i class="fa-solid fa-arrow-right ml-2"></i>
            </button>
          </div>
          <!-- Right Side: Extra Image with adjustments -->
          <div class="md:w-1/2 mt-8 md:mt-0 flex items-center justify-center">
            <img src="/img/website-imgs/extra-bg3.png" 
                 alt="Hero Extra Image" 
                 class="w-3/4  object-center transition-transform duration-700 hover:scale-110 hover:rotate-6"
                 style="margin-top: -100px;"/>
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
          <a href="{{ route('tinatangi.menu') }}" class="button px-8 py-3 text-white font-medium rounded-full transition transform duration-300 hover:scale-105 cursor-pointer">
            See All <i class="fa-solid fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </section>
  </div>
  
  <!-- MODAL: Login Container
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
  -->
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
            <p class="mt-2" style="font-family: 'Raleway', sans-serif;">7:00 AM - 12:00 AM</p>
          </div>
          <div>
            <h3 class="text-2xl font-semibold" style="font-family: 'Raleway', sans-serif;">Sunday</h3>
            <p class="mt-2" style="font-family: 'Raleway', sans-serif;">8:00 AM - 5:00 PM</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
<script>
    // Modal functionality
    // const userLoginBtn = document.getElementById("userLoginBtn");
    // const loginModal = document.getElementById("loginModal");
    const pageContent = document.getElementById("pageContent");
    // const closeModalRight = document.getElementById("closeModalRight");
  
    function closeModal() {
      loginModal.classList.add("hidden");
      pageContent.classList.remove("blur-md");
    }
  
    // userLoginBtn.addEventListener("click", () => {
    //   loginModal.classList.remove("hidden");
    //   pageContent.classList.add("blur-md");
    // });
  
    // closeModalRight.addEventListener("click", closeModal);
  
    // window.addEventListener("click", function(e) {
    //   if (e.target === loginModal) {
    //     closeModal();
    //   }
    // });
  
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
@endsection