@extends('app')

@section('content')

    {{--Меню--}}
    @include('menu')

    {{--Тайтл--}}
    @include('section-title')

    {{--Первый блок--}}
    @include('section-land-industry')

    {{--Второй блок--}}
    @include('section-land-gardening')

    {{--Третий блок--}}
    @include('section-land-agricultural')

@endsection

@section('font')

    <div class="global-font"></div>

    <div class="section-gradient"></div>

    {{--Кнопка для подьема к вверху--}}
    <a id="to-top-button" href="#app-title">
        <i class="material-icons medium">keyboard_arrow_up</i>
    </a>

    {{--Форма для обратной связи--}}
    @include('form')

@endsection
