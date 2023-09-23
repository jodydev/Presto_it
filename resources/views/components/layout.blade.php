<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Presto.it</title>

     <!-- Vite -->
     <x-vite/>


    <!-- Icona barra superiore -->
    <link rel="Website Icon" type="png" href="{{asset('img/logo/favicon.png')}}">

    <!-- livewire -->
    @livewireStyles
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">


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