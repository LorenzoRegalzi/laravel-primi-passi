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
                    <li>
                        <a href="{{route('prodotti')}}">Prodotti</a>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Contatti</a>
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>
