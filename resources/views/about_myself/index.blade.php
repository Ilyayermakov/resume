@extends('layouts.main')
<link rel="stylesheet" href="./css/me.css">
@section('page.title', __('О себе'))
<x-section>
    <x-article class="card bg-darkyellow">
        <x-text.about_myself.h1 />
        <br>
        <x-text.about_myself.h3 />
        <br>
        <x-text.about_myself.h2 />
        <x-text.about_myself.ul />
    </x-article>
</x-section>
