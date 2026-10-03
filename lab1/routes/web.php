<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

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