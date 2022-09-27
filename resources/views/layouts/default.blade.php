<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>

<div class="flex bg-slate-200">
    <div>
         @include('includes.header')
    </div>
    <div class="container mx-auto mt-10">
           @yield('content')
   </div>

   @include('includes.footer')
</div>
</body>
</html>
