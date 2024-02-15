<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comercio</title>

        <!-- Fonts -->
        <link rel="icon" href="/Storage/logo.png">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/5de15dbb4b.js" crossorigin="anonymous"></script>

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Styles -->
@livewireStyles
    </head>
    <body class="antialiased">
    <header>
        @livewire('navegaciones')
        </header>
        <main class="bg-[#9D5B68E6] min-h-screen">  