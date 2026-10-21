<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'login'    => 'required|string|min:6|alpha_num|unique:users,login',
            'fio'      => 'required|string|max:255',
            'phone'    => 'nullable|string|max:20',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'login.required' => 'Логин обязателен.',
            'login.unique' => 'Такой логин уже занят.',
            'email.unique' => 'Этот email уже используется.',
            'password.confirmed' => 'Пароли не совпадают.',
            'login.min' => 'Логин должен содержать минимум 6 символа.',
            'login.max' => 'Логин не может быть длиннее 20 символов.',
            'password.min' => 'Пароль должен быть не короче 6 символов.',
        ];
    }
}
