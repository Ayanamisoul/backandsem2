@extends('layouts.main')

@section('title', 'Новости')

@section('content')
    <h1>Список новостей</h1>
    <table class="articles-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Дата</th>
                <th>Изображение</th>
                <th>Заголовок</th>
                <th>Краткое описание</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->date }}</td>
                    <td>
                        <img src="{{ asset('images/' . $article->preview_image) }}" alt="{{ $article->name }}" width="150">
                    </td>
                    <td>{{ $article->name }}</td>
                    <td>{{ $article->shortDesc }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection