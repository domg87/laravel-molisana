@extends('layouts.layout')

@php

    $data = config('db-prodotti');


    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $prodotto) {
        if ($prodotto['tipo'] == "lunga") {
            $lunga[] = $prodotto;
        } elseif ($prodotto['tipo'] == "corta") {
            $corta[] = $prodotto;
        } elseif ($prodotto['tipo'] == "cortissima") {
            $cortissima[] = $prodotto;
        }
    }
@endphp

@section('title')
    Prodotti
@endsection

@section('mainContent')
<div class="container">

    <div class="titolo-prodotto">
      <h2>Lunga</h2>
    </div>
    <section class ="lunga">
        @if ($lunga)
            <ul class = "prodotto">
                @foreach ($lunga as $prodotto)
                <li>
                    <img class = "img_pasta" src="{{$prodotto["src"]}}" alt="">
                    <h3>{{$prodotto["titolo"]}}</h3>
                </li>
                @endforeach
            </ul>
        @endif
    </section>

    <div class="titolo-prodotto">
      <h2>corta</h2>
    </div>
    <section class ="corta">
        @if ($corta)
          <ul class = "prodotto">
            @foreach ($corta as $prodotto)
            <li>
                <img class = "img_pasta" src="{{$prodotto["src"]}}" alt="">
                <h3>{{$prodotto["titolo"]}}</h3>
            </li>
            @endforeach
          </ul>
        @endif
    </section>

    <div class="titolo-prodotto">
      <h2>cortissima</h2>
    </div>
    <section class ="cortissima">
        @if ($cortissima)
          <ul class = "prodotto">
            @foreach ($cortissima as $prodotto)
            <li>
                <img class = "img_pasta" src="{{$prodotto["src"]}}" alt="">
                <h3>{{$prodotto["titolo"]}}</h3>
            </li>
            @endforeach
          </ul>
        @endif

    </section>
  </div>

@endsection