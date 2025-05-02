<x-layouts.app>
  <div class="grid grid-cols-2 sm:flex">
    <div class="lg:w-1/2 sm:flex">
      <h1 class="font-bold text-accent-content sm:font-medium text-[26px] lg:text-3xl">Hello,</h1>
      <h1 class="font-bold text-accent-content sm:font-medium text-[26px] lg:text-3xl">{{ auth()->user()->name }}</h1>
    </div>
    <div class="lg:w-1/2 text-end">
      <p id="current-date" class="text-[18px] sm:text-base md:text-lg lg:text-xl"></p>
      <p id="current-time" class="text-[18px] sm:text-base md:text-lg lg:text-xl"></p>
    </div>
  </div>

  <div id='calendar' class="mt-5 mb-5 lg:max-h-[746px] sm:max-h-[700px] min-h-[500px]"></div>


  <div class="grid grid-cols-1 mt-10 sm:grid-cols-2 gap-4">
    <div><button class="btn btn-soft btn-success btn-block w-full sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl">Time in</button></div>
    <!-- ... -->
    <div><button class="btn btn-soft btn-error btn-block w-full sm:btn-sm md:btn-md lg:btn-lg xl:btn-xl">Time out</button></div>
  </div>


  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: @json($events)
      });
      calendar.render();
    });

    function updateDateTime() {
      const now = new Date();

      document.getElementById("current-date").innerText = now.toLocaleDateString("en-US", {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
      });
      document.getElementById("current-time").innerText = now.toLocaleTimeString("en-US", {
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
        hour12: false,
      });
    }

    setInterval(updateDateTime, 1000);
    updateDateTime(); // Initial call to set values
  </script>
</x-layouts.app>