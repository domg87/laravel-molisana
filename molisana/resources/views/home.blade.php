@extends('layouts.layout')



@section('title')

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
                <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto["titolo"]}}</h3></a>
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
                <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto["titolo"]}}</h3></a>
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
                <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto["titolo"]}}</h3></a>
            </li>
            @endforeach
        </ul>
        @endif

    </section>
</div>

@endsection


