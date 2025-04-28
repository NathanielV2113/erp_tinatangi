<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Feedback - Tinatangi Coffee Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Fonts: Raleway -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet" />
  <!-- Font Awesome CDN (v6.4.0) -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-zO3zz+axAgL4q3e6Wmqkd4XSTzgCix2UUtEpugkL30u9Zl9saIFK+i+y/iFfhlI0GIYa9+MD8wQA7+Fso15+QA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Global Styles */
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
  <!-- HEADER -->
  <nav class="sticky top-0 left-0 w-full z-50 p-6 border-b border-gray-300"
    style="background-color: rgba(94,48,35,0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);">
    <div class="flex justify-between items-center">
      <div class="flex items-center space-x-8">
        <!-- Logo linking to top -->
        <a href="#top">
          <img src="/img/website-imgs/tinatangilogo2.png" alt="Logo" class="h-10 cursor-pointer" />
        </a>
        <!-- Navigation Links -->
        <a href="#about" class="text-white text-lg font-medium transition hover:text-white">About</a>
        <a href="#food-menu" class="text-white text-lg font-medium transition hover:text-white">Menu</a>
        <a href="#tinatangi-gallery" class="text-white text-lg font-medium transition hover:text-white">Gallery</a>
      </div>
      <div class="flex items-center space-x-4 border px-5 py-2 rounded-full shadow-md">
        <!-- Location icon with extra styling to ensure visibility -->
        <i class="fa-solid fa-location-dot" style="font-size: 1.5rem; color: #fff; margin-right: 0.5rem;"></i>
        <a href="{{ route('tinatangi.location') }}" class="text-white text-lg font-medium transition hover:text-gray-300">
          Store Location
        </a>
        <button id="userLoginBtn" class="flex items-center transition hover:scale-110 transform duration-300 rounded-full p-2 cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5.121 17.804A10 10 0 0118.878 17.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <span class="ml-2 text-lg">Guest</span>
        </button>
      </div>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow py-8" id="top">
    <div class="container mx-auto px-4">
      <h1 class="text-4xl font-bold text-center text-[var(--color-coffee)]">Feedback</h1>
      <p class="mt-4 text-center text-gray-700">We value your feedback. Explore the sections below!</p>

      <!-- "Add Feedback" Button at Top-Right -->
      <div class="flex justify-end mt-4">
        <button id="openModal" class="bg-[var(--color-caramel)] text-white px-6 py-2 rounded-lg shadow transition hover:bg-[var(--color-brownie)]">
          Add Feedback
        </button>
      </div>

      <!-- Feedback List: Multiple Rows -->
      <div id="feedbackTable" class="mt-10 space-y-8">
        <!-- Existing Feedback Example -->
        <article class="bg-white p-8 rounded-lg shadow-md">
          <div class="flex items-center mb-4">
            <img class="w-10 h-10 me-4 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Profile Picture">
            <div class="font-medium">
              <p>Jese Leos
                <time datetime="2014-08-16T19:00" class="block text-sm text-gray-500">Joined on August 2014</time>
              </p>
            </div>
          </div>
          <div class="flex items-center mb-2 space-x-1">
            <svg class="w-4 h-4 text-yellow-300 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-yellow-300 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-gray-300 inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
              <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
          </div>
          <p class="text-gray-500">This is my third Invicta Pro Diver. They are fantastic value for money.</p>
        </article>
      </div>
    </div>
  </main>

  <!-- Modal for Add Feedback -->
  <div id="feedbackModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 relative">
      <!-- Close Button with X -->
      <button id="closeModal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl focus:outline-none">
        &times;
      </button>
      <div class="border-b pb-3 mb-4">
        <h3 class="text-2xl font-bold text-[var(--color-coffee)]">Add Feedback</h3>
      </div>
      <div>
        <!-- Modal Form (Email removed; star rating added) -->
        <form id="feedbackForm" class="space-y-4">
          <div>
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name"
              class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:ring-[var(--color-caramel)]" required>
          </div>
          <div>
            <label class="block text-gray-700">Rating</label>
            <div class="flex items-center space-x-1">
              <!-- Hidden input to store the selected rating -->
              <input type="hidden" id="rating" name="rating" value="0" required>
              <svg data-value="1" class="w-6 h-6 text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927C9.324 2.274 10.677 2.274 10.951 2.927l1.286 3.97a.75.75 0 00.71.517l4.373.636c.73.106 1.02.999.492 1.514l-3.165 3.088a.75.75 0 00-.216.664l.748 4.363c.125.73-.64 1.285-1.297.94L10 15.347l-3.912 2.057c-.657.345-1.422-.21-1.297-.94l.748-4.363a.75.75 0 00-.216-.664L2.102 9.664c-.528-.515-.238-1.408.492-1.514l4.373-.636a.75.75 0 00.71-.517l1.286-3.97z" />
              </svg>
              <svg data-value="2" class="w-6 h-6 text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927C9.324 2.274 10.677 2.274 10.951 2.927l1.286 3.97a.75.75 0 00.71.517l4.373.636c.73.106 1.02.999.492 1.514l-3.165 3.088a.75.75 0 00-.216.664l.748 4.363c.125.73-.64 1.285-1.297.94L10 15.347l-3.912 2.057c-.657.345-1.422-.21-1.297-.94l.748-4.363a.75.75 0 00-.216-.664L2.102 9.664c-.528-.515-.238-1.408.492-1.514l4.373-.636a.75.75 0 00.71-.517l1.286-3.97z" />
              </svg>
              <svg data-value="3" class="w-6 h-6 text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927C9.324 2.274 10.677 2.274 10.951 2.927l1.286 3.97a.75.75 0 00.71.517l4.373.636c.73.106 1.02.999.492 1.514l-3.165 3.088a.75.75 0 00-.216.664l.748 4.363c.125.73-.64 1.285-1.297.94L10 15.347l-3.912 2.057c-.657.345-1.422-.21-1.297-.94l.748-4.363a.75.75 0 00-.216-.664L2.102 9.664c-.528-.515-.238-1.408.492-1.514l4.373-.636a.75.75 0 00.71-.517l1.286-3.97z" />
              </svg>
              <svg data-value="4" class="w-6 h-6 text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927C9.324 2.274 10.677 2.274 10.951 2.927l1.286 3.97a.75.75 0 00.71.517l4.373.636c.73.106 1.02.999.492 1.514l-3.165 3.088a.75.75 0 00-.216.664l.748 4.363c.125.73-.64 1.285-1.297.94L10 15.347l-3.912 2.057c-.657.345-1.422-.21-1.297-.94l.748-4.363a.75.75 0 00-.216-.664L2.102 9.664c-.528-.515-.238-1.408.492-1.514l4.373-.636a.75.75 0 00.71-.517l1.286-3.97z" />
              </svg>
              <svg data-value="5" class="w-6 h-6 text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927C9.324 2.274 10.677 2.274 10.951 2.927l1.286 3.97a.75.75 0 00.71.517l4.373.636c.73.106 1.02.999.492 1.514l-3.165 3.088a.75.75 0 00-.216.664l.748 4.363c.125.73-.64 1.285-1.297.94L10 15.347l-3.912 2.057c-.657.345-1.422-.21-1.297-.94l.748-4.363a.75.75 0 00-.216-.664L2.102 9.664c-.528-.515-.238-1.408.492-1.514l4.373-.636a.75.75 0 00.71-.517l1.286-3.97z" />
              </svg>
            </div>
          </div>
          <div>
            <label for="feedback" class="block text-gray-700">Feedback</label>
            <textarea id="feedback" name="feedback" rows="4" placeholder="Your feedback..."
              class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring focus:ring-[var(--color-caramel)]" required></textarea>
          </div>
          <div class="flex justify-end">
            <button type="submit" class="bg-[var(--color-caramel)] text-white px-6 py-2 rounded-lg transition hover:bg-[var(--color-brownie)]">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="bg-gray-900 text-white py-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-col lg:flex-row justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center">
          <img src="/img/website-imgs/tinatangilogo2.png" alt="Logo" class="h-12">
        </div>
        <!-- Navigation Links -->
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
        <div class="flex space-x-4">
          <a href="#" class="hover:text-gray-400"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-twitter"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-instagram"></i></a>
          <a href="#" class="hover:text-gray-400"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <p class="text-sm mt-4 lg:mt-0">&copy; 2025 Tinatangi Coffee Shop. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- JavaScript for Modal, Star Rating, and Dynamic Feedback -->
  <script>
    // Modal controls
    const openModalBtn = document.getElementById("openModal");
    const feedbackModal = document.getElementById("feedbackModal");
    const closeModalBtn = document.getElementById("closeModal");
    const feedbackForm = document.getElementById("feedbackForm");

    openModalBtn.addEventListener("click", () => {
      feedbackModal.classList.remove("hidden");
    });

    closeModalBtn.addEventListener("click", () => {
      feedbackModal.classList.add("hidden");
    });

    // Star Rating in Modal
    const starIcons = document.querySelectorAll('#feedbackModal [data-value]');
    const ratingInput = document.getElementById("rating");

    starIcons.forEach((star) => {
      star.addEventListener("click", function() {
        const selectedRating = parseInt(this.getAttribute("data-value"));
        ratingInput.value = selectedRating;
        // Update star colors based on the selected rating
        starIcons.forEach((s) => {
          if (parseInt(s.getAttribute("data-value")) <= selectedRating) {
            s.classList.remove("text-gray-300");
            s.classList.add("text-yellow-400");
          } else {
            s.classList.remove("text-yellow-400");
            s.classList.add("text-gray-300");
          }
        });
      });
    });

    // Handle form submission to add a new feedback container dynamically
    feedbackForm.addEventListener("submit", function(e) {
      e.preventDefault(); // Prevent default form submission

      // Get form values
      const name = document.getElementById("name").value;
      const rating = parseInt(document.getElementById("rating").value) || 0;
      const feedbackText = document.getElementById("feedback").value;

      // Build the star rating HTML for display
      let starRatingIcons = "";
      for (let i = 1; i <= 5; i++) {
        if (i <= rating) {
          starRatingIcons += `<svg class="w-4 h-4 inline text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                              </svg>`;
        } else {
          starRatingIcons += `<svg class="w-4 h-4 inline text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                              </svg>`;
        }
      }

      // Create a new article element for the new feedback
      const newFeedback = document.createElement("article");
      newFeedback.className = "bg-white p-8 rounded-lg shadow-md";
      newFeedback.innerHTML = `
        <div class="flex items-center mb-4">
          <img class="w-10 h-10 me-4 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Profile Picture">
          <div class="font-medium">
            <p>${name} <time datetime="${new Date().toISOString()}" class="block text-sm text-gray-500">Just now</time></p>
          </div>
        </div>
        <div class="flex items-center mb-2 space-x-1">
          ${starRatingIcons}
        </div>
        <p class="text-gray-500">${feedbackText}</p>
      `;

      // Append the new feedback container to the feedback table
      const feedbackTable = document.getElementById("feedbackTable");
      feedbackTable.append(newFeedback);

      // Reset the form and star rating UI
      feedbackForm.reset();
      ratingInput.value = 0;
      starIcons.forEach(s => {
        s.classList.remove("text-yellow-400");
        s.classList.add("text-gray-300");
      });

      // Close the modal
      feedbackModal.classList.add("hidden");
    });
  </script>
</body>

</html>