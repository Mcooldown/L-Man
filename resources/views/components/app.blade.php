<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
     <title>{{$title}}</title>
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
     <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="bg-light">
     <div id="app">
         <x-alert></x-alert>
         @if(isset($navbar))
             <x-navbar></x-navbar>
         @endif
          <main>
               {{ $slot }}
          </main>
     </div>
 
 </body>
</html>