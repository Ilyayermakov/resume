@extends('layouts.main')
<link rel="stylesheet" href="./css/home.css">
@section('content')
    <x-section>
        <header class="info">
            <img src="./img/avatar/avatar.jpg" alt="Foto of Ilya Ermakov" class="avatar">
            <x-article class="info-text">
                <x-text.home.h1 />
                <x-text.home.p />
                <x-text.home.h4 />
                <br>
                <a href="https://mail.google.com/" target="_blank">ilyayermakov85@gmail.com</a>
                <br>
                <a href="https://t.me/ilyayermakov" target="_blank"><img class="social"
                        src="./img/social/icons8-telegram-48.png">Telegram</a>
                <br>
                <a href="https://wa.me/qr/HP33NCV6GS7NP1" target="_blank"><img class="social"
                        src="./img/social/icons8-whatsapp-48.png">WhatsApp</a>
            </x-article>
        </header>
    </x-section>
@endsection
