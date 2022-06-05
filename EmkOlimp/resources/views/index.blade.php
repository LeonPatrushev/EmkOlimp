@extends('layout')

@section('content')

    <section class="section-background-overlay">
        <div class="section-background-overlay-darkening">
            <div class="information-about-the-olympiad-head">
                <img class="logo-img" src="{{URL::asset('assets/img/EMK_logo_white.svg')}}" alt="LogoEMK">
                <h1>
                    Международная дистанционная олимпиада «Проектирование и разработка баз данных»
                </h1>
            </div>
            <div class="information-about-the-olympiad-text">
                <p>
                    ГАПОУ СО «Екатеринбургский монтажный колледж» приглашает принять участие в
                    Международной дистанционной олимпиаде «Проектирование и разработка баз данных» для
                    студентов профессиональных образовательных организаций по специальностям укрупненной
                    группы 09.02.00 «Информатика и вычислительная техника».
                </p>
            </div>
        </div>
    </section>
    
    <section>
        <div class="information-about-the-olympiad-stages-grid">
            <div class="stages-grid-head">
                <h2>Этапы олимпиады</h2>
            </div>
            <div class="stages-grid-item">
                <div class="stage-number-grid">
                    <h3 class="horizontal-text">1</h3>
                    <h4 class="vertical-text">ЭТАП</h4>
                </div>
                <div class="stages-description">
                    <h2>!31.05.2022!</h2>
                </div>
                <h4>Подача заявок</h4>
            </div>
            <div class="stages-grid-item">
                <div class="stage-number-grid">
                    <h3 class="horizontal-text">2</h3>
                    <h4 class="vertical-text">ЭТАП</h4>
                </div>
                <div class="stages-description">
                    <h2>!31.05.2022!</h2>
                    
                </div>
                <h4>Выполнение заданий</h4>
            </div>
            <div class="stages-grid-item">
                <div class="stage-number-grid">
                    <h3 class="horizontal-text">3</h3>
                    <h4 class="vertical-text">ЭТАП</h4>
                </div>
                <div class="stages-description">
                    <h2>!31.05.2022!</h2>
                </div>
                <h4>Подведение итогов</h4>
            </div>
        </div>
    </section>

    <section>
        <div class="information-about-the-olympiad-directions-grid">
            <div class="directions-grid-head">
                <h2>
                    В олимпиаде предусмотренны три направления
                </h2>
            </div>
            <div class="directions-grid-item-one">
                <p>
                    Проектирование базы данных и импорт полученной ER-диаграммы в клиент-серверную систему
                    управления базой данных
                </p>
            </div>
            <div class="directions-grid-item-two">
                <p>
                    Создание дампа базы данных
                </p>
            </div>
            <div class="directions-grid-item-three">
                <p>
                    Реализация запросов (query), хранимых процедур (procedure), представлений (view), триггеров(trigger)
                </p>
            </div>
        </div>
    </section>
    
    <section>
        <div class="information-about-the-olympiad-important-know-grid">
            <div class="important-know-grid-head">
                <h2>
                    Важно знать
                </h2>
            </div>
            <div class="important-know-grid-item-one">
                <h3>Информационное письмо</h3>
                <a class="view-info-button" href="{{URL::asset('assets/doc/InformationLetter.pdf')}}">Посмотреть</a>
            </div>
            <div class="important-know-grid-item-two">
                <h3>Положение</h3>
                <a class="view-info-button" href="{{URL::asset('assets/doc/Position.pdf')}}">Посмотреть</a>
            </div>
            <div class="important-know-grid-item-three">
                <h3>Инструкция по работе с системой дистанционного обучения</h3>
                <a class="view-info-button" href="{{URL::asset('assets/doc/Manual.pdf')}}">Посмотреть</a>
            </div>
        </div>
    </section>
    
    <section class="information-about-the-olympiad-main-info">
        <div class="information-about-the-olympiad-main-info-grid">
            <div class="main-info-head">
                <h2>Об олимпиаде</h2>
                <p>Олимпиада проводится с целью повышения интереса студентов к изучаемым дисциплинам, выявления качества подготовки выпускаемых специалистов в области проектирования и разработки баз данных, дальнейшего совершенствования мастерства обучающихся, закрепления и углубления знаний и умений, полученных в процессе теоретического и практического обучения.</p>
            </div>
            <div class="main-info-main">
                <div class="main-info-main-img">
                    <img src="{{URL::asset('assets/img/student-at-the-computer.jpg')}}" alt="student">
                </div>
                <div class="main-info-main-points">
                    <div class="main-info-main-points-item">
                        <div class="green-point"></div>
                        <p>Форма проведения олимпиады - дистанционная.</p>
                    </div>
                    <div class="main-info-main-points-item">
                        <div class="green-point"></div>
                        <p>В олимпиаде могут принимать участие студенты очной формы обучения в возрасте до 23 лет среднего профессионального образования.</p>
                    </div>
                    <div class="main-info-main-points-item">
                        <div class="green-point"></div>
                        <p>Участие в олимпиаде бесплатное.</p>
                    </div>
                    <div class="main-info-main-points-item">
                        <div class="green-point"></div>
                        <p>Язык олимпиады – русский, сербский.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection