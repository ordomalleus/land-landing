<section id="land-gardening" class="app-land-gardening scrollspy">
    <div class="land-title">
        <span class="text">Земли садоводства</span>
    </div>

    <div class="land-block">

        {{--11639--}}
        @component('one-land', ['buildingName' => 'Преимущества: '])
            @slot('class')
                land-11639
            @endslot
            @slot('wow')
                bounceInLeft
            @endslot
            @slot('card')
                gardening-card
            @endslot
            @slot('name')
                Земельный участок в Полазне для садоводства площадью 1,2 Га рядом с горнолыжной базой ЦАО "Полазна"
            @endslot
            @slot('category')
                Земли сельскохозяйственного назначения
            @endslot
            @slot('building')
                Для ведения гражданами садоводства и огородничества
            @endslot
            @slot('price')
                50 000 рублей за сотку.
            @endslot
            @slot('more')
                /more-gardening-11639
            @endslot
            @slot('buildingIcons')
                <i class="material-icons medium tooltipped" data-tooltip="Близость к городу">domain</i>
                <i class="material-icons medium tooltipped" data-tooltip="У реки">pool</i>
                <i class="material-icons medium tooltipped" data-tooltip="Горнолыжный курорт">ac_unit</i>
            @endslot
        @endcomponent

        {{--44361--}}
        @component('one-land', ['buildingName' => 'Преимущества: '])
            @slot('class')
                land-44361
            @endslot
            @slot('wow')
                bounceInRight
            @endslot
            @slot('card')
                gardening-card
            @endslot
            @slot('name')
                Земельный участок в Полазне (вблизи д.Бесово) для садоводства на первой береговой линии площадью 4,4 Га
            @endslot
            @slot('category')
                Земли сельскохозяйственного назначения
            @endslot
            @slot('building')
                Для ведения гражданами садоводства и огородничества
            @endslot
            @slot('price')
                50 000 рублей за сотку.
            @endslot
            @slot('more')
                /more-gardening-44361
            @endslot
            @slot('buildingIcons')
                <i class="material-icons medium tooltipped" data-tooltip="Близость к городу">domain</i>
                <i class="material-icons medium tooltipped" data-tooltip="Глубокая вода">directions_boat</i>
                <i class="material-icons medium tooltipped"
                   data-tooltip="Рядом магазины ,кафе">local_convenience_store</i>
            @endslot
        @endcomponent

        {{--mohovo--}}
        @component('one-land', ['buildingName' => 'Преимущества: '])
            @slot('class')
                land-mohovo
            @endslot
            @slot('wow')
                bounceInLeft
            @endslot
            @slot('card')
                gardening-card
            @endslot
            @slot('name')
                Земельный участок в Полазне (д.Мохово) площадью 8000 кв.м. на Каме
            @endslot
            @slot('category')
                Земли сельскохозяйственного назначения
            @endslot
            @slot('building')
                Для ведения гражданами садоводства и огородничества
            @endslot
            @slot('price')
                168 750 рублей за сотку.
            @endslot
            @slot('more')
                /more-gardening-mohovo
            @endslot
            @slot('buildingIcons')
                <i class="material-icons medium tooltipped" data-tooltip="Частный въезд">no_meeting_room</i>
                <i class="material-icons medium tooltipped" data-tooltip="Залив">public</i>
                <i class="material-icons medium tooltipped"
                   data-tooltip="Прямой выход к воде">transfer_within_a_station</i>
            @endslot
        @endcomponent

    </div>
</section>
