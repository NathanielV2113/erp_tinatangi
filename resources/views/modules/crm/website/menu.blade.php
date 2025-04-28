<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tinatangi Drinks Menu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts: Raleway -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Raleway', sans-serif;
    }
    /* Define our custom color variables */
    :root {
      --color-warm-white: #F6F5F3;
      --color-cream: #f3e9dc;
      --color-caramel: #c08552;
      --color-brownie: #5e3023;
      --color-coffee: #895737;
    }

    /* Apply a different background and heading color for the drinks section */
    .drinks-section {
      background-color: var(--color-cream);
    }
    .drinks-section h1,
    .drinks-section h2 {
      color: var(--color-coffee);
    }

    /* Style the individual drink cards */
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-color: var(--color-warm-white);
      border: 1px solid var(--color-caramel);
      border-radius: 0.5rem;
      padding: 1rem;
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    /* Style the lower menu section */
    .menu-section {
      background-color: var(--color-warm-white);
    }
    .menu-section h2 {
      color: var(--color-coffee);
    }
  </style>
</head>
<body class="bg-gray-100">
  <!-- Top Anchor -->
  <div id="top"></div>
  
  <!-- HEADER (untouched) -->
  <nav class="sticky top-0 left-0 w-full z-50 p-6 border-b border-gray-300" 
       style="background-color: rgba(94,48,35,0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);">
    <div class="flex justify-between items-center">
      <div class="flex items-center space-x-8">
        <!-- Logo linking to top -->
        <a href="#top">
          <img src="/img/website-imgs/tinatangilogo2.png" alt="Logo" class="h-10 cursor-pointer" />
        </a>
        <!-- Navigation Links -->
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
  
  <!-- DRINKS SECTION with our aesthetic color (using --color-cream) -->
  <section id="food-menu" class="py-16 px-8 drinks-section">
    <h1 class="text-4xl font-bold text-center mb-12">Our Menu</h1>
    <h2 class="text-3xl font-semibold text-center mb-12">Tinatangi Drinks</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
      <!-- Drink Item: Americano -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-americano.png" alt="Americano" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">AMERICANO</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Water</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">99 | 109</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: White Mocha -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-whitemocha.png" alt="White Mocha" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">WHITE MOCHA</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, White Chocolate, Milk</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">150 | 160</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: Cappuccino -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-cappuccino.png" alt="Cappuccino" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">CAPPUCCINO</h3>
        <p class="text-base text-gray-600 text-center">Espresso, Steamed Milk, Milk Foam</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">130 | 140</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: Dark Mocha -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-tinatangilatte.png" alt="Dark Mocha" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">DARK MOCHA</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Dark Chocolate, Milk</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">150 | 160</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: Café Latte -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-cafelatte.png" alt="Café Latte" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">CAFÉ LATTE</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Milk</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">135 | 145</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: Tinatangi Dirty Cream -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-tinatangidirtycream.png" alt="Tinatangi Dirty Cream" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">TINATANGI DIRTY CREAM</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Caramel, Hazelnut, Heavy Cream, Milk</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">180 Iced</p>
        <p class="text-sm text-gray-500">12oz</p>
      </div>
      <!-- Drink Item: Hazelnut -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-whitecaramelmocha2.png" alt="Hazelnut" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">HAZELNUT</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Hazelnut, Milk</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">140 | 150</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: Vanilla -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-vanilla.png" alt="Vanilla" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">VANILLA</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Vanilla, Milk</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">140 | 150</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: Caramel Mocha -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-caramelmocha.png" alt="Caramel Mocha" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">CARAMEL MOCHA</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Caramel, Chocolate, Milk</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">160 | 170</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: White Caramel Mocha -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-whitecaramelmocha.png" alt="White Caramel Mocha" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">WHITE CARAMEL MOCHA</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Caramel, White Chocolate, Milk</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">150 | 160</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: Caramel Macchiato -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-caramelmacchiato.png" alt="Caramel Macchiato" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">CARAMEL MACCHIATO</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Caramel, Vanilla, Milk</p>
        <p class="text-xl font-semibold mt-2 text-gray-800">150 | 160</p>
        <p class="text-sm text-gray-500">12oz | 16oz</p>
      </div>
      <!-- Drink Item: Triple Threat -->
      <div class="flex flex-col items-center card">
        <img src="/img/website-imgs/coffee-triplethreat.png" alt="Triple Threat" class="w-48 h-48 object-cover rounded-lg shadow-md mb-4" />
        <h3 class="text-xl font-bold mb-2 text-gray-800">TRIPLE THREAT</h3>
        <p class="text-base text-gray-600 text-center">Espresso Shot, Caramel, Vanilla, Milk</p>
        <p class="text-xl font-bold mt-2 text-gray-800">170 Iced</p>
        <p class="text-sm text-gray-500">12oz</p>
      </div>
    </div>
  </section>
  
  <!-- LOWER PART MENU SECTION with aesthetic colors (using --color-warm-white for background and caramel borders for lists) -->
  <section class="py-16 px-8 menu-section">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <!-- Bread & Tinatangi Loaf -->
        <div>
          <h2 class="text-3xl font-semibold text-center mb-6">Bread & Tinatangi Loaf</h2>
          <div class="max-w-2xl mx-auto space-y-4">
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">MUNI-MUNI LOAF</h3>
                <p class="text-sm text-gray-600">Plain Loaf</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱140</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">PADAYON LOAF</h3>
                <p class="text-sm text-gray-600">Chocolate Loaf</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱160</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">PUHON LOAF</h3>
                <p class="text-sm text-gray-600">Cheese Loaf</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱175</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">MATAHOM LOAF</h3>
                <p class="text-sm text-gray-600">Ube Loaf</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱175</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">PLAIN PANDESAL</h3>
              </div>
              <span class="text-xl font-bold text-gray-800">₱70</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">TUNA PANDESAL</h3>
              </div>
              <span class="text-xl font-bold text-gray-800">₱65</span>
            </div>
            <div class="flex justify-between items-center py-3">
              <div>
                <h3 class="text-xl font-bold text-gray-800">CORNED BEEF PANDESAL</h3>
              </div>
              <span class="text-xl font-bold text-gray-800">₱65</span>
            </div>
          </div>
        </div>
        
        <!-- Rice Meals -->
        <div>
          <h2 class="text-3xl font-semibold text-center mb-6">Rice Meals</h2>
          <div class="max-w-xl mx-auto space-y-4">
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">LIEMPO TOCINO</h3>
                <p class="text-sm text-gray-600">Homemade Liempo Tocino with egg and sinangag rice.</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱175</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">DING NA BANGUS</h3>
                <p class="text-sm text-gray-600">Daing na Bangus with sinangag rice and egg.</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱180</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">SIZZLING PORK SISIG</h3>
                <p class="text-sm text-gray-600">Pork sisig with egg and our homemade mayo mix served sizzling with rice.</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱180</span>
            </div>
            <div class="flex justify-between items-center py-3">
              <div>
                <h3 class="text-xl font-bold text-gray-800">BEEF TAPA</h3>
                <p class="text-sm text-gray-600">Special Beef Tapa with sinangag rice and egg.</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱185</span>
            </div>
          </div>
        </div>
        
        <!-- Pasta -->
        <div>
          <h2 class="text-3xl font-semibold text-center mb-6">Pasta</h2>
          <div class="max-w-xl mx-auto space-y-4">
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">BOLOGNESE</h3>
                <p class="text-sm text-gray-600">Spaghetti with homemade Bolognese sauce and parmesan, with toasted bread.</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱225</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">SPANISH SARDINES</h3>
                <p class="text-sm text-gray-600">Spaghetti tossed with seasoned olive oil, Spanish sardines, and basil.</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱235</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">CHICKEN ALFREDO</h3>
                <p class="text-sm text-gray-600">Linguini with homemade Alfredo sauce and grilled chicken.</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱245</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <div>
                <h3 class="text-xl font-bold text-gray-800">CHARLIE CHAN</h3>
                <p class="text-sm text-gray-600">Spaghetti with oriental sauce, shiitake mushrooms &amp; peanuts, topped with spring onions.</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱250</span>
            </div>
            <div class="flex justify-between items-center py-3">
              <div>
                <h3 class="text-xl font-bold text-gray-800">CREAMY PESTO</h3>
                <p class="text-sm text-gray-600">Linguini with homemade pesto and grilled chicken, topped with crushed cashews and parmesan.</p>
              </div>
              <span class="text-xl font-bold text-gray-800">₱265</span>
            </div>
          </div>
        </div>
        
        <!-- Cakes & Pastry -->
        <div>
          <h2 class="text-3xl font-semibold text-center mb-6">Cakes & Pastry</h2>
          <div class="max-w-lg mx-auto space-y-4">
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <span class="text-xl font-bold text-gray-800">RED VELVET CAKE</span>
              <span class="text-xl font-bold text-gray-800">₱155</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <span class="text-xl font-bold text-gray-800">CARROT CAKE</span>
              <span class="text-xl font-bold text-gray-800">₱160</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <span class="text-xl font-bold text-gray-800">STRAWBERRY CHEESECAKE</span>
              <span class="text-xl font-bold text-gray-800">₱165</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <span class="text-xl font-bold text-gray-800">BLUEBERRY CHEESECAKE</span>
              <span class="text-xl font-bold text-gray-800">₱165</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <span class="text-xl font-bold text-gray-800">MATCHA CHEESECAKE</span>
              <span class="text-xl font-bold text-gray-800">₱170</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-[var(--color-caramel)]">
              <span class="text-xl font-bold text-gray-800">OREO CHEESECAKE</span>
              <span class="text-xl font-bold text-gray-800">₱170</span>
            </div>
            <div class="flex justify-between items-center py-3">
              <span class="text-xl font-bold text-gray-800">TRIPLE CHOCOLATE CAKE</span>
              <span class="text-xl font-bold text-gray-800">₱210</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- FOOTER (untouched) -->
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
            Email: <a href="mailto:info@tinatangicafe.com" class="hover:text-gray-400">info@tinatangicafe.com</a>
          </p>
        </div>
      </div>
      <div class="flex flex-col lg:flex-row justify-between items-center mt-6 border-t border-gray-700 pt-4">
        <!-- Social Media Icons -->
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-400">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="hover:text-gray-400">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="hover:text-gray-400">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="hover:text-gray-400">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
        <!-- Copyright -->
        <p class="text-sm mt-4 lg:mt-0">&copy; 2025 Tinatangi Coffee Shop. All rights reserved.</p>
      </div>
    </div>
  </footer>
  
  <!-- SCRIPTS -->
  <script>
    // Modal functionality (if applicable)
    const userLoginBtn = document.getElementById("userLoginBtn");
    const loginModal = document.getElementById("loginModal");
    const pageContent = document.getElementById("pageContent");
    const closeModalRight = document.getElementById("closeModalRight");

    function closeModal() {
      if (loginModal) loginModal.classList.add("hidden");
      if (pageContent) pageContent.classList.remove("blur-md");
    }

    if (userLoginBtn) {
      userLoginBtn.addEventListener("click", () => {
        if (loginModal) loginModal.classList.remove("hidden");
        if (pageContent) pageContent.classList.add("blur-md");
      });
    }

    if (closeModalRight) {
      closeModalRight.addEventListener("click", closeModal);
    }

    window.addEventListener("click", function(e) {
      if (loginModal && e.target === loginModal) {
        closeModal();
      }
    });

    // 3D Carousel functionality (if applicable)
    let angle = 0;
    const carousel = document.getElementById("carousel");
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");

    if (nextBtn) {
      nextBtn.addEventListener("click", () => {
        angle -= 60;
        carousel.style.transition = "transform 0.5s ease";
        carousel.style.transform = `rotateY(${angle}deg)`;
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", () => {
        angle += 60;
        carousel.style.transition = "transform 0.5s ease";
        carousel.style.transform = `rotateY(${angle}deg)`;
      });
    }

    function autoScroll() {
      if (carousel) {
        carousel.style.transition = "none";
        angle -= 0.02;
        carousel.style.transform = `rotateY(${angle}deg)`;
        requestAnimationFrame(autoScroll);
      }
    }
    if (carousel) {
      requestAnimationFrame(autoScroll);
    }

    // Smooth scroll for the "See All" button
    const seeAllBtn = document.getElementById("seeAllBtn");
    if (seeAllBtn) {
      seeAllBtn.addEventListener("click", function() {
        document.getElementById("about").scrollIntoView({ behavior: "smooth" });
      });
    }
  </script>
</body>
</html>
