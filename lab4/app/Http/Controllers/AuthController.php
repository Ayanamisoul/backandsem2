<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Отправляет страницу регистрации
     */
    public function create()
    {
        return view('auth.signin');
    }

    /**
     * Валидация входных данных формы и сбор их в ответ в формате JSON
     */
    public function registration(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|min:2|max:255',
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ], [
            'name.required'     => 'Поле "Имя" обязательно для заполнения',
            'name.min'          => 'Поле "Имя" должно содержать минимум 2 символа',
            'email.required'    => 'Поле "Email" обязательно для заполнения',
            'email.email'       => 'Введите корректный email',
            'password.required' => 'Поле "Пароль" обязательно для заполнения',
            'password.min'      => 'Пароль должен содержать минимум 6 символов',
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Регистрация прошла успешно',
            'data'    => [
                'name'  => $validated['name'],
                'email' => $validated['email'],
            ],
        ]);
    }
}