@extends('modules.crm.website.layout')

@section('content')
<!-- MAIN CONTENT -->
<main class="flex-grow py-12">
    <div class="container mx-auto px-4">
      <div class="bg-[var(--color-cream)] shadow-lg rounded-xl p-8 w-full max-w-lg mx-auto">
        <!-- Updated form header and fields -->
        <h2 class="text-3xl font-semibold text-center text-[var(--color-coffee)] mb-8">Book A Table</h2>
        <form action="#" method="POST">
          <div class="mb-6">
            <label for="yourName" class="block text-[var(--color-coffee)] font-medium mb-2">Your Name</label>
            <input type="text" id="yourName" name="yourName" placeholder="Enter your name" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
          </div>
          <div class="mb-6">
            <label for="phoneNumber" class="block text-[var(--color-coffee)] font-medium mb-2">Phone Number</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
          </div>
          <div class="mb-6">
            <label for="email" class="block text-[var(--color-coffee)] font-medium mb-2">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
          </div>
          <div class="mb-6">
            <label for="persons" class="block text-[var(--color-coffee)] font-medium mb-2">How many persons?</label>
            <select id="persons" name="persons" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
              <option value="" disabled selected>Select number of persons</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <div class="mb-6">
            <label for="date" class="block text-[var(--color-coffee)] font-medium mb-2">Date</label>
            <input type="date" id="date" name="date" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
          </div>
          <div class="flex justify-center">
            <button type="submit"
              class="bg-[var(--color-caramel)] hover:bg-[var(--color-brownie)] text-white px-8 py-3 rounded-lg transition duration-300 ease-in-out shadow-md focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:ring-opacity-50">
              BOOK NOW
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <!-- Modal (Hidden by default, with an overlay) -->
  <div id="reservationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md mx-auto">
      <h3 class="text-xl font-semibold mb-4">Reservation Submitted</h3>
      <p id="modalMessage" class="mb-4">
        Thank you for booking with us. We will contact you soon regarding your reservation.
      </p>
      <button id="closeModal" class="bg-[var(--color-caramel)] hover:bg-[var(--color-brownie)] text-white px-6 py-2 rounded transition">
        Close
      </button>
    </div>
  </div>
@endsection
@section('scripts')
<script>
    const reservationForm = document.querySelector("form");
    reservationForm.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent default form submission

      // Retrieve and trim the form values
      const yourName = document.getElementById("yourName").value.trim();
      const phoneNumber = document.getElementById("phoneNumber").value.trim();
      const email = document.getElementById("email").value.trim();
      const persons = document.getElementById("persons").value;
      const date = document.getElementById("date").value.trim();

      let modalMessageText = "";

      // Check if any required field is empty and set the modal message accordingly
      if (yourName === "" || phoneNumber === "" || email === "" || persons === "" || date === "") {
        modalMessageText = "Please fill in all the required fields.";
      } else {
        modalMessageText = "Thank you for your booking! We will contact you soon regarding your reservation.";
      }

      // Update the modal message text
      document.getElementById("modalMessage").innerText = modalMessageText;

      // Display the modal
      document.getElementById("reservationModal").classList.remove("hidden");
    });

    // Close modal functionality
    document.getElementById("closeModal").addEventListener("click", function () {
      document.getElementById("reservationModal").classList.add("hidden");
    });
  </script>
@endsection