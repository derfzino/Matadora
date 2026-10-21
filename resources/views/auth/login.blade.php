@extends('layouts.app')

@section('title', 'Страница авторизации')


@section('content')
@if ($errors->any())
<div style="color: red;">
    {{ $errors->first('login') }}
</div>
@endif

<h1>Форма входа</h1>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="text" name="login" placeholder="Логин" value="{{ old('login') }}" required><br><br>
    <input type="password" name="password" placeholder="Пароль" required><br><br>

    <button type="submit">Войти</button>
</form>
<p>Нет аккаунта? <a href="{{ route('registerForm') }}">Зарегистрироваться</a></p>
@endsection