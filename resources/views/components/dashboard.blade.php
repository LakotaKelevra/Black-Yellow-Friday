<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Black and Yellow Friday</title>
{{-- FONT --}}
<link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Major+Mono+Display&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
{{-- Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
{{-- VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="dashboard-layout">
    <x-navbar/>
    <main class="min-vh-100 ">
        {{$slot}}

    </main>

        <x-footer/>

</body>
</html>