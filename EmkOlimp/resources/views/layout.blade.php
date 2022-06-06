<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmkOlimp</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.main.css')}}">
</head>
<body>

    <header>
        <div class="header-upper-block-grid">
            <div class="header-upper-block">
                <a class="logo-link" href="">
                    <img class="logo-img" src="{{URL::asset('assets/img/EMK_logo_white.svg')}}" alt="LogoEMK">
                </a>
                <h2>Государственное автономное профессиональное образовательное учреждение Свердловской области «Екатеринбургский монтажный колледж»</H2>
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

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-upper-block-grid"></div>
        <div class="footer-lower-block-grid">
            <div class="footer-lower-block">
                <a class="logo-link" href="">
                    <img class="logo-img" src="{{URL::asset('assets/img/EMK_logo_white.svg')}}" alt="LogoEMK">
                </a>
                <p class="footer-info-college">Государственное автономное профессиональное образовательное учреждение Свердловской области «Екатеринбургский монтажный колледж»</p>
                <div class="footer-contact-info">
                    <div class="footer-contact-info-item">
                        <p>620063, г.Екатеринбург ул. Декабристов, стр. 83</p>
                        <img src="{{URL::asset('assets/img/home_icon_white.svg')}}" alt="home_icon">
                    </div>
                    <div class="footer-contact-info-item">
                        <a href="tel:+73432574746">+7 (343) 257-47-46</a>
                        <img src="{{URL::asset('assets/img/call_icon_white.svg')}}" alt="call_icon">
                    </div>
                    <div class="footer-contact-info-item">
                        <a href="mailto:emk-ekat@yandex.ru">emk-ekat@yandex.ru</a>
                        <img src="{{URL::asset('assets/img/message_icon_white.svg')}}" alt="message_icon"> 
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>

    @yield('script')

</body>
</html>