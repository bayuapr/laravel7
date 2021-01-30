@extends('layouts.app')

@section('content')
<h1>  Halaman artikel </h1>

@foreach ($artikel as $ar)
    <p><strong>Judul: {{ $ar['title']}}</strong></p>
    <p>{{ $ar['title']}}</p>
@endforeach

@endsection