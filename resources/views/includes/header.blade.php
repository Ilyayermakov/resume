<nav class="mynavbar">
    <button class="btn-nav">&#9776;</button>
    <div class="mynav-list">
        <a href="{{ route('home') }}" aria-current="page">
            {{ __('Главная') }}
        </a>
        <a href="{{ route('about_myself') }}" aria-current="page">
            {{ __('О себе') }}
        </a>
        <a href="{{ route('job') }}" aria-current="page">
            {{ __('Работа') }}
        </a>
        <a href="{{ route('qualification') }}" aria-current="page">
            {{ __('Квалификация') }}
        </a>
        <a href="{{ route('skills') }}" aria-current="page">
            {{ __('Навыки') }}
        </a>
        <a class="current-time" id="current_date_time_block"></a>
        <a class="change">{{ __('ru') }}</a>
        <div class="toChange">
            <a href="{{ route('locale', 'en') }}">en</a>
            <a href="{{ route('locale', 'ru') }}">ru</a>
            <a href="{{ route('locale', 'es') }}">es</a>
        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnNav = document.querySelector('.btn-nav');
        const mynavList = document.querySelector('.mynav-list');
        btnNav.addEventListener('click', function() {
            document.querySelector('.mynavbar').classList.toggle('active');
        });
    });
</script>
