<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmkOlimp</title>
    <link rel="stylesheet" href="{{URL::asset('storage/assets/css/main.css')}}">
</head>
<body>

    <header>
        <div class="header-upper-block-grid">
            <div class="header-upper-block">
                <a class="logo-link" href="">
                    <img class="logo-img" src="{{URL::asset('storage/assets/img/LogoEMK.png')}}" alt="LogoEMK">
                </a>
                <H1>Международная дистанционная олимпиада «Проектирование и разработка баз данных»</H1>
            </div>
        </div>
        <div class="header-lower-block-grid">
            <div class="header-lower-block">
                <nav>
                    <a class="nav-button" href="">button</a>
                    <a class="nav-button" href="">button</a>
                    <a class="nav-button" href="">button</a>
                    <a class="nav-button" href="">button</a>
                    <a class="nav-button" href="">button</a>
                </nav>
            </div>
        </div>
    </header>

    <article>
        @yield('content')
    </article>

    <footer>
        <div class="footer-upper-block-grid"></div>
        <div class="footer-lower-block-grid">
            <div class="footer-lower-block">
                <a class="logo-link" href="">
                    <img class="logo-img" src="{{URL::asset('storage/assets/img/LogoEMK.png')}}" alt="LogoEMK">
                </a>
                <p>Государственное автономное профессиональное образовательное учреждение Свердловской области «Екатеринбургский монтажный колледж»</p>
                <ul class="footer-contact-info">
                    <li>620063, г.Екатеринбург</li>
                    <li>ул. Декабристов, стр. 83</li>
                    <li>+7 (343) 257-47-46</li>
                    <li>E-mail: emk-ekat@yandex.ru</li>
                </ul>
                {{-- <div>
                    <p>620063, г.Екатеринбург ул. Декабристов, стр. 83 +7 (343) 257-47-46 E-mail: emk-ekat@yandex.ru</p>
                </div> --}}
            </div>
        </div>
    </footer>

    @yield('script')

</body>
</html>