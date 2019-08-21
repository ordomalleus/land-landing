<section id="land-industry" class="app-land-industry scrollspy">

    <div class="land-title" style="background-color: {{$globalSettings->color_block}}">
        <span class="text">{!! $landTypes[0]->title !!}</span>
    </div>

    <div class="land-block">

        @foreach($industrys as $industry)
            @component('one-land', ['land_type_id' => $industry->land_type_id, 'img_name' => $industry->img_name])
                @slot('wow')
                    {{$industry->wow}}
                @endslot
                @slot('name')
                    {{$industry->name}}
                @endslot
                @slot('category')
                    {{$industry->category}}
                @endslot
                @slot('building')
                    {{$industry->building}}
                @endslot
                @slot('price')
                    {{$industry->price}}
                @endslot
                @slot('more')
                    /{{$industry->id}}
                @endslot
                @slot('buildingIcons')
                    {!!$industry->building_icons!!}
                @endslot
            @endcomponent
        @endforeach

    </div>

</section>
