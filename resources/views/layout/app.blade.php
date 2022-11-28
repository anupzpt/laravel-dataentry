<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DataEntry</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
    <nav class="navbar navbar-expand-lg text-white navbar-light" style="background-color: #386b8f;">
        <a class="navbar-brand mr-auto  p-1 text-white" href="#">DataEntry</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container d-flex justify-content-end">
            <a class="nav-link mr-auto p-2" href="/">Home</a>
         @auth
             <a class="nav-link p-2 " href="{{route('entry')}}">DataEntry</a>
            <a href="{{route('login')}}" class="p-2 nav-link">{{auth()->user()->name}}</a>
            <a class="nav-link p-1 btn btn-danger text-white" href="{{route('logout')}}">Logout</a>
            </form>
        @endauth
        @guest
        <a class="nav-link p-2 " href="{{route('login')}}">LogIn</a>
        @endguest
        </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
