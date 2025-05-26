<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clarence Palo - Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark-gray text-white font-sans">
<!-- Navigation -->
@include('components.nav')

{{ $slot }}

<!-- Footer -->
@include('components.footer')
</body>
</html>
