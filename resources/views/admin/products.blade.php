@php
    $cards = config('products');
@endphp



@extends('layouts.admin')
@section('titolo')
    Prodotti
@endsection
@section('main')
    <table>
        <thead>
            <tr>
                <th>Nome Prodotto</th>
                <th>Descrizione</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cards as $prodotto)
            <tr>
                <td>{!!$prodotto['titolo']!!}</td>
                <td>{!!$prodotto['descrizione']!!}</td>
                <td>{!!$prodotto['tipo']!!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
