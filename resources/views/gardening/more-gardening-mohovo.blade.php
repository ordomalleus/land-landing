@extends('app')

@section('content')

    {{--Меню--}}
    @include('menu-more')

    {{--Страница с подробным описанием--}}
    @component('more-one')
        @slot('carousel')
            <a href="images/gardening/mohovo/1.jpg"><img class="z-depth-2" src="images/gardening/mohovo/1.jpg"></a>
            <a href="images/gardening/mohovo/2.jpg"><img class="z-depth-2" src="images/gardening/mohovo/2.jpg"></a>
            <a href="images/gardening/mohovo/3.jpg"><img class="z-depth-2" src="images/gardening/mohovo/3.jpg"></a>
            <a href="images/gardening/mohovo/4.jpg"><img class="z-depth-2" src="images/gardening/mohovo/4.jpg"></a>
            <a href="images/gardening/mohovo/5.jpg"><img class="z-depth-2" src="images/gardening/mohovo/5.jpg"></a>
            <a href="images/gardening/mohovo/6.jpg"><img class="z-depth-2" src="images/gardening/mohovo/6.jpg"></a>
            <a href="images/gardening/mohovo/7.jpg"><img class="z-depth-2" src="images/gardening/mohovo/7.jpg"></a>
            <a href="images/gardening/mohovo/8.jpg"><img class="z-depth-2" src="images/gardening/mohovo/8.jpg"></a>
        @endslot
        @slot('info')
            Уникальный земельный участок находится в удивительном месте: экологически чистый район, отсутствие соседей, частный въезд, на участке есть и скала, и прямой выход к воде, и обрамляющий по периметру лесной массив.
            Участок находятся в 48 км от города Пермь вблизи СНТ "Прибой" (д.Мохово Полазненского г/п). Развитая инфраструктура п. Полазна в непосредственной близости, а также горнолыжная база и санаторий Демидково.
        @endslot
        @slot('table')
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:3600201:82 и 59:18:3600201:83</td>
                </tr>
                <tr>
                    <td>Общая площадь</td>
                    <td>8000 кв.м.</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>Пермский край, Добрянский район, Полазненское г/п, район д. Мохово.</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Земли сельскохозяйственного назначения</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения гражданами садоводства и огородничества</td>
                </tr>
                <tr>
                    <td>Коммуникации</td>
                    <td>Имеется возможность подключения к коммуникациям (газ, электричество)</td>
                </tr>
                <tr>
                    <td>Цена</td>
                    <td>168 750 рублей за сотку</td>
                </tr>
                <tr>
                    <td>Цена за весь участок</td>
                    <td>13 500 000 рублей</td>
                </tr>
                </tbody>
            </table>

        @endslot

    @endcomponent

@endsection
