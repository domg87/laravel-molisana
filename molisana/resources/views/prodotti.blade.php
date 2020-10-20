@extends('layouts.layout')

@section('title')
    Prodotti
@endsection

@section('mainContent')
    <div class="container">
        <section class ="lunga">
            @if ($lunga)
                <h2>Lunga</h2>
                <ul>
                    @foreach ($lunga as $prodotto)
                    <li>
                        <img class = "img_pasta" src="{{$prodotto["src"]}}" alt="">
                        <h3>{{$prodotto["titolo"]}}</h3>
                    </li>
                    @endforeach
                </ul>
            @endif
        </section>
        <section></section>
        <section></section>
    </div>
@endsection