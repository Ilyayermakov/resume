@extends('layouts.main')
<link rel="stylesheet" href="./css/skills.css">
@section('page.title', __('Навыки'))
<x-section>
    <x-article class="card bg-blue">
        <x-text.skills.h1 />
        <br>
            <table>
                <thead>
                    <tr>
                        <th>{{__('Название')}}</th>
                        <th>{{__('Пояснение')}}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>HTML&CSS</td>
                        <td>{{__('Я конечно не гранд мастер но основы знаю. Как бы я еще сделал этот сайт.')}}</td>
                    </tr>
                    <tr>
                        <td>JavaScript</td>
                        <td>{{__('Знаю немного, использую по мере надобности. На этом сайте тоже использовал.')}}</td>
                    </tr>
                    <tr>
                        <td>JQuery</td>
                        <td>{{__('Знаю немного, использую по мере надобности. На этом сайте тоже использовал.')}}</td>
                    </tr>
                    <tr>
                        <td>SQL</td>
                        <td>{{__('У меня хорошие знания администратора SQL но и создать базу данных я в сотоянии, как с помощью миграций на Laravel, так и с помощью различных программ, например MS Management studio или phpMyAdmin.')}}</td>
                    </tr>
                    <tr>
                        <td>PHP</td>
                        <td>{{__('Куда же без него, свой первый сайт писал на чистом PHP.')}}</td>
                    </tr>
                    <tr>
                        <td>Laravel</td>
                        <td>{{__('Всех тонкостей работы с этим фреймворком я конечно не знаю но написал этот сайт и еще несколько.')}}</td>
                    </tr>
                </tbody>
            </table>
    </x-article>
</x-section>
