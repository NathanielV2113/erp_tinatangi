@extends('modules.crm.website.layout')
@section('content')
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
@endsection
@section('scripts')
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
@endsection