<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('storage/assets/css/main.css')}}">
</head>
<body>

    <header>
        <div class="img_class">
            <img src="{{URL::asset('storage/assets/img/LogoEMK.png')}}" alt="LogoEMK">
            <H1>Международная дистанционная олимпиада «Проектирование и разработка баз данных»</H1>
        </div>
        <div>
            <nav>
                <a href="">button</a>
                <a href="">button</a>
                <a href="">button</a>
                <a href="">button</a>
                <a href="">button</a>
            </nav>
        </div>
    </header>

    <article>
        @yield('content')
    </article>

    <footer>

        <div class="green-panel"></div>

        <div >
            <a href="">
                <img src="" alt="">
            </a>
            <div>
                <p>Государственное автономное профессиональное образовательное учреждение Свердловской области «Екатеринбургский монтажный колледж»</p>
                <p>620063, г.Екатеринбург ул. Декабристов, стр. 83 +7 (343) 257-47-46 E-mail: emk-ekat@yandex.ru</p>
            </div>
        </div>

    </footer>

    @yield('script')

</body>
</html>