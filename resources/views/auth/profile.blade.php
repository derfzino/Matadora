   @extends('layouts.app')

   @section('title', 'Профиль')


   @section('content')



   <h1>Привет, {{ Auth::user()->fio }} ({{ Auth::user()->login }})</h1>
   <p>Вы успешно авторизованы.</p>

   <form action="{{ route('logout') }}" method="POST">
       @csrf
       <button type="submit">Выйти</button>
   </form>
   @endsection