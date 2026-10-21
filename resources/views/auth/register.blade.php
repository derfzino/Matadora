@extends('layouts.app') 

@section('title', 'Страница регистрации')


@section('content')
@if ($errors->any())
<div style="color: red;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h1>Форма регистрации</h1>
<form action="{{ route('register') }}" method="POST">
    @csrf
    <input type="text" name="login" placeholder="Логин" value="{{ old('login') }}" required><br><br>
    <input type="text" name="fio" placeholder="ФИО" value="{{ old('fio') }}" required><br><br>
    <input type="text" name="phone" placeholder="Телефон" value="{{ old('phone') }}"><br><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required><br><br>
    <input type="password" name="password" placeholder="Пароль" required><br><br>
    <input type="password" name="password_confirmation" placeholder="Повторите пароль" required><br><br>
    <button type="submit">Зарегистрироваться</button>
</form>
<p>Есть аккаунт? <a href="{{ route('loginForm') }}">Войти</a></p>
@endsection