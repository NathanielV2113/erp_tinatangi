@extends('modules.crm.website.layout')

@section('content')
<!-- MAIN CONTENT -->
<main class="flex-grow py-12">
  <div class="container mx-auto px-4">
    <!-- Flex container with two separate columns -->
    <div class="flex flex-col md:flex-row gap-8 w-full max-w-5xl mx-auto">
      <!-- Reservation Form Card -->
      <div class="bg-[var(--color-cream)] p-8 shadow-lg rounded-xl w-full md:w-1/2">
        <h2 class="text-3xl font-semibold text-center text-[var(--color-coffee)] mb-8">Reserve Our Place</h2>
        <form action="{{ route('tinatangi.reservation.store') }}" method="POST" id="reservationForm">
          @csrf
          @method('POST')
          <!-- Full Name -->
          <div class="mb-6">
            <label for="fullName" class="block text-[var(--color-coffee)] font-medium mb-2">Full Name</label>
            <input type="text" id="fullName" name="name" placeholder="Enter your full name" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
            @error('name')
            <div class="text-red-500 text-sm mt-1">
              {{ $message }}
            </div>
            @enderror
          </div>

          <!-- Email -->
          <div class="mb-6">
            <label for="email" class="block text-[var(--color-coffee)] font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
            @error('email')
            <div class="text-red-500 text-sm mt-1">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- Date -->
          <div class="mb-6">
            <label for="date" class="block text-[var(--color-coffee)] font-medium mb-2">Date</label>
            <input type="date" id="dateInput" name="date" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
            @error('date')
            <div class="text-red-500 text-sm mt-1">
              {{ $message }}
            </div>
            @enderror
          </div>
          <!-- Time -->
          <div class="mb-6">
            <label for="timein" class="block text-[var(--color-coffee)] font-medium mb-2">Time-in</label>
            <input type="time" id="timeinInput" name="timein" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
            @error('timein')
            <div class="text-red-500 text-sm mt-1">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-6">
            <label for="timeout" class="block text-[var(--color-coffee)] font-medium mb-2">Time-out</label>
            <input type="time" id="timeoutInput" name="timeout" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
            @error('timeout')
            <div class="text-red-500 text-sm mt-1">
              {{ $message }}
            </div>
            @enderror
          </div>

          <!-- Venue Selection -->
          <div class="mb-6">
            <label for="venue" class="block text-[var(--color-coffee)] font-medium mb-2">Select Venue</label>
            <select id="venue" name="table" required
              class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:border-[var(--color-caramel)] transition duration-300 ease-in-out shadow-sm hover:shadow-lg">
              <option value="" disabled selected>Select a venue</option>
              <option value="1">GAZEBO SPOT - 1 to 4 PERSONS</option>
              <option value="2">LIBRARY HALL - 6-10 PERSONS</option>
              <option value="3">FUNCTION HALL - 10 OR MORE PERSONS</option>
            </select>
            @error('table')
            <div class="text-red-500 text-sm mt-1">
              {{ $message }}
            </div>
            @enderror
          </div>

          <!-- Submit Button -->
          <div class="flex justify-center">
            <button type="submit"
              class="bg-[var(--color-caramel)] hover:bg-[var(--color-brownie)] text-white px-8 py-3 rounded-lg transition duration-300 ease-in-out shadow-md focus:outline-none focus:ring-2 focus:ring-[var(--color-caramel)] focus:ring-opacity-50">
              Book Now
            </button>
          </div>
        </form>
      </div>

      <!-- Image Container Card (Right Side) -->
      <div class="w-full md:w-1/2 flex flex-col justify-center items-center">
        <!-- Professional label on top -->
        <p class="mb-2 text-lg font-semibold text-[var(--color-coffee)]">Venue Preview</p>
        <!-- Container for the image with cream background -->
        <div class="bg-[var(--color-cream)] p-4 rounded-xl shadow-xl overflow-hidden">
          <img id="venueImage" src="/img/website-imgs/reservation-default.png" alt="Venue Preview"
            class="w-full h-auto rounded object-cover transition-opacity duration-500">
        </div>
        <!-- Label displaying the name of the selected venue -->
        <p id="venueNameLabel" class="mt-2 text-lg font-semibold text-[var(--color-coffee)]">Select a Venue</p>
      </div>
    </div>
  </div>
</main>
@endsection
@section('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const dateInput = document.getElementById("dateInput");
    let tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1); // Set to the next day
    let formattedTomorrow = tomorrow.toISOString().split("T")[0]; // Convert to YYYY-MM-DD

    dateInput.min = formattedTomorrow; // Set min attribute to tomorrow's date
  });
  document.querySelectorAll("input[type='time']").forEach(function(input) {
    input.addEventListener("input", function() {
      let selectedTime = this.value;
      let hour = parseInt(selectedTime.split(":")[0], 10);

      // Prevent selection outside the range
      if (hour < 8 || hour > 22) {
        this.value = ""; // Clear invalid input
      }
    });
  });
  document.getElementById('timeoutInput').addEventListener('change', function() {
    var timeIn = document.getElementById('timeinInput').value;
    var timeOut = document.getElementById('timeoutInput').value;

    if (!timeIn || !timeOut) return; // Ensure both fields are set

    var timeInDate = new Date('1970-01-01T' + timeIn + ':00');
    var timeOutDate = new Date('1970-01-01T' + timeOut + ':00');

    var oneHourLater = new Date(timeInDate.getTime() + 60 * 60 * 1000);

    if (timeOutDate < oneHourLater) {
      const t = Swal.mixin({
        toast: true,
        position: "bottom-start",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      t.fire({
        icon: "error",
        title: "Time-out must be at least 1 hour after Time-in."
      });
      document.getElementById('timeoutInput').value = ''; // Reset invalid input
    }
  });

  // Update venue image and label upon selection with fade transition
  document.getElementById("venue").addEventListener("change", function() {
    const venue = this.value;
    // Default image is now reservation-default.png
    let imgSrc = "/img/website-imgs/reservation-default.png";
    let newVenueName = "Select a Venue";

    switch (venue) {
      case "1":
        imgSrc = "/img/website-imgs/gazebo-hall.jpg";
        newVenueName = "Gazebo Spot";
        break;
      case "2":
        imgSrc = "/img/website-imgs/library-hall.jpg";
        newVenueName = "Library Hall";
        break;
      case "3":
        imgSrc = "/img/website-imgs/function-hall.jpg";
        newVenueName = "Function Hall";
        break;
    }

    // Update the venue name label
    document.getElementById("venueNameLabel").textContent = newVenueName;

    const venueImage = document.getElementById("venueImage");
    // Fade out the current image
    venueImage.style.opacity = 0;

    // After the fade-out completes, change the image source and fade back in
    setTimeout(function() {
      venueImage.src = imgSrc;
      venueImage.style.opacity = 1;
    }, 500); // 500ms delay corresponds to the transition duration
  });
</script>
@endsection