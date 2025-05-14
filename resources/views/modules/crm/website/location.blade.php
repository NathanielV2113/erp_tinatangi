@extends('modules.crm.website.layout')
@section('styles')
<style>
  iframe {
    border: 0;
    width: 800px;
    height: 500px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  @media (max-width: 768px) {
    iframe {
      justify-self: center;
      width: 500px;
      height: 300px;
    }
  }
  @media (max-width: 640px) {
    iframe {
      width: 400px;
      height: 200px;
    }
  }
  @media (max-width: 480px) {
    iframe {
      justify-self: center;
      width: 350px;
      height: 400px;
    }
  }
</style>
@endsection
@section('content')
<!-- MAIN CONTENT: LOCATION IMAGE SECTION -->
<section class="py-8 bg-cream">
  <div class="container mx-auto">
    <h2 class="text-4xl font-bold text-center text-[var(--color-coffee)] mb-6">Our Location</h2>
    <div class="max-w-3xl mx-auto justify-center">
      <!-- <img src="/img/website-imgs/tinatangilogo2.png" alt="Tinatangi Cafe" class="w-full h-auto rounded-lg shadow-lg"> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d738.2787544197694!2d120.97356247203537!3d14.349531712515892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d5028c89e071%3A0xd2f34ec4ee1383f5!2sTinatangi%20Cafe!5e1!3m2!1sen!2sph!4v1745996903034!5m2!1sen!2sph"
        width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- CONTACT INFORMATION -->
<section class="py-12">
  <div class="max-w-4xl mx-auto bg-cream shadow-lg rounded-lg p-8">
    <h2 class="text-3xl font-semibold text-center text-[var(--color-coffee)]">Contact Information</h2>
    <div class="mt-6 space-y-4">
      <p class="text-lg text-gray-800">
        <strong>Address:</strong> 13 Jose Abad Santos Avenue, Brgy. Salawag, Cavite, Dasmariñas, Philippines, 4114
      </p>
      <p class="text-lg text-gray-800">
        <strong>Email:</strong>
        <a href="mailto:tinatangicafe@gmail.com" class="text-[var(--color-caramel)] hover:underline">
          tinatangicafe@gmail.com
        </a>
      </p>
    </div>
  </div>
</section>
@endsection