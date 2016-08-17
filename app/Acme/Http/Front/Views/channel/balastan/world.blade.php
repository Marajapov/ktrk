@extends('Front::channel.balastan.default')
@section('title', trans('radiopages.Bworld'))
@section('styles')
@endsection
@section('content')

    <div class="container-fluid pages-header">
        <div class="row">

            @include('Front::channel.balastan.nav')

            <div class="container pages-title">
                <div class="row">
                    <div class="title col-md-12">
                        <h3>{{ trans('radiopages.Bworld') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid shows">
        <div class="row">
            <div class="container">
                @if(app()->getlocale() == 'ru')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/birge_ru.png')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">Читаем вместе</h4>
                                <p>Программа «Читаем вместе».
                                    Данная программа станет отличным инструментом привлечения родителей и детей к СОВМЕСТНОМУ ЧТЕНИЮ. Формат программы  основан на принципе поощрения людей,  повысить  свои знания и навыки. Это отличное средство повышения индивидуального потенциала и способности каждого человека во всем. Участники будут соревноваться в чтении посредством игр с детьми, что сделает процесс более интересным и захватывающим. Родители осознают о пользе чтения в семье. Отношения между родителями и детьми укрепляются и совершенствуются. Связь между членами семьи увеличивается. Это образовательно - развивающая программа для всех членов семьи. Читайте  вместе  с нами!
                                </p>
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}">Перейти на видео категорию</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif(app()->getlocale() == 'kg')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/birge_ru.png')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">Бирге окуйбуз</h4>
                                <p>Бүгүнкү күндө балдар көбүнчө ар кандай анимациялык  фильмдерге, компюьтердик  оюндарга , интернетке кызыгышат. Мунун кесепетинен алар китеп окуудан алыстап калганы байкалат. Улуу ойчул Белинский “Адамдар китеп окууну таштаса, алар ой ойлонуудан да калат” – деп айтканы бар. Демек китепке кызыкпаган, китеп окубаган балдар жетиштүү билимге ээ боло албайт. Бирок ар бир эле ата-эне өз баласын тартиптүү, билимдүү болуп чоңоюшун каалайт. Муну ишке ашыруунун эң жөнөкөй жолу үй бүлөбүз менен бирге күн сайын китеп окуу. 
                                </p>
                                <p>Ошондуктан Коомдук биринчи канал, Кыргызстандагы Ага Хан фондунун  демилгеси менен үй  бүлөлүк “Бирге окуйбуз” шоу программасын жалпы көрөрмандарга сунуштайт.
                                </p>
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}">Видео категорияга өтүү</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if(app()->getlocale() == 'ru')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/taalimtay.png')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">Таалимтай</h4>
                                <p>“Таалимтай”- юмористическая-познавательная программа студии “Келечек”  и телеканала ” Баластан”.</p>
                                <p>В каждом сюжете выпуска – истории, которые случаются с ребятами в школе и дома, во дворах и на улице. Поучительные кинозарисовки прививают молодому поколению любовь и уважение к старшим,  сверстникам и окружающим. </p>
                                <p>По итогам 2014-года опроса среди телезрителей телепроект «Таалимтай» признан «Лучшим проектом».</p>
                                <p>Участники-дети отбираются путем кастинга.</p>
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}">Перейти на видео категорию</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif(app()->getlocale() == 'kg')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/taalimtay.png')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">Таалимтай</h4>
                                <p>“Келечек” студиясы жана ” Баластан” каналы аркылуу “Таалимтай” көрсөтүүсү эфирге чыгып жатат. Балдарга арналган бул телекөрсөтүү жуманын ишемби, жекшемби күндөрү эфирге чыгат. Көрсөтүүнүн негизги максаты: балдарга кыргыздын канына, кыргыз менталитетине ылайык келген таалим- тарбиялык мааниге ээ сюжеттер берилет. Алардын бардыгы юмор, күлкү менен коштолуп турат.
                                </p>
                                <p>2014- жылы телекөрүүчүлөрдү сурамжылоонун натыйжасында, “Таалимтай” көрсөтүүсү КТРК боюнча биринчи орунду ээлеп «Мыкты долбоор» деген наамды жеңип алган. Жыл аягында Таалимтай көрсөтүүсү беш жашка чыгат.</p>
                                <p>Таалимтай телекөрсөтүүсүнө катышкан балдар кастинг (тандоо) аркылуу алынат.</p>
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}">Видео категорияга өтүү</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if(app()->getlocale() == 'ru')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/manastaanuu.jpg')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">Интеллектуальное состязание “Манас таануу”</h4>
                                <p>Проект предназначен для зрителя с целью широкого ознакомления с эпосом «Манас», истории кыргызов, распространения идеологии эпоса, воспитания патриотического духа у подрастающего поколения. </p>
                                <p>В программе две команды учащихся старших классах соревнуются в знаниях эпоса «Манас» и традиций кыргызского народа.</p>
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}"></i>Перейти на видео категорию</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif(app()->getlocale() == 'kg')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/manastaanuu.jpg')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">“Манас таануу” интеллектуалдык таймашы</h4>
                                <p>Жалпы көрүүчүлөргө жана окуучуларга “Манас” эпосу  тууралуу  кеңири маалымат берүү, кыргыз элинин тарыхын үйрөтүү, элибиздин улуулугун, касиетин, бийиктигин, даңазалоо, балдарды  мекенчилдикке  тарбиялоо  максатында  Коомдук  биринчи  каналдын “Келечек” студиясы республикалык  алкакта  “Манас таануу” интеллектуалдык таймашын (конкурс)  даярдап эфирге чыгарып келет.</p>
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}">Видео категорияга өтүү</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                @if(app()->getlocale() == 'ru')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/sun-kids.jpg')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">Күн балдары</h4>
                                <p>“Күнбалдары”  - это передача с участием талантливых детей, которые демонстрируют свои таланты в умении петь, танцевать и выразительно читать стихи. Номера на тему любви к родине, к родителям, многонациональные танцы. </p>
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}">Перейти на видео категорию</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif(app()->getlocale() == 'kg')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/sun-kids.jpg')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">Күн балдары</h4>
                                <p>“Күн балдары - бул  ыр-бийге шыктуу, таланттуу  өспүрүмдөрдүн  катышуусундагы концерттик программа.</p>
                                <p>Программа ар жуманын ишемби жана жекшемби күндөрү  Коомдук биринчи каналдын  эфиринен көрсөтүлөт.</p>
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}">Видео категорияга өтүү</a>
                                </p>
                            </div>
  
                        </div>
                    </div>
                @endif
                @if(app()->getlocale() == 'ru')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/birge3.png')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">Баарын билгим келет</h4>
                                <p>Программа для любознательных детей школьного и дошкольного возраста, которая в доступной форме рассказывает детям обо всём на свете: о загадках и тайнах вселенной, об устройстве окружающего мира, о выдающихся научных открытиях и достижениях технического прогресса, о флоре и фауне земного шара, о строении самого человека, о всевозможных природных явлениях. Каждый выпуск программы позволяет юному зрителю найти ответ, казалось бы, на простой, но очень важный вопрос современных мальчишек и девчонок.</p>
                                <p>В программе «Баарын билгим келет» есть ряд интересных рубрик  «Салам, жаш талант!», «Жаныбарым-жандосум», «Сонун ыр», «Билип ал!», «Таттуу тамак», «Балдар жанылыктары».</p>
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}">Перейти на видео категорию</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif(app()->getlocale() == 'kg')
                    <div class="col-md-12 aboutshow">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="{{asset('images/channels/balastan/birge3.png')}}" alt="...">
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <h4 class="media-heading">Баарын билгим келет</h4>
                                <p>«Баарын билгим келет» көрсөтүүсүнүн максаты бала бакчадан баштап мектеп курака чейинки балдарды туура жолго үндөө, аң сезимин өстүрүү, пайдалуу жана кызыктуу маалыматтарды берүү, балдардын  интеллектуалдык  деңгээлин  жогорулатуу,  дүйнөгө болгон көз карашын туура калыптандыруу.</p>
                                <p>«Баарын билгим келет» көрсөтүүсүнүн ичинде бир нече рубрикалар камтылган.  Алсак, «Менин ийгилигим», «Бешиктеги баланын бек болоорун  ким билет»,  «Сонун  ыр», «Тил үйрөнөбүз», «Балдар жанылыктары».</p>
                                <p>«Менин ийгилим”  түрмөгүндө өспүрүмдөрдүн ждетишкен ийгиликтерин тааныштырат.  Мисалы бир окуучу  кытай тилин мыкты өздөштүрүп, конкурста жеңүүчү аталып, Кытайга барып келди же бир окуучу шахмат боюнча  турнирге катышып ийгилик жаратты  ж.б.у.с</p>
                                <p>«Сонун  ыр»  түрмөгүндө  бала бакчадагы бал тилдүү  балдар ар кандай темада жаттаган ырларын көркөм айтып беришет. Ыр жаттоо балдардын эс тутумун  жакшыртып, туура сүйлөөгө үйрөтөт.</p>
                                <p>«Бешиктеги баланын бек болоорун ким билет”  түрмөгүндө  дүйнөдөгү  атактуу инсандардын балалыгы , алар ийгиликке кантип жетишкендиги тууралуу маалымат берилет.</p>
                                <p>Баарын билгим келет көрсөтүүсү  2011-жылдан бери эфирге чыгып келет.</p>
                                <p>Алып баруучулар:  Дилдедосов  Канат жана  Камчыбек кызы Калзат</p>           
                                <p class="link">
                                    <a href="{{ route('balastan.videos') }}">Видео категорияга өтүү</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
@section('footerscript2')
@stop