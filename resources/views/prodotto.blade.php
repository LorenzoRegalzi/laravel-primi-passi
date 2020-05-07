@php
    $cards = config('products');
    $prodotto = $cards[$id];
@endphp

@extends('layouts.layout')
@section('titolo')
    prodotto
@endsection
@section('mainContent')

        <div class="prodotto">
            <h2>{!!$prodotto['titolo']!!}</h2>
            <img src="{!!$prodotto['src-h']!!}" alt="">
            <img src="{!!$prodotto['src-p']!!}" alt="">
            <p>{!!$prodotto['descrizione']!!}</p>
        </div>

@endsection
