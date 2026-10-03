@extends('layouts.main')

@section('title', 'Галерея')

@section('content')
    <h1>Галерея</h1>
    <h2>{{ $article['name'] }}</h2>
    <img src="{{ asset('images/' . $article['full_image']) }}" alt="{{ $article['name'] }}" style="max-width: 100%;">
    <p><a href="{{ route('home') }}">← Вернуться на главную</a></p>
@endsection