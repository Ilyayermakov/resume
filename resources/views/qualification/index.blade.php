@extends('layouts.main')
@section('page.title', __('Квалификация'))
<x-section>
    <x-article class="card bg-yellow">
        <x-text.qualification.h1 />
        <br>
        <ul>
            <x-text.qualification.li5 />
            <img src="./img/qualification/HTML&CSS.png" alt="Certificate" class="slide">
            <br>
            <br>
            <x-text.qualification.li4 />
            <img src="./img/qualification/JavaScript.png" alt="Certificate" class="slide">
            <br>
            <br>
            <x-text.qualification.li3 />
            <img src="./img/qualification/introductiontosqldatabases.jpeg" alt="Сertificate" class="slide">
            <img src="./img/qualification/introductiontosqldatabases2.jpeg" alt="Сertificate" class="slide">
            <img src="./img/qualification/introductiontosqldatabases3.jpeg" alt="Сertificate" class="slide">
            <br>
            <br>
            <x-text.qualification.li2 />
            <img src="./img/qualification/basicsofdatabases.jpeg" alt="Сertificate" class="slide">
            <br>
            <br>
            <x-text.qualification.li1 />
            <img src="./img/qualification/basicsofpython.jpeg" alt="Сertificate" class="slide">
        </ul>
    </x-article>
</x-section>
