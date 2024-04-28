<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primevest - Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('build/assets/app-BiOokhgf.css') }}">
    <script src="{{ asset('build/assets/app-D2jpX1vH.js') }}"></script>
</head>
<style>
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }
</style>

<body>
    <!-- navbar goes here -->
    @include('layouts.nav')

    <!-- content goes here -->
    @yield('content')

    {{-- Footer goes here --}}
    @include('layouts.footer')
</body>

<script>
    // grab everything we need
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // add event listeners
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

    function toggleAccordion(id) {
        var accordion = document.getElementById(id);
        if (accordion.style.display === "block") {
            accordion.style.display = "none";
        } else {
            accordion.style.display = "block";
        }
    }
</script>

</html>
