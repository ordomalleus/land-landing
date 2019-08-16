@extends('app')

@section('content')

    {{--Меню--}}
    @include('menu-more')

    {{--Страница с подробным описанием--}}
    @component('more-one')
        @slot('carousel')
            @foreach($land->land_images as $images)
                <a href="land-images/{{$images->img_name}}"><img class="z-depth-2" src="land-images/{{$images->img_name}}"></a>
            @endforeach
        @endslot
        @slot('info')
            {!! $land->info !!}
        @endslot
        @slot('table')
            {!! $land->table !!}
        @endslot

    @endcomponent

@endsection
