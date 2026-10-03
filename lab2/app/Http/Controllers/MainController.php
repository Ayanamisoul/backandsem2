<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Главная страница: получает данные из articles.json и отправляет на главную страницу
     */
    public function index()
    {
        $json = file_get_contents(public_path('articles.json'));
        $articles = json_decode($json, true);

        return view('home', ['articles' => $articles]);
    }

    /**
     * Страница galery: отображает full_image выбранной статьи
     */
    public function gallery($id)
    {
        $json = file_get_contents(public_path('articles.json'));
        $articles = json_decode($json, true);

        if (!isset($articles[$id])) {
            abort(404);
        }

        return view('gallery', ['article' => $articles[$id]]);
    }
}