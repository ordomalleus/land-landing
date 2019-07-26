@extends('app')

@section('content')

    {{--Меню--}}
    @include('menu-more')

    {{--Страница с подробным описанием--}}
    @component('more-one')
        @slot('carousel')
            <a href="images/agricultural/lipovo/1.jpg"><img class="z-depth-2" src="images/agricultural/lipovo/1.jpg"></a>
            <a href="images/agricultural/lipovo/2.jpg"><img class="z-depth-2" src="images/agricultural/lipovo/2.jpg"></a>
            <a href="images/agricultural/lipovo/3.jpg"><img class="z-depth-2" src="images/agricultural/lipovo/3.jpg"></a>
            <a href="images/agricultural/lipovo/4.png"><img class="z-depth-2" src="images/agricultural/lipovo/4.png"></a>
            <a href="images/agricultural/lipovo/5.png"><img class="z-depth-2" src="images/agricultural/lipovo/5.png"></a>
            <a href="images/agricultural/lipovo/6.png"><img class="z-depth-2" src="images/agricultural/lipovo/6.png"></a>
        @endslot
        @slot('info')
            Деревня Липово расположена примерно всего в 16 км к северо-западу от города Добрянка и в 87 км от города Пермь . Добраться из Перми можно по Восточному обходу либо Соликамскому тракту ,время в пути составит 1,5 часа.
            Множество земельных участков ,с ровным ландшафтом. Идеальное место для сельскохозяйственной деятельности ,фермерских хозяйств,  в том числе можно использовать для пашен, сенокосов, пастбищ, посадки овощей.
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
                    <td>197 Га.</td>
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
                    <td>59:18:2730102:50, 59:18:2730102:54, 59:18:2730102:55, 59:18:2730102:53,
                        59:18:2730102:52, 59:18:2730102:49, 59:18:2730102:51, 59:18:2730102:44
                    </td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>476 000 кв.м.  ( 47,6 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. " Посадское левое" </td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Земли сельскохозяйственного назначения</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения личного подсобного хозяйства</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 2</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2730102:38</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>31 497 кв. м(3,1 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. Посадское правое"</td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Земли сельскохозяйственного назначения</td>
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
                    <td>59:18:2730102:58</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>63 500 кв. м (6,35Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>Пермский край, г. Добрянка, Висимское сельское поселение, СПК "Добрянский", вблизи
                        д. Королево
                    </td>
                </tr>
                <tr>
                    <td>Категория земель</td>
                    <td>Земли сельскохозяйственного назначения</td>
                </tr>
                <tr>
                    <td>Разрешенное использование</td>
                    <td>Для ведения крестьянского (фермерского) хозяйства</td>
                </tr>
                </tbody>
            </table>

            <h5 class="center">Участок 4</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2730101:30, 59:18:2730101:36, 59:18:2730101:37, 59:18:2730101:35,
                        59:18:2730101:31
                    </td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>317 500 кв. м(31,75 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский", ур. "У хранилища"</td>
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

            <h5 class="center">Участок 5</h5>
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

            <h5 class="center">Участок 6</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2730103:32, 59:18:2730103:33, 59:18:2730103:34</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>190 500 кв.м.(19,05 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур."Санково"</td>
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
                    <td>59:18:2730103:24, 59:18:2730103:25, 59:18:2730103:26, 59:18:2730103:27</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>254  000 (25,4Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК Добрянский ур. "У Дивьи"</td>
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
                    <td>59:18:2730103:39, 59:18:2730103:40</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>127 000 кв.м. (12,7 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. "Фаденовская целина"</td>
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
                    <td>59:18:2730103:39, 59:18:2730103:40</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>127 000 кв.м. (12,7 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. "Фаденовская целина"</td>
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

            <h5 class="center">Участок 9</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2730103:43, 59:18:2730103:45</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>127 000 кв.м. (12,7 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. " Антипьево"</td>
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

            <h5 class="center">Участок 10</h5>
            <table>
                <tbody>
                <tr>
                    <td>Кадастровый номер</td>
                    <td>59:18:2730103:49, 59:18:2730103:50</td>
                </tr>
                <tr>
                    <td>Площадь</td>
                    <td>127 000 кв.м. (12,7 Га)</td>
                </tr>
                <tr>
                    <td>Адрес</td>
                    <td>край Пермский, район Добрянский, г. Добрянка, СПК "Добрянский" ур. "Кетово"</td>
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
