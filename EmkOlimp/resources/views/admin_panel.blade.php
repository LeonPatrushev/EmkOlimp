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
                <a class="logo-link" href="{{route('index')}}">
                    <img class="logo-img" src="{{URL::asset('assets/img/EMK_logo_white.svg')}}" alt="LogoEMK">
                </a>
                <h2>Государственное автономное профессиональное образовательное учреждение Свердловской области «Екатеринбургский монтажный колледж»</H2>
            </div>
        </div>
        <div class="header-lower-block-grid">
            <div class="header-lower-block">
                <nav class="tabs__nav">
                    <a href="{{route('index')}}">Главная</a>
                    <a class="tabs__link tabs__link_active" href="#content-1">Список участников</a>
                    <a class="tabs__link" href="#content-2">Изменить информацию о олимпиаде</a>
                    <a class="tabs__link" href="#content-3">Добавить модератора</a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="tabs">
                
                <div class="tabs__content">
                    <div class="tabs__pane tabs__pane_show tabs_pane_min" id="content-1">
                        <h2>Список участников</h2>
                        <table>
                            <thead>
                                <th>Полное наименование учебного заведения</th>
                                <th>ФИО участника</th>
                                <th>E-mail участника</th>
                                <th>Специальность</th>
                                <th>Курс</th>
                                <th>ФИО преподавателя</th>
                                <th>Контактный телефон преподавателя</th>
                                <th>E-mail преподавателя</th>
                                <th>Статус</th>
                                <th>Дата регистрации</th>
                                <th>Управление</th>
                            </thead>
                            <tbody>
                            @foreach ($all_participants as $participant)
                                <tr>
                                    <th>{{$participant['name_institution']}}</th>
                                    <th>{{$participant['participant_full_name']}}</th>
                                    <th>{{$participant['participants_email']}}</th>
                                    <th>{{$participant['specialization']}}</th>
                                    <th>{{$participant['course']}}</th>
                                    <th>{{$participant['teacher_full_name']}}</th>
                                    <th>{{$participant['teacher_phone_number']}}</th>
                                    <th>{{$participant['teacher_email']}}</th>
                                    @if ($participant['approved'] == true)
                                    <th>Зарегистрирован</th>
                                    @else
                                    <th>Ожидает модерации</th>
                                    @endif
                                    <th>{{$participant['updated_at']}}</th>
                                    <th><a href="{{route('participant.delete',['id'=>$participant['id']])}}">Удалить</a></th>
                                </tr>
                            @endforeach  
                            </tbody>
                        </table> 
                    </div>
                    <div class="tabs__pane tabs_pane_min" id="content-2">
                        <h2>2z</h2>
                    </div>
                    <div class="tabs__pane tabs_pane_min" id="content-3">
                        <div>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-upper-block-grid"></div>
        <div class="footer-lower-block-grid">
            <div class="footer-lower-block">
                <a class="logo-link" href="{{route('index')}}">
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

    <script src="{{URL::asset('assets/js/tab.js')}}"></script>

</body>
</html>