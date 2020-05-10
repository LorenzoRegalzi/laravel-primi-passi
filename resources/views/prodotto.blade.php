@php
    $cards = config('products');
    $prodotto = $cards[$id];
    echo $id;
    if ($id > 10 ) {
        empty($id);
        $id = -1;
    } else if ($id < 1) {
        $id = 10 ;
    }
@endphp

@extends('layouts.layout')
@section('titolo')
    prodotto
@endsection
@section('mainContent')

        <div class="prodotto">
            <div class="prec">
                <a href="{{route('prodotti.show' , $id - 1)}}">prec</a>
            </div>
            <div class="succ">
                <a href="{{route('prodotti.show' , $id + 1)}}">succ</a>
            </div>
            <h2>{!!$prodotto['titolo']!!}</h2>
            <img src="{!!$prodotto['src-h']!!}" alt="">
            <img src="{!!$prodotto['src-p']!!}" alt="">
            <div class="testo">{!!$prodotto['descrizione']!!}</div>


        </div>
@endsection
