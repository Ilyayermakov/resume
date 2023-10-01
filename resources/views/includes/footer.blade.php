<x-section>
<footer class="footer">
    <h2>{{__('Карта сайта:')}}</h2>
    <div class="footer-left">
        <a href="{{ route('home') }}" aria-current="page">
            {{ __('Главная') }}
        </a>
        <br>
        <a href="{{ route('about_myself') }}" aria-current="page">
            {{ __('О себе') }}
        </a>
        <br>
        <a href="{{ route('job') }}" aria-current="page">
            {{ __('Работа') }}
        </a>
        <br>
        <a href="{{ route('qualification') }}" aria-current="page">
            {{ __('Квалификация') }}
        </a>
        <br>
        <a href="{{ route('skills') }}" aria-current="page">
            {{ __('Навыки') }}
        </a>
    </div>
    <h2>{{__('Мои контакты:')}}</h2>
    <div class="footer-right">
        <a href="https://mail.google.com/" target="_blank">ilyayermakov85@gmail.com</a>
        <br>
        <a href="https://t.me/ilyayermakov" target="_blank"><img class="social"
                src="./img/social/icons8-telegram-48.png">Telegram</a>
        <br>
        <a href="https://wa.me/qr/HP33NCV6GS7NP1" target="_blank"><img class="social"
                src="./img/social/icons8-whatsapp-48.png">WhatsApp</a>
    </div>
</footer>
</x-section>
