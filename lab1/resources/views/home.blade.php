@extends('layouts.main')

@section('title', 'Главная')

@section('content')
    <h1>Новости</h1>
    <table class="articles-table">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Изображение</th>
                <th>Заголовок</th>
                <th>Краткое описание</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $index => $article)
                <tr>
                    <td>{{ $article['date'] }}</td>
                    <td>
                        <a href="{{ route('gallery', $index) }}">
                            <img src="{{ asset('images/' . $article['preview_image']) }}" alt="{{ $article['name'] }}" width="150">
                        </a>
                    </td>
                    <td>{{ $article['name'] }}</td>
                    <td>{{ $article['shortDesc'] ?? '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection