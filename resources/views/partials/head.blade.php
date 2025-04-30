<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? 'Tinatangi' }}</title>

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance

@include('sweetalert2::index')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">