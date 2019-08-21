<section id="land-gardening" class="app-land-gardening scrollspy">
    <div class="land-title" style="background-color: {{$globalSettings->color_block}}">
        <span class="text">{{$landTypes[1]->title}}</span>
    </div>

    <div class="land-block">

        @foreach($gardenings as $gardening)
            @component('one-land', ['land_type_id' => $gardening->land_type_id, 'img_name' => $gardening->img_name, 'buildingName' => 'Преимущества: '])
                @slot('wow')
                    {{$gardening->wow}}
                @endslot
                @slot('name')
                    {{$gardening->name}}
                @endslot
                @slot('category')
                    {{$gardening->category}}
                @endslot
                @slot('building')
                    {{$gardening->building}}
                @endslot
                @slot('price')
                    {{$gardening->price}}
                @endslot
                @slot('more')
                    /{{$gardening->id}}
                @endslot
                @slot('buildingIcons')
                    {!!$gardening->building_icons!!}
                @endslot
            @endcomponent
        @endforeach

    </div>
</section>
