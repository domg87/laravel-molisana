@extends('layouts.layout')

@section('mainContent')
<h1>{{$data["titolo"]}}</h1>

<img src="{{$data["src-h"]}}" alt="">
<img src="{{$data["src-p"]}}" alt="">
<p>{!!$data["descrizione"]!!}</p>
@endsection