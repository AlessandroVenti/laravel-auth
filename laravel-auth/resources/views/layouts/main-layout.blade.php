<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Laravel Project</title>
     <link rel="preconnect" href="https://fonts.gstatic.com"> 
     <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
     <div class="layout">
          @include('components.header')
          @yield('content')
          @include('components.footer')
     </div>
</body>
</html>