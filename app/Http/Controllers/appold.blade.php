<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta
name="wiewport"
content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"
>
<meta
http-equiv="X-UA-Compatible"
content="ie=edge"
>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<title>{{config('app.name','LARAVEL ')}}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
      @include('inc.messages')
      @yield('content')
    </div>  
    
</body>
</html>