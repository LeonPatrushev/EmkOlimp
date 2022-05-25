@extends('layout')

@section('content')

    <section class="section-background-overlay">
        <div class="section-background-overlay-darkening">
            <div class="information-about-the-olympiad-head">
                <img class="logo-img" src="{{URL::asset('storage/assets/img/LogoEMK.png')}}" alt="LogoEMK">
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
                    Олимпиада проводится с целью повышения интереса студентов к изучаемым дисциплинам, 
                    выявления качества подготовки выпускаемых специалистов в области проектирования и разработки баз данных, 
                    дальнейшего совершенствования мастерства обучающихся, закрепления и углубления знаний и умений, 
                    полученных в процессе теоретического и практического обучения.
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
                    проектирование базы данных и импорт полученной ER-диаграммы в клиент-серверную систему
                    управления базой данных
                </p>
            </div>
            <div class="directions-grid-item-two">
                <p>
                    создание дампа базы данных
                </p>
            </div>
            <div class="directions-grid-item-three">
                <p>
                    реализация запросов (query), хранимых процедур (procedure), представлений (view), триггеров(trigger)
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
                <a class="view-info-button" href="{{URL::asset('storage/assets/doc/InformationLetter.pdf')}}">Посмотреть</a>
            </div>
            <div class="important-know-grid-item-two">
                <h3>Положение</h3>
                <a class="view-info-button" href="{{URL::asset('storage/assets/doc/Position.pdf')}}">Посмотреть</a>
            </div>
            <div class="important-know-grid-item-three">
                <h3>Инструкция по работе с системой дистанционного обучения</h3>
                <a class="view-info-button" href="{{URL::asset('storage/assets/doc/Manual.pdf')}}">Посмотреть</a>
            </div>
        </div>
    </section>
    
    <section>
        <p>
            Дата проведения
        </p>
        <p>
            Будет проходить на сдо
        </p>
    </section>
@endsection