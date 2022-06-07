@extends('layout')

@section('content')

    <section>
        <div>
            <h2>Регистрация</h2>
            <form method="POST" action="{{route('register.create')}}">
                @csrf
                <div>
                    <label for="email">E-mail</label>
                    <input name="email" id="email" type="text" placeholder="E-mail">
                    @error('email')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password">Пароль</label>
                    <input name="password" id="password" type="text" placeholder="пароль">
                    @error('password')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit">регистрация</button>
                </div>
            </form>
        </div>
    </section>

@endsection