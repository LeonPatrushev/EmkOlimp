@extends('layout')

@section('content')

    <section>
        <div class="authorization-form tabs_pane_min">
            <div class="authorization-form-grid">
                <div class="authorization-form-head">
                    <h2>Вход</h2>
                </div>
                <form method="POST" action="{{route('login.login')}}" class="authorization-form-form">
                    @csrf
                    <div class="authorization-form-form-item">
                        <input name="email" id="email" type="text" placeholder="E-mail" class="custom-input">
                        @error('email')
                            <div class="error-form">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="authorization-form-form-item">
                        <input name="password" id="password" type="text" placeholder="Пароль" class="custom-input">
                        @error('password')
                            <div class="error-form">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="custom-button">войти</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection