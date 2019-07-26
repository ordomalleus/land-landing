@extends('app')

@section('content')

    {{--Меню--}}
    @include('menu-more')

    {{--Страница с подробным описанием--}}
    @component('more-one')
        @slot('carousel')
            <a href="images/agricultural/visim/1.jpg"><img class="z-depth-2" src="images/agricultural/visim/1.jpg"></a>
            <a href="images/agricultural/visim/2.jpg"><img class="z-depth-2" src="images/agricultural/visim/2.jpg"></a>
            <a href="images/agricultural/visim/3.jpg"><img class="z-depth-2" src="images/agricultural/visim/3.jpg"></a>
            <a href="images/agricultural/visim/4.jpeg"><img class="z-depth-2" src="images/agricultural/visim/4.jpeg"></a>
            <a href="images/agricultural/visim/5.jpg"><img class="z-depth-2" src="images/agricultural/visim/5.jpg"></a>
            <a href="images/agricultural/visim/6.jpg"><img class="z-depth-2" src="images/agricultural/visim/6.jpg"></a>
            <a href="images/agricultural/visim/7.jpg"><img class="z-depth-2" src="images/agricultural/visim/7.png"></a>
            <a href="images/agricultural/visim/8.jpg"><img class="z-depth-2" src="images/agricultural/visim/8.jpg"></a>
            <a href="images/agricultural/visim/9.jpg"><img class="z-depth-2" src="images/agricultural/visim/9.jpg"></a>
        @endslot
        @slot('info')
            Висим — село в Добрянском районе Пермского края. Административный центр Висимского сельского поселения. Село расположено на берегу Камского водохранилища, при впадении в него реки Малый Висим, примерно в 30 км к северо-западу от города Добрянка и в 100 км от города Пермь. Добраться до земельного участка из Перми можно через Восточный обход.
            Земельные участки в непосредственной близости с водой, ровный ландшафт ,плодородные земли.
            Земли сельскохозяйственного назначения в селе Висим отлично подойдут для пашен, сенокосов ,растениеводства ,пастбищ, фермерского хозяйства.
        @endslot
        @slot('table')

            <ul>
                <li>Предоставляется аренда земельных участков 1 Га- 2000 рублей в год.</li>
                <li>Производим межевание участков под нужные вам  размеры.</li>
                <li>Для удобства поиска земельные участки разделены по урочищам.</li>
            </ul>
            <table>
                <tbody>
                <tr>
                    <td>Общая площадь</td>
                    <td>127 Га</td>
                </tr>
                <tr>
                    <td>Цена</td>
                    <td>90 000 рублей за Га.</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 1</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2730101:34, 59:18:2730101:32, 59:18:2730101:33</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>190 500 кв.м.(19,05 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский", ур. "За пилорамой"</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Земли сельскохозяйственного назначения</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для сельскохозяйственного производства</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 2</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2800101:6, 59:18:2800101:2, 59:18:280 01 01:0005, 59:18:280 01 01:0004, 59:18:2800101:0003</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>317 500 кв.м. (31,75 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. "Симково"</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 3</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2810101:0044</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>63 500 кв. м(6,35 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. "Ромашовское"</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 4</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2810101:0023, 59:18:2810101:54, 59:18:2810101:0022</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>190 500 кв.м.(19,05 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. "Ромашовское"</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 5</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2810101:42, 59:18:2810101:43</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>127 000 кв.м. (12,7 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. "Северовское"</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 6</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2820101:17, 59:18:2820101:0013</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>127 000 кв.м. (12,7 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 7</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2810101:26, 59:18:2810101:25</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>127 000 кв.м. (12,7 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур."У скважины"</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 8</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2820101:07, 59:18:2820101:08, 59:18:2820101:09, 59:18:2820101:010, 59:18:2820101:06</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>317 500 кв.м. (31,75 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, Висимский с\с ур. "За Шелепаевкой"</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                </tbody>
            </table>

        @endslot

    @endcomponent

@endsection
