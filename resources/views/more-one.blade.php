<section id="app-title" class="more-one">

{{--    <div class="contacts-container">--}}
{{--        <div class="row">--}}
{{--            <div class="col s12 offset-m2 m8 center">--}}
{{--                <h4>Контакты</h4>--}}
{{--                <div class="contacts center">--}}
{{--                    <div class="contacts-phone">--}}
{{--                        <i class="material-icons small">phone</i>--}}
{{--                        <a href="tel:+79028021002" style="padding-right: 2rem">+7 902 802 1002</a>--}}
{{--                    </div>--}}
{{--                    <div class="contacts-e-mail">--}}
{{--                        <i class="material-icons small">email</i>--}}
{{--                        <a href="mailto:nikolaeva.os@mail.ru">nikolaeva.os@mail.ru</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row">
        <div class="col offset-m2 m8">
            <div id="lightgallery" class="app-slider">
                {{$carousel}}
            </div>
        </div>
    </div>

    <div class="info">
        <div class="row">
            <div class="col m12 center">
                <h3 class="title">Описание</h3>
            </div>
            <div class="col s12 offset-m2 m8">
                <div class="text">{{$info}}</div>
            </div>
        </div>
    </div>

    <div class="table-container">
        <div class="row">
            <div class="col offset-m2 m8">
                {{$table}}
            </div>
        </div>
    </div>

</section>
