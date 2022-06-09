<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmkOlimp</title>
    <link rel="stylesheet" href="{{URL::asset('storage/assets/css/style.main.css')}}">
</head>
<body>

    <header>
        <div class="header-upper-block-grid">
            <div class="header-upper-block admin-header-upper-block">
                <a class="logo-link" href="{{route('index')}}">
                    <img class="logo-img" src="{{URL::asset('storage/assets/img/EMK_logo_white.svg')}}" alt="LogoEMK">
                </a>
                <h2>Государственное автономное профессиональное образовательное учреждение Свердловской области «Екатеринбургский монтажный колледж»</H2>
            </div>
        </div>
        <div class="header-lower-block-grid">
            <div class="header-lower-block-nav admin-header-lower-block-nav">
                <nav class="tabs__nav">
                    <a class="nav-button" href="{{route('index')}}">Главная</a>
                    <a class="tabs__link tabs__link_active nav-button" href="#content-1">Заявки на олимпиаду</a>
                    <a class="tabs__link nav-button" href="#content-2">Изменить информацию об олимпиаде</a>
                    <a class="tabs__link nav-button" href="#content-3">Добавить модератора</a>
                    <a class="nav-button" href="{{route('logout.index')}}">Выйти</a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="admin-section">
            <div class="tabs">
                <div class="tabs__content">
                    <div class="tabs__pane tabs__pane_show tabs_pane_min" id="content-1">
                        <div class="application-management">
                            <div class="application-management-head">
                                <h2>Заявки на олимпиаду</h2>
                            </div>
                            <div class="tabs_min">
                                <div class="tabs_min_nav">
                                    <a class="tabs_min_link tabs_min_link_active" href="#content-4">Ожидают</a>
                                    <a class="tabs_min_link" href="#content-5">Одобренны</a>
                                    <a class="tabs_min_link" href="#content-6">Отклонены</a>
                                </div>
                                <div class="tabs_min_pane tabs_min_pane_show" id="content-4">
                                    <table>
                                        <thead>
                                            <tr>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($waiting_participants as $participant)
                                            <tr>
                                                <td>{{$participant['name_institution']}}</td>
                                                <td>{{$participant['participant_full_name']}}</td>
                                                <td>{{$participant['participants_email']}}</td>
                                                <td>{{$participant['specialization']}}</td>
                                                <td>{{$participant['course']}}</td>
                                                <td>{{$participant['teacher_full_name']}}</td>
                                                <td>{{$participant['teacher_phone_number']}}</td>
                                                <td>{{$participant['teacher_email']}}</td>
                                                <td>{{$participant['name']}}</td>
                                                <td>{{$participant['updated_at']}}</td>
                                                <td>
                                                    <form method="POST" action="{{route('participant.update')}}" class="control-form">
                                                        @csrf
                                                        <input type="hidden" value="{{$participant['id']}}" name="participant_id">
                                                        <button type="submit" value="approve" name="status_change" class="control-button">Одобрить</button>
                                                        <button type="submit" value="reject" name="status_change" class="control-button">Отклонить</button>
                                                        <button type="submit" value="delete" name="status_change" class="control-button">Удалить</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach  
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tabs_min_pane" id="content-5">
                                    <table>
                                        <thead>
                                            <tr>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($approved_participants as $participant)
                                                <tr>
                                                    <td>{{$participant['name_institution']}}</td>
                                                    <td>{{$participant['participant_full_name']}}</td>
                                                    <td>{{$participant['participants_email']}}</td>
                                                    <td>{{$participant['specialization']}}</td>
                                                    <td>{{$participant['course']}}</td>
                                                    <td>{{$participant['teacher_full_name']}}</td>
                                                    <td>{{$participant['teacher_phone_number']}}</td>
                                                    <td>{{$participant['teacher_email']}}</td>
                                                    <td>{{$participant['name']}}</td>
                                                    <td>{{$participant['updated_at']}}</td>
                                                    <td>
                                                        <form method="POST" action="{{route('participant.update')}}" class="control-form">
                                                            @csrf
                                                            <input type="hidden" value="{{$participant['id']}}" name="participant_id">
                                                            <button type="submit" value="approve" name="status_change" class="control-button">Одобрить</button>
                                                            <button type="submit" value="reject" name="status_change" class="control-button">Отклонить</button>
                                                            <button type="submit" value="delete" name="status_change" class="control-button">Удалить</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach  
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tabs_min_pane" id="content-6">
                                    <table>
                                        <thead>
                                            <tr>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rejected_participants as $participant)
                                                <tr>
                                                    <td>{{$participant['name_institution']}}</td>
                                                    <td>{{$participant['participant_full_name']}}</td>
                                                    <td>{{$participant['participants_email']}}</td>
                                                    <td>{{$participant['specialization']}}</td>
                                                    <td>{{$participant['course']}}</td>
                                                    <td>{{$participant['teacher_full_name']}}</td>
                                                    <td>{{$participant['teacher_phone_number']}}</td>
                                                    <td>{{$participant['teacher_email']}}</td>
                                                    <td>{{$participant['name']}}</td>
                                                    <td>{{$participant['updated_at']}}</td>
                                                    <td>
                                                        <form method="POST" action="{{route('participant.update')}}" class="control-form">
                                                            @csrf
                                                            <input type="hidden" value="{{$participant['id']}}" name="participant_id">
                                                            <button type="submit" value="approve" name="status_change" class="control-button">Одобрить</button>
                                                            <button type="submit" value="reject" name="status_change" class="control-button">Отклонить</button>
                                                            <button type="submit" value="delete" name="status_change" class="control-button">Удалить</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__pane tabs_pane_min" id="content-2">
                        <div class="changing-information-about-olympiad">
                            <div class="stage-date-grid">
                                <div class="stage-date-head">
                                    <h2>Изменение этапов олимпиады</h2>
                                </div>
                                <div class="stage-date-main">
                                    @foreach ($all_stage_date as $stage_date)
                                        <form method="POST" action="{{route('stage.update')}}" class="stage-date-form">
                                            @csrf
                                            <h2>{{$stage_date['id']}} этап</h2>
                                            <input type="text" value="{{$stage_date['stage_name']}}" class="custom-input" id="stage_name" name="stage_name" placeholder="Название этапа">
                                            <input type="date" value="{{$stage_date['beginning_stage']}}" class="stage_beginning_date_input" id="beginning_stage" name="beginning_stage">
                                            <input type="date" value="{{$stage_date['end_stage']}}" class="stage_end_date_input" id="end_stage" name="end_stage">
                                            <button type="submit" value="{{$stage_date['id']}}" class="custom-button" id="stage_id" name="stage_id">Обновить данные {{$stage_date['id']}} этапа</button>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                            <div class="stage-date-grid">
                                <div class="stage-date-head">
                                    <h2>Изменение информации из блока "Важно знать"</h2>
                                </div>
                                <div class="stage-date-main">
                                    @foreach ($all_additional_info as $additional_info)
                                        <form method="POST" action="{{route('info.update')}}" enctype="multipart/form-data" class="stage-date-form">
                                            @csrf
                                            <h2>{{$additional_info['id']}}я доп. информация</h2>
                                            <input type="text" value="{{$additional_info['information_name']}}" class="custom-input" name="information_name" id="information_name">
                                            <div class="custom-file"><input type="file" name="document_name" id="document_name"></div>
                                            <button type="submit" value="{{$additional_info['id']}}" class="custom-button" name="information_id" id="information_id">Обновить информацию</button>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__pane tabs_pane_min" id="content-3">
                        <div class="authorization-form">
                            <div class="authorization-form-grid">
                                <div class="authorization-form-head">
                                    <h2>Регистрация нового админа</h2>
                                </div>
                                <form method="POST" action="{{route('register.create')}}" class="authorization-form-form">
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
                                        <button type="submit" class="custom-button">регистрация</button>
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
            <div class="footer-lower-block admin-footer-lower-block">
                <a class="logo-link" href="{{route('index')}}">
                    <img class="logo-img" src="{{URL::asset('storage/assets/img/EMK_logo_white.svg')}}" alt="LogoEMK">
                </a>
                <p class="footer-info-college">Государственное автономное профессиональное образовательное учреждение Свердловской области «Екатеринбургский монтажный колледж»</p>
                <div class="footer-contact-info">
                    <div class="footer-contact-info-item">
                        <p>620063, г.Екатеринбург ул. Декабристов, стр. 83</p>
                        <img src="{{URL::asset('storage/assets/img/home_icon_white.svg')}}" alt="home_icon">
                    </div>
                    <div class="footer-contact-info-item">
                        <a href="tel:+73432574746">+7 (343) 257-47-46</a>
                        <img src="{{URL::asset('storage/assets/img/call_icon_white.svg')}}" alt="call_icon">
                    </div>
                    <div class="footer-contact-info-item">
                        <a href="mailto:emk-ekat@yandex.ru">emk-ekat@yandex.ru</a>
                        <img src="{{URL::asset('storage/assets/img/message_icon_white.svg')}}" alt="message_icon"> 
                    </div>  
                </div>
            </div>
        </div>
    </footer>

    <script src="{{URL::asset('storage/assets/js/tab.js')}}"></script>

</body>
</html>