<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Titolo -->
    <title>Presto.it</title>

    <!-- Vite -->
    <x-vite/>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- livewire -->
    @livewireStyles
</head>
<body>
   
    <!-- Navbar -->

    <header>
        <x-navbar/>
    <header/>    

   {{ $slot }} 

   <!-- livewire -->

   @livewireStyles
   
</body>
</html>