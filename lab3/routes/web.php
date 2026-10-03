<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Главная страница — вызов метода контроллера при входящем запросе
Route::get('/', [MainController::class, 'index'])->name('home');

// Страница galery — отображение full_image
Route::get('/galery/{id}', [MainController::class, 'gallery'])->name('gallery');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    $contacts = [
        ['name' => 'Телефон', 'value' => '+7 (999) 123-45-67'],
        ['name' => 'Email', 'value' => 'info@example.com'],
        ['name' => 'Адрес', 'value' => 'г. Москва, ул. Примерная, д. 1'],
        ['name' => 'Режим работы', 'value' => 'Пн-Пт, 9:00 - 18:00'],
    ];

    return view('contacts', ['contacts' => $contacts]);
})->name('contacts');

// Страница регистрации (форма)
Route::get('/signin', [AuthController::class, 'create'])->name('signin');

// Обработка формы регистрации (валидация + JSON-ответ)
Route::post('/signin', [AuthController::class, 'registration'])->name('signin.submit');