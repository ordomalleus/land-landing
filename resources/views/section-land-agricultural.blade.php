<section id="land-agricultural" class="app-land-agricultural scrollspy">
    <div class="land-title">
        <span class="text">Земли сельскохозяйственного назначения</span>
    </div>

    <div class="land-block">

        {{--visim--}}
        @component('one-land')
            @slot('class')
                land-visim
            @endslot
            @slot('wow')
                bounceInLeft
            @endslot
            @slot('card')
                agricultural-card
            @endslot
            @slot('name')
                Земельные участки в с. Висим Добрянский район  127 Га!
            @endslot
            @slot('category')
                Земли сельскохозяйственного назначения
            @endslot
            @slot('building')
                Для сельскохозяйственного производства<br>Возможность аренды земельного участка.
            @endslot
            @slot('price')
                90 000 рублей за Га
            @endslot
            @slot('more')
                /more-agricultural-visim
            @endslot
            @slot('buildingIcons')
                <i class="material-icons medium tooltipped" data-tooltip="Пашня">spa</i>
                <i class="material-icons medium tooltipped" data-tooltip="Фермерское хозяйство">format_color_fill</i>
                <i class="material-icons medium tooltipped" data-tooltip="Пастбище">apps</i>
            @endslot
        @endcomponent

        {{--lipovo--}}
        @component('one-land')
            @slot('class')
                land-lipovo
            @endslot
            @slot('wow')
                bounceInRight
            @endslot
            @slot('card')
                agricultural-card
            @endslot
            @slot('name')
                Земельные участки в с.Липово Добрянский район 197 Га!
            @endslot
            @slot('category')
                Земли сельскохозяйственного назначения
            @endslot
            @slot('building')
                Для ведения личного подсобного хозяйства<br>Возможность аренды земельного участка.
            @endslot
            @slot('price')
                90 000 рублей за Га
            @endslot
            @slot('more')
                    /more-agricultural-lipovo
            @endslot
            @slot('buildingIcons')
                <i class="material-icons medium tooltipped" data-tooltip="Пашня">spa</i>
                <i class="material-icons medium tooltipped" data-tooltip="Фермерское хозяйство">format_color_fill</i>
                <i class="material-icons medium tooltipped" data-tooltip="Cенокос">texture</i>
            @endslot
        @endcomponent

    </div>
</section>
