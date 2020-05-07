@php
    $cards = config('products');
    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($cards as $key => $card){
        if ($card['tipo'] == 'lunga'){
            $lunghe[$key] = $card;
        }
        elseif ($card['tipo'] == 'corta'){
            $corte[$key] = $card;
        }
        elseif ($card['tipo'] == 'cortissima'){
            $cortissime[$key] = $card;
        }
    }

@endphp
@extends('layouts.layout')
@section('mainContent')
@include ('partial.main')
@endsection
