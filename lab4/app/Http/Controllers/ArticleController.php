<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Отображение списка новостей из БД
     */
    public function index()
    {
        $articles = Article::orderBy('date', 'desc')->get();

        return view('articles.index', ['articles' => $articles]);
    }
}