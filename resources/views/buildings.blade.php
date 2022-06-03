@extends('layouts.app')

@section('content')
    <div class="page-section">
        <div class="page-content">
            <h1 class="visuallyhidden">Новостройки</h1>
            <div class="page-loop__wrapper loop tab-content tab-content__active">
                <ul class="page-loop with-filter list_of_buildings">
                    @if (count($buildings) > 0)
                        @foreach ($buildings as $building)
                            <li class="page-loop__item wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">

                                <a href="#" class="favorites-link favorites-link__add" title="Добавить в Избранное" role="button">
                                    <span class="icon-heart"><span class="path1"></span><span class="path2"></span></span>
                                </a>

                                <a href="#" class="page-loop__item-link">

                                    <div class="page-loop__item-image">

                                        <img src="img/building.jpg" alt="">

                                        <div class="page-loop__item-badges">
                                            <span class="badge">Услуги 0%</span>
                                            <span class="badge">Комфорт+</span>
                                        </div>

                                    </div>

                                    <div class="page-loop__item-info">

                                        <h3 class="page-title-h3">Расцветай на Маркса</h3>

                                        <p class="page-text">Срок сдачи до 3 кв. 2022 г.</p>

                                        <div class="page-text to-metro">
                                            <span class="icon-metro icon-metro--red"></span>
                                            <span class="page-text">Студенческая <span> 5 мин.</span></span>
                                            <span class="icon-walk-icon"></span>
                                        </div>

                                        <span class="page-text text-desc">пр. Карла Маркса, 167/2</span>

                                    </div>

                                </a>

                            </li>
                        @endforeach
                    @endif
                </ul>

                <div class="show-more">

                    <button class="show-more__button" onclick="needMore()">

                        <span class="show-more__button-icon"></span>

                        Показать еще

                    </button>

                </div>

            </div>

            <div class="page-map tab-content map">

                <h1>Тут будет карта</h1>

            </div>

        </div>

        <div class="page-filter fixed">

            <div class="page-filter__wrapper">

                <form id="page-filter" class="page-filter__form">

                    <div class="page-filter__body">

                        <div class="page-filter__category">

                            <a href="#proximity" class="page-filter__category-link" data-toggle="collapse">
                                <h3 class="page-title-h3">Близость к метро</h3>
                                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M6.036 0.611083L0.191897 6.45712C-0.0639745 6.71364 -0.0639745 7.12925 0.191897 7.38642C0.44777 7.64294 0.863375 7.64294 1.11925 7.38642L6.49964 2.00408L11.88 7.38577C12.1359 7.64229 12.5515 7.64229 12.808 7.38577C13.0639 7.12925 13.0639 6.713 12.808 6.45648L6.96399 0.610435C6.71076 0.357856 6.28863 0.357856 6.036 0.611083Z"
                                            fill="#111111" />
                                </svg>
                            </a>

                            <div class="page-filter__category-list collapse show" id="proximity">
                                <ul class="proximity">
                                    <li>
                                        <div class="checkbox" >
                                            <input type="checkbox" name="<10" id="less10" onclick="setFiltr('go_time', 1);">
                                            <label for="less10">&lt;10</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox" >
                                            <input type="checkbox" name="10-20" id="10-20" onclick="setFiltr('go_time', 2);">
                                            <label for="10-20">10-20</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox" >
                                            <input type="checkbox" name="20-40" id="20-40" onclick="setFiltr('go_time', 3);">
                                            <label for="20-40">20-40</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox" >
                                            <input type="checkbox" name="40+" id="more40" onclick="setFiltr('go_time', 4);">
                                            <label for="more40">40+</label>
                                        </div>
                                    </li>
                                    <li class="w-100">
                                        <div class="checkbox" >
                                            <input type="checkbox" name="any" id="any" checked onclick="setFiltr('go_time', 0);">
                                            <label for="any">Любой</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="page-filter__category">

                            <a href="#deadline" class="page-filter__category-link" data-toggle="collapse">
                                <h3 class="page-title-h3">Срок сдачи</h3>
                                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M6.036 0.611083L0.191897 6.45712C-0.0639745 6.71364 -0.0639745 7.12925 0.191897 7.38642C0.44777 7.64294 0.863375 7.64294 1.11925 7.38642L6.49964 2.00408L11.88 7.38577C12.1359 7.64229 12.5515 7.64229 12.808 7.38577C13.0639 7.12925 13.0639 6.713 12.808 6.45648L6.96399 0.610435C6.71076 0.357856 6.28863 0.357856 6.036 0.611083Z"
                                            fill="#111111" />
                                </svg>
                            </a>

                            <div class="page-filter__category-list collapse show" id="deadline">
                                <ul class="deadline">
                                    <li>
                                        <div class="radio">
                                            <input type="radio" name="deadline" id="all" value="all" checked onclick="setFiltr('deadline', 0)">
                                            <label for="all">Любой</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio">
                                            <input type="radio" name="deadline" id="passed" value="passed" onclick="setFiltr('deadline', 1)">
                                            <label for="passed">Сдан</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio">
                                            <input type="radio" name="deadline" id="this-year" value="this-year" onclick="setFiltr('deadline', 2)">
                                            <label for="this-year">В этом году</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio">
                                            <input type="radio" name="deadline" id="next-year" value="next-year" onclick="setFiltr('deadline', 3)">
                                            <label for="next-year">В следующем году</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="page-filter__category">

                            <a href="#housing" class="page-filter__category-link" data-toggle="collapse">
                                <h3 class="page-title-h3">Класс жилья</h3>
                                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M6.036 0.611083L0.191897 6.45712C-0.0639745 6.71364 -0.0639745 7.12925 0.191897 7.38642C0.44777 7.64294 0.863375 7.64294 1.11925 7.38642L6.49964 2.00408L11.88 7.38577C12.1359 7.64229 12.5515 7.64229 12.808 7.38577C13.0639 7.12925 13.0639 6.713 12.808 6.45648L6.96399 0.610435C6.71076 0.357856 6.28863 0.357856 6.036 0.611083Z"
                                            fill="#111111" />
                                </svg>
                            </a>

                            <div class="page-filter__category-list collapse show" id="housing">
                                <ul class="housing">
                                    <li>
                                        <div class="checkbox" >
                                            <input type="checkbox" onclick="setFiltr('housing', 1)" name="economical" id="economical">
                                            <label for="economical">Эконом</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox" >
                                            <input type="checkbox" onclick="setFiltr('housing', 2)" name="comfort" id="comfort">
                                            <label for="comfort">Комфорт</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox" >
                                            <input type="checkbox" onclick="setFiltr('housing', 3)" name="business" id="business">
                                            <label for="business">Бизнес</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox" >
                                            <input type="checkbox" onclick="setFiltr('housing', 4)" name="elite" id="elite">
                                            <label for="elite">Элит</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="page-filter__category">

                            <a href="#general" class="page-filter__category-link" data-toggle="collapse">
                                <h3 class="page-title-h3">Основные опции</h3>
                                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M6.036 0.611083L0.191897 6.45712C-0.0639745 6.71364 -0.0639745 7.12925 0.191897 7.38642C0.44777 7.64294 0.863375 7.64294 1.11925 7.38642L6.49964 2.00408L11.88 7.38577C12.1359 7.64229 12.5515 7.64229 12.808 7.38577C13.0639 7.12925 13.0639 6.713 12.808 6.45648L6.96399 0.610435C6.71076 0.357856 6.28863 0.357856 6.036 0.611083Z"
                                            fill="#111111" />
                                </svg>
                            </a>

                            <div class="page-filter__category-list collapse show" id="general">
                                <ul class="general">
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="yard" id="yard">
                                            <label for="yard">Благоустроенный двор</label>
                                            <span class="icon-garden"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="finishing" id="finishing">
                                            <label for="finishing">Отделка под ключ</label>
                                            <span class="icon-paint"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="parking" id="parking">
                                            <label for="parking">Подземный паркинг</label>
                                            <span class="icon-parking"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="brick" id="brick">
                                            <label for="brick">Кирпичный дом</label>
                                            <span class="icon-brick"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="river" id="river">
                                            <label for="river">Вид на реку</label>
                                            <span class="icon-water"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="forest" id="forest">
                                            <label for="forest">Лес рядом</label>
                                            <span class="icon-tree"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="sale" id="sale">
                                            <label for="sale">Есть акции</label>
                                            <span class="icon-sale"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="page-filter__category">

                            <a href="#additional" class="page-filter__category-link" data-toggle="collapse">
                                <h3 class="page-title-h3">Дополнительные опции</h3>
                                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M6.036 0.611083L0.191897 6.45712C-0.0639745 6.71364 -0.0639745 7.12925 0.191897 7.38642C0.44777 7.64294 0.863375 7.64294 1.11925 7.38642L6.49964 2.00408L11.88 7.38577C12.1359 7.64229 12.5515 7.64229 12.808 7.38577C13.0639 7.12925 13.0639 6.713 12.808 6.45648L6.96399 0.610435C6.71076 0.357856 6.28863 0.357856 6.036 0.611083Z"
                                            fill="#111111" />
                                </svg>
                            </a>

                            <div class="page-filter__category-list collapse show" id="additional">
                                <ul class="additional">
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="without-cars" id="without-cars">
                                            <label for="without-cars">Двор без машин</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="ceiling" id="ceiling">
                                            <label for="ceiling">Высокие потолки</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="pantries" id="pantries">
                                            <label for="pantries">Есть кладовые</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="windows" id="windows">
                                            <label for="windows">Панорамные окна</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checkbox">
                                            <input type="checkbox" name="low-rise" id="low-rise">
                                            <label for="low-rise">Малоэтажный (&lt;10 этажей)</label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="collapse" id="additional_collapse">
                                    <ul class="additional additional__collapse">
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" name="windows-2" id="windows-2">
                                                <label for="windows-2">Панорамные окна</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" name="low-rise-2" id="low-rise-2">
                                                <label for="low-rise-2">Малоэтажный (&lt;10 этажей)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" name="without-cars-2" id="without-cars-2">
                                                <label for="without-cars-2">Двор без машин</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" name="ceiling-2" id="ceiling-2">
                                                <label for="ceiling-2">Высокие потолки</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" name="pantries-2" id="pantries-2">
                                                <label for="pantries-2">Есть кладовые</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#additional_collapse" class="page-filter__category-more" data-toggle="collapse" data-count="9"
                                   role="button">Показать еще (9)</a>
                            </div>

                        </div>

                        <div class="page-filter__category service">

                            <div class="checkbox">
                                <input type="checkbox" name="service" id="service" checked>
                                <label for="service"><span class="checkbox__box"></span>Услуги 0%</label>
                                <span class="tip tip-info" data-toggle="popover" data-placement="top"
                                      data-content="And here's some amazing content. It's very engaging. Right?">
						<span class="icon-prompt"></span>
					</span>
                            </div>

                        </div>

                    </div>

                    <div class="page-filter__buttons">

                        <button class="button button--pink w-100" type="button" id="apply_filter" onclick="useFiltr()">Применить фильтры</button>

                        <button class="button w-100" type="reset" id="reset_filter" onclick="resetFiltr()">Сбросить фильтры
                            <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M8.5 0.942702L7.5573 0L4.49999 3.05729L1.4427 0L0.5 0.942702L3.55729 3.99999L0.5 7.0573L1.4427 8L4.49999 4.94271L7.55728 8L8.49998 7.0573L5.44271 3.99999L8.5 0.942702Z" />
                            </svg>
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    let buildings_filters = {page: 0, limit: 3};
    let buildings = {};
    let buildings_metros = {};

    $( document ).ready(function() {
        getBuildings();
    });

    function getBuildings(){
        $.ajax({
            method: "POST",
            url: "/getbuildings",
            data: { "_token": "{{ csrf_token() }}", filters: buildings_filters },
            headers: {
                'X-CSRF-Token': $('meta[name="_token"]').attr('content')
            },
        })
            .done(function( msg ) {
                let cnt = 0;
                for (let i in msg.resp.buildings) {
                    cnt++;
                    buildings[msg.resp.buildings[i].id] = msg.resp.buildings[i];
                }

                for (let i in msg.resp.metros) {
                    if (!buildings_metros.hasOwnProperty(msg.resp.metros[i].building_id)) buildings_metros[msg.resp.metros[i].building_id] = [];
                    buildings_metros[msg.resp.metros[i].building_id].push(msg.resp.metros[i]);
                }
                showBuildings();
                if (cnt < buildings_filters.limit) {
                    $('.show-more').css('visibility', 'hidden');
                }
            })
            .fail(function( msg ) {
                console.log(msg);
                alert( "Error: " + msg );
            });
    }

    function needMore(){
        buildings_filters.page++;
        getBuildings();
    }

    function getMinTimeToMetro(id) {
        if (!buildings_metros[id].hasOwnProperty(0)) { return ['', 0];}
        let min = buildings_metros[id][0]['togo_time'];
        let indx = 0;
        for (let i in buildings_metros[id]) {
            if (buildings_metros[id][i]['togo_time'] < min) {
                min = buildings_metros[id][i]['togo_time'];
                indx = i;
            }
        }
        return [buildings_metros[id][indx]['title'], buildings_metros[id][indx]['togo_time']];
    }

    function setFiltr(what, val) {
        if (what === 'deadline') {
            if (!buildings_filters.hasOwnProperty(what)) buildings_filters[what] = 0;
            buildings_filters[what] = val;
            return;
        }

        if (what === 'go_time') {
            if (val === 0) {
                buildings_filters.go_time = [];
                return;
            }
        }

        if (!buildings_filters.hasOwnProperty(what)) buildings_filters[what] = [];
        if (buildings_filters[what].indexOf(val) === -1) buildings_filters[what].push(val);
        else buildings_filters[what].splice(buildings_filters[what].indexOf(val),1);
    }

    function arr_cnt() {
        let cnt = 0;
        for (let i in buildings_filters.go_time) cnt++;
        return cnt;
    }

    function useFiltr() {
        let show = {};
        for (let i in buildings) {
            show[buildings[i]['id']] = 1;
        }

        if (buildings_filters.hasOwnProperty('deadline')) {

            let timeInMs = Math.floor(Date.now() / 1000);

            if (buildings_filters.deadline === 1) {
                for (let id in buildings) {
                    let parts = buildings[id].jk_cede_date.split('-');
                    let bdate = new Date(parts[0], parts[1] - 1, parts[2]);
                    let dc = Math.floor(bdate.getTime() / 1000);
                    if (dc > timeInMs) show[buildings[id]['id']] = 0;
                }
            }
            if (buildings_filters.deadline === 2) {
                for (let id in buildings) {
                    let parts = buildings[id].jk_cede_date.split('-');
                    let bdate = new Date(parts[0], parts[1] - 1, parts[2]);
                    let dc = Math.floor(bdate.getTime() / 1000);
                    if ( (parseInt(bdate.getFullYear()) !== parseInt(new Date().getFullYear())) || (dc < timeInMs)) {
                        show[buildings[id]['id']] = 0;
                    }
                }
            }
            if (buildings_filters.deadline === 3) {
                for (let id in buildings) {
                    let parts = buildings[id].jk_cede_date.split('-');
                    let bdate = new Date(parts[0], parts[1] - 1, parts[2]);
                    let dc = Math.floor(bdate.getTime() / 1000);
                    if ( (parseInt(bdate.getFullYear()) !== parseInt(new Date().getFullYear())+1) || (dc < timeInMs)) {
                        show[buildings[id]['id']] = 0;
                    }
                }
            }
        }

        if (buildings_filters.hasOwnProperty('go_time')) {
            if ((buildings_filters.go_time.indexOf(0) !== -1) || arr_cnt() === 4 || arr_cnt() === 0) {
                //console.log('wtf??');
            } else if (buildings_filters.go_time.indexOf(0) === -1 || arr_cnt() < 4) {
                for (let id in buildings_metros) {
                    let flag = false;
                    for (let i in buildings_metros[id]) {
                        if (buildings_filters.go_time.indexOf(1) !== -1 &&
                            buildings_filters.go_time.indexOf(2) === -1 &&
                            buildings_filters.go_time.indexOf(3) === -1 &&
                            buildings_filters.go_time.indexOf(4) === -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] < 10) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) !== -1 &&
                            buildings_filters.go_time.indexOf(2) !== -1 &&
                            buildings_filters.go_time.indexOf(3) === -1 &&
                            buildings_filters.go_time.indexOf(4) === -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] < 20) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) !== -1 &&
                            buildings_filters.go_time.indexOf(2) !== -1 &&
                            buildings_filters.go_time.indexOf(3) !== -1 &&
                            buildings_filters.go_time.indexOf(4) === -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] < 40) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) !== -1 &&
                            buildings_filters.go_time.indexOf(2) === -1 &&
                            buildings_filters.go_time.indexOf(3) !== -1 &&
                            buildings_filters.go_time.indexOf(4) === -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] < 10 || (buildings_metros[id][i]['togo_time'] > 20 && buildings_metros[id][i]['togo_time'] < 40)) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) !== -1 &&
                            buildings_filters.go_time.indexOf(2) === -1 &&
                            buildings_filters.go_time.indexOf(3) === -1 &&
                            buildings_filters.go_time.indexOf(4) !== -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] < 10 || (buildings_metros[id][i]['togo_time'] > 40)) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) !== -1 &&
                            buildings_filters.go_time.indexOf(2) === -1 &&
                            buildings_filters.go_time.indexOf(3) !== -1 &&
                            buildings_filters.go_time.indexOf(4) !== -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] < 10 || (buildings_metros[id][i]['togo_time'] > 20)) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) === -1 &&
                            buildings_filters.go_time.indexOf(2) !== -1 &&
                            buildings_filters.go_time.indexOf(3) !== -1 &&
                            buildings_filters.go_time.indexOf(4) !== -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] > 10) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) === -1 &&
                            buildings_filters.go_time.indexOf(2) === -1 &&
                            buildings_filters.go_time.indexOf(3) !== -1 &&
                            buildings_filters.go_time.indexOf(4) !== -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] > 20) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) === -1 &&
                            buildings_filters.go_time.indexOf(2) !== -1 &&
                            buildings_filters.go_time.indexOf(3) === -1 &&
                            buildings_filters.go_time.indexOf(4) !== -1
                        ) {
                            if ((buildings_metros[id][i]['togo_time'] > 10 && buildings_metros[id][i]['togo_time'] < 20) || buildings_metros[id][i]['togo_time'] > 40) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) === -1 &&
                            buildings_filters.go_time.indexOf(2) !== -1 &&
                            buildings_filters.go_time.indexOf(3) === -1 &&
                            buildings_filters.go_time.indexOf(4) === -1
                        ) {
                            if ((buildings_metros[id][i]['togo_time'] > 10 && buildings_metros[id][i]['togo_time'] < 20)) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) === -1 &&
                            buildings_filters.go_time.indexOf(2) !== -1 &&
                            buildings_filters.go_time.indexOf(3) !== -1 &&
                            buildings_filters.go_time.indexOf(4) === -1
                        ) {
                            if ((buildings_metros[id][i]['togo_time'] > 10 && buildings_metros[id][i]['togo_time'] < 40)) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) === -1 &&
                            buildings_filters.go_time.indexOf(2) === -1 &&
                            buildings_filters.go_time.indexOf(3) !== -1 &&
                            buildings_filters.go_time.indexOf(4) === -1
                        ) {
                            if ((buildings_metros[id][i]['togo_time'] > 20 && buildings_metros[id][i]['togo_time'] < 40)) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) === -1 &&
                            buildings_filters.go_time.indexOf(2) === -1 &&
                            buildings_filters.go_time.indexOf(3) !== -1 &&
                            buildings_filters.go_time.indexOf(4) !== -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] > 20) flag = true;
                        } else if (buildings_filters.go_time.indexOf(1) === -1 &&
                            buildings_filters.go_time.indexOf(2) === -1 &&
                            buildings_filters.go_time.indexOf(3) === -1 &&
                            buildings_filters.go_time.indexOf(4) !== -1
                        ) {
                            if (buildings_metros[id][i]['togo_time'] > 40) flag = true;
                        }

                    }

                    if (!flag) show[buildings[id]['id']] = 0;

                }
            }
        }



        for (let i in buildings) {
            if (show[buildings[i]['id']]) $('.bldng_' + buildings[i]['id']).show();
            else $('.bldng_' + buildings[i]['id']).hide();
        }

    }

    function resetFiltr() {
        buildings_filters = {page: 0, limit: 3};
        useFiltr();
    }

    function showBuildings(){
        for (let i in buildings) {
            let mt = getMinTimeToMetro(buildings[i]['id']);
            let html = '<li style="visibility: visible;" class="page-loop__item wow animate__animated animate__fadeInUp bldng_'+buildings[i]['id']+'" data-wow-duration="0.8s">\n' +
                '                                <a href="#" class="favorites-link favorites-link__add" title="Добавить в Избранное" role="button">\n' +
                '                                    <span class="icon-heart"><span class="path1"></span><span class="path2"></span></span>\n' +
                '                                </a>\n' +
                '                                <a href="#" class="page-loop__item-link">\n' +
                '                                    <div class="page-loop__item-image">\n' +
                '                                        <img src="img/building.jpg" alt="">\n' +
                '                                        <div class="page-loop__item-badges">\n' +
                '                                            <span class="badge">Услуги '+buildings[i].services+'%</span>\n' +
                '                                            <span class="badge">'+buildings[i].jk_class+'</span>\n' +
                '                                        </div>\n' +
                '                                    </div>\n' +
                '                                    <div class="page-loop__item-info">\n' +
                '                                        <h3 class="page-title-h3">'+buildings[i].title+'</h3>\n' +
                '                                        <p class="page-text">Срок сдачи '+buildings[i].jk_cede_date+'</p>\n' +
                '                                        <div class="page-text to-metro">\n' +
                '                                            <span class="icon-metro icon-metro--red"></span>\n' +
                '                                            <span class="page-text">'+mt[0]+' <span> '+mt[1]+' мин.</span></span>\n' +
                '                                            <span class="icon-walk-icon"></span>\n' +
                '                                        </div>\n' +
                '                                        <span class="page-text text-desc">'+buildings[i].address+'</span>\n' +
                '                                    </div>\n' +
                '                                </a>\n' +
                '                            </li>';
            if (i > buildings_filters.page*buildings_filters.limit) {
                $('.list_of_buildings').append(html);
            }
        }
        useFiltr();
    }
</script>