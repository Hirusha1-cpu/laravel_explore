<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <nav>

        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    <h1>Hello Contact</h1>
</body>

</html> -->
<x-layout>
    <x-slot:heading>
        Contact Page
    </x-slot:heading>
    <h1>Hello Contact</h1>

</x-layout>