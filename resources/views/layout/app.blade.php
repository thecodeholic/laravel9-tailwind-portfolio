<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134080546-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-134080546-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TheCodeholic - Free Educational Content Creator</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js"></script>
</head>
<body class="text-gray-800 dark:text-gray-200 ">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
    <x-layout.navbar></x-layout.navbar>
    {{ $slot }}
    <x-layout.footer></x-layout.footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
