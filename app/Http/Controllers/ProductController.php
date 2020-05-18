<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //prendiamo i dati
        return view(view: 'prodotti')
    }

    public function show($id)
    {
            return view(view: 'prodotti.show-extends',compact( varname: 'id'));
    }
}
