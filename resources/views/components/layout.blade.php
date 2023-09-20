<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Presto.it</title>

     <!-- Vite -->
     <x-vite/>


    <!-- Icona barra superiore -->
    <!-- <link rel="Website Icon" type="png" href="./img//logo.png"> -->

    <!-- livewire -->
    @livewireStyles
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://unpkg.com/transition-style">






</head>
<body>


    
    <!-- Header -->
        <x-header></x-header>
 
        <x-error/>
        <x-session/>
   
      

   {{ $slot }} 

 
   

    <x-footer/>

    <!-- livewire -->

   @livewireScripts

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type='text/javascript'>document.addEventListener('DOMContentLoaded', function () {window.setTimeout(document.querySelector('svg').classList.add('animated'),1000);})</script>



</body>
</html>