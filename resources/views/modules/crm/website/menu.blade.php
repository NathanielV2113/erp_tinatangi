@extends('modules.crm.website.layout')
@section('styles')
<style>
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
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);

      border-radius: 0.5rem;
      padding: 1rem;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Style the lower menu section */
    .menu-section {
      background-color: var(--color-warm-white);
    }

    .menu-section h2 {
      color: var(--color-coffee);
    }
</style>
@endsection
@section('content')
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
@endsection