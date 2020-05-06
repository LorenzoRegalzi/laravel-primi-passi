<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <header>
            <img class="logo" src="{{asset('img/marchio-sito-test.png')}}" alt="">
            <nav>
                <ul>
                    <li class="{{(url()->current() == route('prodotti')? 'active':'')}}">
                        <a href="{{route('prodotti')}}">Prodotti</a>
                    </li>
                    <li class="{{(url()->current() == route('home')? 'active':'')}}">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="{{(url()->current() == route('contatti')? 'active':'')}}">
                        <a href="{{route('contatti')}}">Contatti</a>
                    </li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </header>
    </body>
</html>
