@extends('Front::layouts.default')
@section('title', trans('site.Contacts')." | КТРК")


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
@endsection

@section('content')

    <div class="container main-wrapper">

        <div class="row">
            <section class="content clearfix">
                <div class="panel panel-default panel-contacts">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ trans('site.Contacts') }}</h3>
                    </div>
                    <div class="panel-body">

                        @if($lc=='kg')
                            <table class="table table-bordered col-md-7">
                                <thead>
                                <tr>
                                    <th>Бөлүм</th>
                                    <th>Байланыш маалымат/E-mail</th>
                                    <th>Социалдык тармактар</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Коомдук телерадиоберүү корпорациясы</td>
                                    <td>
                                        Кыргыз Республикасы, Бишкек шаары, Жаш Гвардия бульвары, 59, 720010
                                        <p><a href="http://www.ktrk.kg">www.ktrk.kg</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/KTRKkg" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    KTRKkg
                                                </a>
                                            </li>
                                            <li class="tw">
                                                <a href="https://twitter.com/KTRK_kg" target="_blank">
                                                    <i class="fa fa-twitter-square"></i>
                                                    @KTRK_kg
                                                </a>
                                            </li>
                                            <li class="yt">
                                                <a href="https://www.youtube.com/user/KTRKkg" target="_blank">
                                                    <i class="fa fa-youtube-square"></i>
                                                    KTRKkg
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>КТРК башкы директору </td>
                                    <td>Кабылдама: +996 312 39 20 59
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Телеберүү боюнча Башкы директорунун орун басары </td>
                                    <td>Кабылдама: +996 0312 39 20 59
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Радио боюнча Башкы директорунун орун басары </td>
                                    <td>Кабылдама: +996 312 39 20 59 
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Республикалык радиотелеборборунун директору</td>
                                    <td>Кабылдама: +996 312 39 22 67
                                        <p>Е-mail: <a href="mailto:office-rrtc@ktrk.kg">office-rrtc@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>КТРК Байкоочу кеңеши</td>
                                    <td>Кабылдама: +996 312 ­65 67 21
                                        <p>Е-mail: <a href="mailto:sovetotv@gmail.com">sovetotv@gmail.com</a></p>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>КТРК Редакциялык кеңешчи</td>
                                    <td>Кабылдама: +996 312 65 67 21
                                        <p>Е-mail: <a href="mailto:redsovetnik@ktrk.kg">redsovetnik@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>                                
                                <tr>
                                    <td>Коомдук кабылдама</td>
                                    <td>Кабылдама: +996 312 65 66 08
                                    <p>КТРКнын административдик имараты, 1-кабат.</p>
                                    </td>
                                    <td></td>
                                </tr>                                
                                <tr>
                                    <td>КТРКнын расмий сайтын колдоо бөлүмү </td>
                                    <td>Телефон:+996 312 39 22 38
                                        <p>Е-mail: <a href="mailto:ktrksite@gmail.com">ktrksite@gmail.com</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Жарнак-комерция бөлүмү</td>
                                    <td>Кабылдама: +996 312 39 15 80
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>"Ала-Тоо" маалымат программасы</td>
                                    <td>Телефон:+996 312 39 15 65
                                    <p>Факс:+996 312 39 15 65</p>
                                        <p>Е-mail: <a href="mailto:alatoo@ntrk.kg">alatoo@ntrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>"Музыка" телеканалы</td>
                                    <td>Байланыш телефону: +996 312 65 66 48
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="yt">
                                                <a href="https://www.youtube.com/user/muzykaktrk" target="_blank">
                                                    <i class="fa fa-youtube-square"></i>
                                                    muzykaktrk
                                                </a>
                                            </li>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/muzykaotrk" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    muzykaotrk
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>"Баластан" телеканалы</td>
                                    <td>Байланыш телефону: +996 312 65 67 14; +996 312 65 66 44
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/BaldarFmRadiosu" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    BaldarFmRadiosu
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>«КТРК Спорт» телеканалы</td>
                                    <td>Телефон: +996 312 652100
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/KTRKfootball" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    KTRKfootball
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>“Достук” радиосу</td>
                                    <td>Телефон:
                                        <p>+996 312 65 85 05</p>
                                        <p>+996 312 65 66 10</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/DostukRadiosu" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    DostukRadiosu
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>"Биринчи радио"</td>
                                    <td>Телефон: +996 312 65 84 99
                                        <p>Е-mail: <a href="mailto:kabarlar@ntrk.kg">kabarlar@ntrk.kg</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/1Radiokg" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    1Radiokg
                                                </a>
                                            </li>
                                            <li class="tw">
                                                <a href="https://twitter.com/BirinchiRadio" target="_blank">
                                                    <i class="fa fa-twitter-square"></i>
                                                    @BirinchiRadio
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>“Кыргыз радиосу”</td>
                                    <td>Байланыш телефондору:
                                        <p>+996 312 65 66 39</p>
                                        <p>+996 312 65 67 19</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/kyrgyzrаdiosu" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    kyrgyzrаdiosu
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>“Миң кыял” FM радиосу</td>
                                    <td>Байланыш телефондору:
                                        <p>+996 312 65 10 26</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/Minkiyalfm" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    MinKyalFm
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>"Балдар FM" радиосу</td>
                                    <td>Байланыш телефону:
                                        <p>+996 312 65 66 44</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/BaldarFmRadiosu">
                                                    <i class="fa fa-facebook-square"></i>
                                                    BaldarFmRadiosu
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>"ЗАМАНА" студиясы</td>
                                    <td>Байланыш телефону: +996  312 67 01 87
                                        <p>Е-mail: <a href="mailto:zamana2020@mail.ru">zamana2020@mail.ru</a></p>
                                        <p>Дареги: Эркиндик бульвары, 122</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/Zamanakg" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    Zamanakg
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Социалдык, экономикалык жана инновациялык  көрсөтүүлөрдүн редакциясы</td>
                                    <td>Телефон: +996 312 65 67 05
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>"Ибарат"маданий студисы </td>
                                    <td>Телефон: +996 312 39 20 72;
                                        <p>+996 312 65 97 34</p>
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>"Жаштар" студиясы</td>
                                    <td>Байланыш телефону: +996 312 65 21 00
                                        <p>+996 312 65 92 43</p> 
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="col-md-4 hidden">
                                <div class="row">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="usr">Ваше имя *</label>
                                            <input type="text" class="form-control" id="usr">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Ваш email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Тема *</label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">Сообщение *</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success contact-form-button form-submit">Отправить сообщение</button>
                                    </form>
                                </div>
                            </div>

                        @else
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Подразделение</th>
                                    <th>Контактная информация</th>
                                    <th>Социальные сети</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Общественная телерадиовещательная корпорация</td>
                                    <td>
                                        <p>Кыргызстан, г.Бишкек,</p>
                                        <p>бульвар Молодой Гвардии, 59</p>
                                        <p>индекс: 720010</p>
                                        <p>сайт: <a target="_blank" href="http://www.ktrk.kg">www.ktrk.kg</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/KTRKkg" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    KTRKkg
                                                </a>
                                            </li>
                                            <li class="tw">
                                                <a href="https://twitter.com/KTRK_kg" target="_blank">
                                                    <i class="fa fa-twitter-square"></i>
                                                    @KTRK_kg
                                                </a>
                                            </li>
                                            <li class="yt">
                                                <a href="https://www.youtube.com/KTRKkg" target="_blank">
                                                    <i class="fa fa-youtube-square"></i>
                                                    KTRKkg
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Генеральный директор КТРК </td>
                                    <td>Приемная: +996 312 39 20 59
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Заместитель генерального директора КТРК по телевещанию</td>
                                    <td>Приемная: +996 0312 39 22 30
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Заместитель генерального директора КТРК по радио</td>
                                    <td>Приемная: +996 312 39 20 59
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Директор Республиканского радиотелецентра</td>
                                    <td>Приемная: +996 312 39 22 67
                                        <p>Е-mail: <a href="mailto:office-rrtc@ktrk.kg">office-rrtc@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Наблюдательный совет КТРК</td>
                                    <td>Приемная: +996 312 65 67 21
                                        <p>Е-mail: <a href="mailto:sovetotv@gmail.com">sovetotv@gmail.com</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Редакционный советник КТРК</td>
                                    <td>Приемная: +996 312 65 67 21
                                        <p>Е-mail: <a href="mailto:redsovetnik@ktrk.kg">redsovetnik@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>                                
                                <tr>
                                    <td>Общественная приемная</td>
                                    <td>Телефон: +996 312 65 66 08
                                        <p>Административное здание КТРК, 1-этаж</p>
                                    </td>
                                    <td></td>
                                </tr>                                
                                <tr>
                                    <td>Отдел по поддержке официального сайта КТРК</td>
                                    <td>Телефон:
                                        <p>+996 312 39 22 38</p>
                                        <p>Е-mail: <a href="mailto:Е-mail:ktrksite@gmail.com">ktrksite@gmail.com</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Рекламно-коммерческий отдел</td>
                                    <td>Приемная: +996 312 39 15 80
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Информационная программа "Ала-Тоо"</td>
                                    <td>Телефон: +996 312 39 15 65
                                        <p>Факс+996 312 39 15 65</p>
                                        <p>Е-mail: <a href="mailto:alatoo@ntrk.kg">alatoo@ntrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Телеканал "Музыка"</td>
                                    <td>Телефон: +996 312 65 66 48
                                        <p>Е-mail: <a href="mailto:dinaraesengulova.muz@gmail.com">dinaraesengulova.muz@gmail.com</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="yt">
                                                <a href="https://www.youtube.com/user/muzykaktrk" target="_blank">
                                                    <i class="fa fa-youtube-square"></i>
                                                    muzykaktrk
                                                </a>
                                            </li>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/muzykaotrk" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    muzykaotrk
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Телеканал "Баластан"</td>
                                    <td>Телефон: +996 312 65 67 14
                                        <p>+996 312 65 66 44</p>
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/BaldarFmRadiosu" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    BaldarFmRadiosu
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>Телеканал «КТРК Спорт»</td>
                                    <td>Телефон: +996 312 65 21 00
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/KTRKfootball" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    KTRKfootball
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Радио “Достук”</td>
                                    <td>Телефон:
                                        <p>+996 312 65 85 05</p>
                                        <p>+996 312 65 66 10</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/DostukRadiosu" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    DostukRadiosu
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>"Биринчи радио"</td>
                                    <td>Телефон: +996 312 65 84 99
                                        <p>Е-mail: <a href="mailto:kabarlar@ntrk.kg">kabarlar@ntrk.kg</a></p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="http://www.facebook.com/1radiokg" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    1Radiokg
                                                </a>
                                            </li>
                                            <li class="tw">
                                                <a href="https://twitter.com/BirinchiRadio" target="_blank">
                                                    <i class="fa fa-twitter-square"></i>
                                                    @BirinchiRadio
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>“Кыргыз радиосу”</td>
                                    <td>Телефон:
                                        <p>+996 312 65 66 39</p>
                                        <p>+996 312 65 67 19</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="http://www.facebook.com/Kyrgyzradiosu" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    Kyrgyzradiosu
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Радио "Миң кыял FM"</td>
                                    <td>Телефон:
                                        <p>+996 312 65 10 26</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="http://www.facebook.com/MinKyalFm" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    MinKyalFm
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Радио "Балдар FM"</td>
                                    <td>Телефон:
                                        <p>+996 312 65 66 44</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/BaldarFmRadiosu" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    BaldarFmRadiosu
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Студия "ЗАМАНА"</td>
                                    <td>Телефон редакции: +996  312 67 01 87
                                        <p>Е-mail: <a href="mailto:zamana2020@mail.ru">zamana2020@mail.ru</a></p>
                                        <p>Адрес: Бульвар Эркиндик, 122</p>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="fb">
                                                <a href="https://www.facebook.com/Zamanakg" target="_blank">
                                                    <i class="fa fa-facebook-square"></i>
                                                    Zamanakg
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Редакция социально-экономических и инновационных программ</td>
                                    <td>Телефон: +996 312 65 67 05
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Редакция культурно-познавательных программ "Ибарат"</td>
                                    <td>Телефон: +996 312 39 20 72
                                        <p>+996 312 65 97 34</p>
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Студия "Жаштар"</td>
                                    <td>Телефон: +996 312 65 21 00
                                        <p>+996 312 65 92 43</p>
                                        <p>Е-mail: <a href="mailto:public@ktrk.kg">public@ktrk.kg</a></p>
                                    </td>
                                    <td></td>
                                </tr>

                                </tbody>
                            </table>

                            <form role="form" class="form-horizontal hidden">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Ваше имя *</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Ваш email *</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Тема *</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Сообщение *</label>
                                    <div class="col-sm-10">
                                        <textarea name="" id="" rows="10"></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success contact-form-button form-submit">Отправить сообщение</button>
                            </form>

                            <div class="col-md-12 hidden">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93562.9560656737!2d74.52124808491362!3d42.87617095636211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec813fddfb971%3A0x1178ee6d2c03f66b!2z0JrQotCg0Jo!5e0!3m2!1sru!2skg!4v1451472617850" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        @endif

                    </div>
                    <div class="panel-body">

                    </div>

                </div>
            </section>

        </div>
    </div>
@endsection


@section('footerScript')
@endsection