<section id="land-agricultural" class="app-land-agricultural scrollspy">
    <div class="land-title" style="background-color: {{$globalSettings->color_block}}">
        <span class="text">{!! $landTypes[2]->title !!}</span>
    </div>

    <div class="land-block">

        @foreach($agriculturals as $agricultural)
            @component('one-land', ['land_type_id' => $agricultural->land_type_id, 'img_name' => $agricultural->img_name])
                @slot('wow')
                    {{$agricultural->wow}}
                @endslot
                @slot('name')
                    {{$agricultural->name}}
                @endslot
                @slot('category')
                    {{$agricultural->category}}
                @endslot
                @slot('building')
                    {{$agricultural->building}}
                @endslot
                @slot('price')
                    {{$agricultural->price}}
                @endslot
                @slot('more')
                    /{{$agricultural->id}}
                @endslot
                @slot('buildingIcons')
                    {!!$agricultural->building_icons!!}
                @endslot
            @endcomponent
        @endforeach

    </div>
</section>
