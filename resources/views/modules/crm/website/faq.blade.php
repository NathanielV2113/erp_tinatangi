@extends('modules.crm.website.layout')
@section('styles')
<style>
  /* FAQ details styling */
  summary {
      list-style: none;
      cursor: pointer;
    }

    summary::-webkit-details-marker {
      display: none;
    }

    details[open] summary .fa-chevron-down {
      transform: rotate(180deg);
    }
</style>
@endsection
@section('content')
<!-- MAIN CONTENT: Aesthetic & Functional FAQ Section -->
<main class="flex-grow">
    <div class="container mx-auto px-4 py-12">
      <h1
        class="text-center text-4xl font-bold text-[var(--color-coffee)] mb-12">
        Frequently Asked Questions
      </h1>
      <div class="max-w-3xl mx-auto space-y-6">
        <!-- FAQ Item 1 -->
        <details
          class="bg-white bg-opacity-80 rounded-xl shadow-lg transition-all">
          <summary
            class="flex justify-between items-center px-6 py-4 text-xl font-medium text-[var(--color-coffee)] hover:bg-[var(--color-cream)] transition-colors">
            What are your operating hours?
            <i
              class="fa-solid fa-chevron-down text-[var(--color-caramel)] transition-transform duration-300"></i>
          </summary>
          <div
            class="px-6 py-4 border-t border-gray-200 text-lg text-[var(--color-coffee)]">
            <p>
              We operate from 7:00 AM to 12:00 AM every day!
            </p>
          </div>
        </details>

        <!-- FAQ Item 2 -->
        <details
          class="bg-white bg-opacity-80 rounded-xl shadow-lg transition-all">
          <summary
            class="flex justify-between items-center px-6 py-4 text-xl font-medium text-[var(--color-coffee)] hover:bg-[var(--color-cream)] transition-colors">
            Are pets allowed?
            <i
              class="fa-solid fa-chevron-down text-[var(--color-caramel)] transition-transform duration-300"></i>
          </summary>
          <div
            class="px-6 py-4 border-t border-gray-200 text-lg text-[var(--color-coffee)]">
            <p>
              Yes, pets are welcome in our outdoor seating area. Please ensure
              they are well-behaved.
            </p>
          </div>
        </details>

        <!-- FAQ Item 3 -->
        <details
          class="bg-white bg-opacity-80 rounded-xl shadow-lg transition-all">
          <summary
            class="flex justify-between items-center px-6 py-4 text-xl font-medium text-[var(--color-coffee)] hover:bg-[var(--color-cream)] transition-colors">
            Do you have parking space?
            <i
              class="fa-solid fa-chevron-down text-[var(--color-caramel)] transition-transform duration-300"></i>
          </summary>
          <div
            class="px-6 py-4 border-t border-gray-200 text-lg text-[var(--color-coffee)]">
            <p>
              Yes, we offer ample parking space for all our guests.
            </p>
          </div>
        </details>

        <!-- FAQ Item 4 -->
        <details
          class="bg-white bg-opacity-80 rounded-xl shadow-lg transition-all">
          <summary
            class="flex justify-between items-center px-6 py-4 text-xl font-medium text-[var(--color-coffee)] hover:bg-[var(--color-cream)] transition-colors">
            Where are you located?
            <i
              class="fa-solid fa-chevron-down text-[var(--color-caramel)] transition-transform duration-300"></i>
          </summary>
          <div
            class="px-6 py-4 border-t border-gray-200 text-lg text-[var(--color-coffee)]">
            <p>
              We are located at 123 Main St, Suite 456, Dasmariñas, Cavite,
              Philippines 4114.
            </p>
          </div>
        </details>

        <!-- FAQ Item 5 -->
        <details
          class="bg-white bg-opacity-80 rounded-xl shadow-lg transition-all">
          <summary
            class="flex justify-between items-center px-6 py-4 text-xl font-medium text-[var(--color-coffee)] hover:bg-[var(--color-cream)] transition-colors">
            Do you provide WiFi?
            <i
              class="fa-solid fa-chevron-down text-[var(--color-caramel)] transition-transform duration-300"></i>
          </summary>
          <div
            class="px-6 py-4 border-t border-gray-200 text-lg text-[var(--color-coffee)]">
            <p>
              Yes, complimentary high-speed WiFi is available for all our
              guests.
            </p>
          </div>
        </details>

        <!-- FAQ Item 6 -->
        <details
          class="bg-white bg-opacity-80 rounded-xl shadow-lg transition-all">
          <summary
            class="flex justify-between items-center px-6 py-4 text-xl font-medium text-[var(--color-coffee)] hover:bg-[var(--color-cream)] transition-colors">
            What payment methods do you accept?
            <i
              class="fa-solid fa-chevron-down text-[var(--color-caramel)] transition-transform duration-300"></i>
          </summary>
          <div
            class="px-6 py-4 border-t border-gray-200 text-lg text-[var(--color-coffee)]">
            <p>
              We accept cash, credit/debit cards, and various digital payment
              options.
            </p>
          </div>
        </details>
      </div>
    </div>
  </main>
@endsection