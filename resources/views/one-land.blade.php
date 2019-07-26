<div class="row app-land-circle {{$class}} wow {{$wow}}">
    <div class="col s12 m8 offset-m2">
        <div class="card {{$card}}">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="image-circle-container">
                            <div class="image-circle">
                                <div class="image-circle-price">
                                    <i class="material-icons small">local_atm</i>
                                    <span>&nbsp;</span>
                                    <span>{{$price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m8">
                        <div class="text">
                            <div class="name">
                                <span class="name-text">{{$name}}</span>
                            </div>
                            <div class="category">
                                <span class="category-title">Категория земель: </span>
                                <span class="category-text">{{$category}}</span>
                            </div>
                            <div class="building">
                                <span class="building-title">Разрешенное использование: </span>
                                <span class="building-text">{{$building}}</span>
                            </div>
                            <div class="price">
                                <i class="material-icons small">local_atm</i>
                                <span>&nbsp;</span>
                                <span>{{$price}}</span>
                            </div>
                            <div class="more">
                                <a href="{{$more}}" target="_blank" class="waves-effect waves-light btn-small green darken-3"><i
                                        class="material-icons right">forward</i>Подробней</a>
                            </div>
                            <div class="building-icons">
                                <span class="building-icons-title">
                                    @if(isset($buildingName))
                                        {{$buildingName}}
                                    @else
                                        Что можно построить:&nbsp;
                                    @endif
                                </span>
                                <span class="building-icons-text">{{$buildingIcons}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
