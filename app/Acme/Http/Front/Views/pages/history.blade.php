@extends('Front::layouts.default')
@section('title', trans('site.HistoryFull')." | КТРК")


@section('styles')
  <link rel="stylesheet" href="{{ asset('css/pages.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/custombox.css') }}"/>
@endsection

@section('content')

  <div class="container">

    <div class="row">
      <div class="col-md-12 historypage">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">{{ trans('site.HistoryFull') }}</h3>
          </div>
          <div class="panel-body histext">

            <div class="media">
              <div class="media-left">
                <div class="img-block">
                  <img src="{{ asset('images/history/chaban.jpg')}}" alt="Чабан">
                  <span class="hist-year">1931</span>
                </div>
              </div>
              <div class="media-body">

                @if($lc == 'kg')

                  <p>Кыргыз Республикасынын Коомдук телерадиоберүү корпорациясынын тарыхы 1931-жылдан башталган. Ошол жылы биринчи ирет Кыргыз радиосу обого чыккан. 1926-жылы Кыргыз автономиялуу облусу Кыргыз АССРине айланган. Мындай жагымдуу окуяны Ала-Тоонун аймагындагы жаамы журтка жайылтуу үчүн радиолоштуруу демилгеси башталган. 1927-жылы  андай асыл ой ишке ашып, Кыргыз АССРинин Борбордук аткаруу комитетинин курултайындагы  аткаруу комитетинин төрагасы Абдыкадыр Орозбековдун баяндамасы радиотүйүндөр аркылуу элге угузулган.</p>
                  <p>Кыргыз АССРинин Эл Комиссарлар Советинин алдында радио маалымат жана радио берүү комитети 1931-жылы 19-декабрда уюштурулган.</p>

                  <a class="btn btn-link pull-right" id="button1">
                    Кененирээк <i class="fa fa-arrow-circle-right"></i>
                  </a>

                  <div id="modal1" class="modal-demo history-modal">
                    <button type="button" class="close" onclick="Custombox.close();">
                      <span>×</span><span class="sr-only">Close</span>
                    </button>
                    <div class="text">
                      <p>Борбордук аткаруу комитетинин токтомунун негизинде республикалык радиоуктуруу комитетинин төрагасы болуп Сүйүнтбек Бектурсунов 1931-жылдын 20-декабрында номур биринчи буйрук боюнча дайындалып, бул иште айтылуу котормочу 1932-жылдын июлуна чейин иштеген. Андан соң ал кызматта Кыпчакбаев, Сарманов эмгектенишет.</p>
                      <p>Борбордук аткаруу комитетинин токтомунун негизинде республикалык радиоуктуруу комитетинин төрагасы болуп Сүйүнтбек Бектурсунов 1931-жылдын 20-декабрында номур биринчи буйрук боюнча дайындалып, бул иште айтылуу котормочу 1932-жылдын июлуна чейин иштеген. Андан соң ал кызматта Кыпчакбаев, Сарманов эмгектенишет.</p>
                      <p>Корпорация 1937-жылдан тарта 1946-жылдын 28-мартына чейин Кыргыз ССРинин Элдик Комиссарлар Советинин алдындагы радиомаалымат жана радиоберүү комитети деп аталган. 1937-жылдын 1-январында 43 радиотүйүндүн 12 өз программалары менен обого чыга баштаганын эске алганыбызда, Кыргызстандын көпчүлүк бөлүгү радиоберүүлөр менен камсыз болуп калганын байкоого  болот. Бул жылкы республикалык берүүлөрдүн суткалык орточо көлөмү 6 саат 34 минутаны түзгөн. Анын төрт сааты - жергиликтүү берүүлөр. Уктуруулар кыргыз, орус жана дуңган тилдеринде жүргүзүлгөн.</p>
                    </div>
                  </div>

                @elseif($lc == 'ru')

                  <p>История корпорации начинается с 1931 года. Официальная дата открытия Кыргызского радио 20 января 1931 года. Именно в этот день в городе Фрунзе полностью был сдан в эксплуатацию радиоузел протяженностью 25 километров, с абонентской сетью в 300 радиоточек. В 1930 году во Фрунзе началось сооружение типового радиоузла, а в 1931 году он был полностью введен в эксплуатацию.</p>

                  <a class="btn btn-link pull-right" id="button1">
                    Подробнее <i class="fa fa-arrow-circle-right"></i>
                  </a>

                  <div id="modal1" class="modal-demo history-modal">
                    <button type="button" class="close" onclick="Custombox.close();">
                      <span>×</span><span class="sr-only">Close</span>
                    </button>
                    <div class="text">
                      <p> В советские годы Кыргызское радио, безусловно, сыграло важную роль в жизни кыргызского народа. Хотя, оно, как и другие формы средств массовой информации выступало инструментом пропаганды, было идеологически мотивированной, но, тем не менее, это было радио, которое несло нужную информацию, доносило до слушателей удивительное культурное разнообразие страны. Сохранение наследия стала важной и главной задачей Кыргызского радио после развала большой советской страны. За 20 лет независимости Кыргызское радио развивалось, совершенствовалось и выполняло главную свою миссию - донести до слушателей уникальность Кыргызстана и его народа.</p>
                      <p>В 1926 году Кыргызская автономная область преобразована в Кыргызскую АССР. В связи с этим, для того, чтобы распространить новость о таком радостном событии на всю территорию республики была поднята инициатива всеобщей радиофикации. В 1927 году эта светлая идея была реализована, когда во время Курултая Центрального исполнительного комитета Кыргызской АССР, народ услышал доклад председателя комитета Абдыкадыра Орозбекова по радиоузлам. Но организации по подготовке радио программ тогда не было.</p>
                      <p>При Народном Комиссариате Советов Кыргызской АССР 19 декабря 1931 года был сформирован Комитет по радиовещанию. Согласно положению Центрального исполнительного комитета по приказу №1 от 20 декабря 1931 года председателем республиканского комитета по радиовещанию был назначен Бектурсунов Суйунтбек, который проработал на своем посту до июля 1932 года. Далее его место занимают Кыпчакбаев, Сарманов. Несмотря на короткий срок их работы, и все трудности, через которые им пришлось пройти, они были первыми инициаторами по проведению познавательных и назидательных слушаний посредством радио.</p>
                    </div>
                  </div>

                @endif

              </div>
            </div>

            <div class="media">
              <div class="media-body">

                @if($lc == 'kg')

                  <p>1938-1941-жылдары радио комитеттин төрагасы болуп Төлөн Шамшиев дайындалган. Улуу Ата Мекендин согуш жылдарында радионун ролу күчөп, Кыргызстандын эң күчтүү маалымат булагына айланган. Экстратов, Курман Кыдырбаева сындуу адамдар жетекчилик кылып, Капар Алиев, Гүлниса Мамбетова, Валентина Гонтарь дикторлук кесиптин устаттары катары таанылган. Белгилүү драматург Токтоболот Абдымомунов акыркы кабарлардын редактору болуп иштеген.</p>

                @elseif($lc == 'ru')

                  <p>Первыми работниками Кыргызского радио были акын-импровизатор Калык Акиев, музыкант Петр Шубин. Первыми дикторами радио были государственный деятель Сакин Бегматова, народная артистка Алиман Жангорозова, писатель Касымалы Бектенов. В 1938-1941 годы председателем радиокомитета назначается  поэт Толон Шамшиев. Значимость радио увеличивается во время Великой Отечественной войны, когда оно стало самым важным источником информации. В 1945 году 28 марта Комитет по радиовещанию был реорганизован при Совете Министров Кыргызской ССР.</p>

                @endif

              </div>
              <div class="media-right">
                <div class="img-block">
                  <img src="{{ asset('images/history/diktory.jpg')}}" alt="Чабан">
                  <span class="hist-year">1938-1945</span>
                </div>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <div class="img-block">
                  <img src="{{ asset('images/history/73.jpg')}}" alt="Чабан">
                  <span class="hist-year">1945-1964</span>
                </div>
              </div>
              <div class="media-body">

                @if($lc == 'kg')

                  <p>1945-жылдын 28-мартынан тарта Радиомаалымат жана радиоберүү комитети Кыргыз ССРинин Министрлер Советинин алдында кайрадан түзүлгөн. 1949-1953-жылдары Радио комитетти белгилүү драматург жана коомдук ишмер Молдогазы Токобаев жетектеген. 1950-жылдын март айынан тарта шаар, айыл-кыштактарды радиолоштуруу Кыргыз ССРинин Байланыш министрлигинин карамагына өткөндүгүнө байланыштуу Радиомаалымат комитети Кыргыз ССРинин Министрлер Советинин алдында түзүлгөн. Ушундай аталыш 1953-жылдын май айына чейин уланган.</p>

                  <a class="btn btn-link pull-right" id="button2">
                    Кененирээк <i class="fa fa-arrow-circle-right"></i>
                  </a>

                  <div id="modal2" class="modal-demo history-modal">
                    <button type="button" class="close" onclick="Custombox.close();">
                      <span>×</span><span class="sr-only">Close</span>
                    </button>
                    <div class="text">
                      <p>1953-жылдын май айынан тарта өлкөнүн министрликтери менен мекемелери кайрадан түзүлгөндүгүнө байланыштуу Радиомаалымат комитети Кыргыз ССРинин Маданият министрлигине караштуу Радиомаалымат боюнча башкы башкармалык деп өзгөртүлгөн. Башкармалыктын башчысы болуп Тургунбек Суванбердиев бекитилген. Бирок турмуш шарттар ири өзгөрүүлөрдү талап кылгандыктан Кыргыз ССРинин Министрлер Советинин 1957-жылдын 5-июлдагы №240-токтому менен маданият тармагындагы башкармалык Радиоберүү комитети деп аталган.</p>
                      <p>1953-жылдын май айынан тарта өлкөнүн министрликтери менен мекемелери кайрадан түзүлгөндүгүнө байланыштуу Радиомаалымат комитети Кыргыз ССРинин Маданият министрлигине караштуу Радиомаалымат боюнча башкы башкармалык деп өзгөртүлгөн. Башкармалыктын башчысы болуп Тургунбек Суванбердиев бекитилген. Бирок турмуш шарттар ири өзгөрүүлөрдү талап кылгандыктан Кыргыз ССРинин Министрлер Советинин 1957-жылдын 5-июлдагы №240-токтому менен маданият тармагындагы башкармалык Радиоберүү комитети деп аталган.</p>
                      <p>Кыргыз телеберүүсүнүн биринчи диктору Сайнаке Жунушалиева, биринчи режиссеру Жанузак Молдобаев, биринчи редактору Шаршеке Сматов, биринчи үн оператору Светлана Варибада, биринчи оператору Курманбек Өгөбаевдер болушкан. 1961-жылдан 1964-жылга чейин телерадио комитетти Айымбүбү Ботоканова жетектеген. 1962-жылдын май айынан тарта Кыргыз ССРинин Министрлер Советинин алдындагы Радио жана телеберүү комитети – Радио жана телеберүү боюнча Кыргыз ССРинин Министрлер Советинин комитетине алмаштырылган.</p>
                    </div>
                  </div>

                @elseif($lc == 'ru')

                  <p> В 1949-1953 годы Комитет по радиовещанию возглавлял известный драматург и общественный деятель Молдогазы Токобаев. В связи с тем, что с марта 1950 года радиофикация городов, сел и регионов страны была передана Министерству связи Кыргызской ССР Комитет по радиовещанию переходит под руководство Совета Министров Кыргызской ССР.</p>
                  <p>
                    В 1958 году при Совете министров Кыргызской ССР организован Комитет по телевидению и радиовещанию и начинает свою работу Фрунзенская телестудия. Ее главой была назначена Рабия Менсеитова. Первым диктором Кыргызского телевидения была Сайнаке Жунушалиева, первым режиссером - Жанузак Молдобаев, первым редактором - Шаршеке Сматов, первым звукорежиссером - Светлана Варибада, первым оператором - Курманбек Огобаев.
                  </p>
                  <p>
                    С 1961 по 1964 год Комитет по телерадиовещанию возглавляла Айымбубу Ботоканова.
                  </p>

                @endif

              </div>
            </div>

            <div class="media">
              <div class="media-body">

                @if($lc == 'kg')

                  <p>1965-жылдын 10-апрелинен тарта Кыргыз ССРинин Жогорку Советинин президиумунун №539- жарлыгы менен комитет мамлекеттик деген макамга жетип, Радио жана телеберүү боюнча Кыргыз ССР Министрлер Советинин мамлекеттик комитети деп аталат.  1964-жылы Кыргыз ССР Министрлер Советинин алдындагы Радио жана телеберүү комитетинин төрагасы болуп Асанбек Токомбаев дайындалган. Асанбек Токомбаев Кыргызстан телерадиосун 21 жыл башкарган, ал чыгармачылык жамаатты узак мөөнөткө жетектеген жетекчи катары тарыхта калды. 1964-жылдан 1985-жылга чейин залкар инсан 21 жыл бир орунда үзүрлүү эмгектенип, азыркы телерадио корпорациянын жамааты иштеген имаратты, Радио үйүн, Телестудиялык имаратты салдырган. Асанбек Токомбаев КТРК тарыхында ысмын өзгөчө бөлүп айта турган улуу инсан.</p>

                @elseif($lc == 'ru')

                  <p>
                    С 1961 по 1964 год Комитет по телерадиовещанию возглавляла Айымбубу Ботоканова. С 1964 года Комитет по телевидению и радио при Совете Министров Кыргызской ССР руководил Асанбек Токомбаев, который в течение 21 года был во главе государственного идеологического учреждения. При А.Токомбаеве телерадиокомитет расширялся и стал полнокровным информационным каналом. Сам А.Токомбаев остался в истории кыргызского телевидения и радио как руководитель с самым долгим периодом работы. Под руководством А.Токомбаева было построено административное здание телерадиокорпорации, Дом радио и здание телестудии.
                  </p>

                @endif
              </div>
              <div class="media-right">
                <div class="img-block">
                  <img src="{{ asset('images/history/503.jpg')}}" alt="Чабан">
                  <span class="hist-year">1964-1985</span>
                </div>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <div class="img-block">
                  <img src="{{ asset('images/history/100.jpg')}}" alt="Чабан">
                  <span class="hist-year">1985-2007</span>
                </div>
              </div>
              <div class="media-body">

                @if($lc == 'kg')

                  <p> Ал эми 1985-1986-жылдары комитеттин жетекчилигине Асанбек Стамов дайындалган. Андан соң 1986-91-жылдары комитет жетекчиси болуп  Умтул Орозова иштеген.</p>
                  <p>1991-жылы Кыргызстан эгемендик алгандан кийин КТРК Мамлекеттик телерадио агенттиги болуп түзүлүп, анын башчылыгына Сатыбалды Жээнбеков дайындалган. 1992-жылы телерадионун жетекчилигине Түгөлбай Казаков, 1993-жылы Кадыркул Өмүркулов, 1994-жылы Абдиламит Матисаков иштеген. 1993-жылы агенттик кайрадан комитет болуп өзгөртүлгөн. 1995-жылы Кыргыз телевидениесинде таңкы “Замана” студиясы ачылган.</p>

                  <a class="btn btn-link pull-right" id="button3">
                    Кененирээк <i class="fa fa-arrow-circle-right"></i>
                  </a>

                  <div id="modal3" class="modal-demo history-modal">
                    <button type="button" class="close" onclick="Custombox.close();">
                      <span>×</span><span class="sr-only">Close</span>
                    </button>
                    <div class="text">
                      <p>1996-жылы Кыргыз Республикасынын Мамлекеттик телерадио комитети корпорацияга айландырылып, төрагасы президент болуп аталып, ал орунга Аманбек Карыпкулов дайындалган. Кыргыз телевидениесинде "Ала-Тоо" маалымат борбору, "Нур" продюсердик борбору, "Ата-Журт" продюсердик борбору түзүлгөн.  Мурдагы редакциялар чыгармачылык-өндүрүштүк бирикмелер катары өзгөртүлгөн. Адабий драмалык редакция - "Манас" чыгармачыл өндүрүштүк бирикмеси, жаштар редакциясы - "Айкөл", коомдук саясий редакция - "Ата-Журт", элдер достугу - "Достук" бирикмелери болуп аталган. Кыргыз радиосунда адабий-драмалык редакция – "Казына", музыкалык редакция - "Ибарат", балдар жана жаштар - "Жаш толкун", кабарлар - "Кабарлар", коомдук-саясий редакция - "Кыргызстан" чыгармачылык бирикмеси болуп түзүлгөн. Кыргыз радиосунун 2-программасы - "21-кылым" радиосу катары обого чыга баштаган.</p>
                      <p>2001-жылы корпорациянын президенти болуп Молдосейит Мамбетакунов, 2002-жылы Токтош Айтикеева дайындалган.</p>
                      <p>2003-жылы Кыргыз Республикасынын мамлекеттик телерадио корпорациясы Кыргыз Республикасынын улуттук телерадио корпорациясына айландырылып, "улуттук" макамга ээ болгон. 2004-жылы корпорациянын президенттигине Сыртбай Мусаев, 2005-жылы Султан Абдракманов, ошол эле жылы Кыяс Молдокасымов дайындалган. 2006-жылы Кыргыз Республикасынын улуттук телерадио корпорациясы - Кыргыз Республикасынын мамлекеттик телерадио комитети болуп өзгөртүлүп, анын жетекчиси башкы директор болуп өзгөртүлгөн. Чыгармачылык бирикмелер редакцияларга, студияларга айландырылган.</p>
                    </div>
                  </div>

                @elseif($lc == 'ru')

                  <p>
                    С 1985-1986 года комитет возглавляет Асанбек Стамов, с 1986-91 годы - Умтул Орозова.
                  </p>
                  <p>
                    В 1991 году было организовано Государственное агентство по телевидению и радио Кыргызской Республики, во главе которого был назначен Сатыбалды Жээнбеков. В 1992 году руководителем был Туголбай Казаков, в 1993 году - Кадыркул Омуркулов, в 1994 - году Абдуламит Матисаков. В 1993 году агентство снова реорганизовано в комитет. В 1995 году Кыргызское телевидение пополнилось утренней студией «Замана».
                  </p>


                  <a class="btn btn-link pull-right" id="button3">
                    Подробнее <i class="fa fa-arrow-circle-right"></i>
                  </a>

                  <div id="modal3" class="modal-demo history-modal">
                    <button type="button" class="close" onclick="Custombox.close();">
                      <span>×</span><span class="sr-only">Close</span>
                    </button>
                    <div class="text">
                      <p>
                        В 1996 году Государственный комитет по телевидению и радио был реорганизован в Государственную телерадиовещательную корпорацию Кыргызской Республики, руководителем которой был назначен Аманбек Карыпкулов. На кыргызском телевидении открылись информационный центр «Ала-Тоо», продюсерский центр «Нур», и «Ата-Журт».
                      </p>
                      <p>
                        В 2001 году президентом корпорации был назначен Молдосейит Мамбетакунов, а в 2002 году - Токтош Айтикеева. В 2003 году Государственная телерадиокорпорация Кыргызской Республики получает статус Национальной телерадиовещательной корпорации Кыргызской Республики.
                      </p>
                      <p>
                        В 2004 году президентом корпорации назначен Сыртбай Мусаев, в 2005 году - Султан Абдракманов, и в том же 2005 году – президентом был назначен Кыяс Молдокасымов.
                      </p>
                    </div>
                  </div>

                @endif

              </div>
            </div>

            <div class="media">
              <div class="media-body">

                @if($lc == 'kg')

                  <p>2007-жылы комитеттин башкы директору болуп Мелис Эшимканов дайындалган. 2008-жылы Кыргыз Республикасынын мамлекеттик телерадио комитети кайрадан Кыргыз Республикасынын улуттук телерадио корпорациясы деп аталып, 2009-жылы ноябрда корпорациянын башкы директору болуп Кайыргүл Орозбай кызы дайындалган.</p>
                  <p>2010-жылы 7-апрель окуясынан кийин корпорациянын жетекчилигине Убактылуу өкмөт тарабынан Кубат Оторбаев дайындалып, корпорация элдин кыйладан бери коюп келген талабы менен Кыргыз Республикасынын коомдук телерадиоберүү корпорациясы болуп өзгөртүлүп, Кыргыз Республикасынын президенти ал жарлыкка кол койгон. Ошол жылы жайында КТРК Байкоочу кеңеши шайланган. 15 кишиден турган Байкоочу кеңеш төрагалыкка Эльвира Сариеваны шайлашкан. Корпорациянын жетекчилигине конкурс жарыяланып, 2010-жылдын 3-декабрында Кубат Оторбаев Байкоочу кеңеш тарабынан КТРК башкы директору болуп шайланган.</p>

                @elseif($lc == 'ru')

                  <p>В 2007 году – Мелис Эшимканов был назначен генеральным директором корпорации. В 2009 году генеральным директором корпорации назначена Кайыргул Орозбай кызы.</p>
                  <p>
                    В 2010 году, после апрельской революции генеральным директором корпорации назначен Кубат Оторбаев, и по требованию общества, корпорация приобрела статус Общественной телерадиовещательной корпорации Кыргызской Республики. Приказ об Общественной телерадиовещательной корпорации был подписан Президентом Кыргызской Республики.

                    В 2010 году избран Наблюдательный совет Общественной телерадиовещательной корпорации, в состав которого входит 15 членов. Председателем Наблюдательного совета избрана Эльвира Сариева. Был объявлен конкурс на замещение должности генерального директора корпорации, в декабре 2010 года по итогам которого, сроком на 5 лет, Генеральным директором КТРК был избран Кубат Оторбаев.
                  </p>

                @endif
              </div>
              <div class="media-right">
                <div class="img-block">
                  <img src="{{ asset('images/history/skan493.jpg')}}" alt="Чабан">
                  <span class="hist-year">2007-2010</span>
                </div>
              </div>
            </div>

            <div class="media">
              <div class="media-left">
                <div class="img-block">
                  <img src="{{ asset('images/history/58.jpg')}}" alt="Чабан">
                  <span class="hist-year">2011-2014</span>
                </div>
              </div>
              <div class="media-body">
                @if($lc == 'kg')
                  <p>2011-жылдын январь айында Байкоочу кеңеш башкы директордун орун басарлыгына Мырзакул Мамбеталиев менен Кайрат Иманалиевди шайлаган жана ошол эле жылы КТРКнын редакциялык саясатын бекитип берген.</p>

                @elseif($lc == 'ru')
                  <p>
                    В июле 2014 года Кубат Оторбаев подал заявление об отставке по собственному желанию, которое большинством голосов было принято Наблюдательным советом КТРК. Наблюдательный совет возложил обязанности генерального директора корпорации на занимавшего, в то время, пост главы телеканала ЭлТР, известного журналиста Султанбека Жумагулова. В 2014 году 23 ноября, по итогам тайного голосования Наблюдательного совета из 10 претендентов на должность генерального директора был избран Султанбек Жумагулов. Во время работы С. Жумагулова в качестве Генерального директора КТРК обновлен новостной блок канала, открыта новая Ошская телестудия. После его отставки Набдюдательный совет Общественного первого канала возложил обязанности Гендиректора на Илима Карыпбекова. 19 марта 2015 года И. Карыпбеков стал Гендиректором КТРК набрав абсолютное большинство голосов членов НС. Председателем же Наблюдательного совета избран поэт и тележурналист Абды Сатаров.
                  </p>
                @endif
              </div>
            </div>

            <div class="media">
              <div class="media-body">
                @if($lc == 'kg')
                  <p>C. Жумагулов КТРКнын жаңылыктар кызматын кыйла кеңейтип, Ош студиясын ачып, бир нече телерадио долбоорлорду баштаган. Бирок, ал өз ыктыяры менен кызматынан баш тарткандан кийин Кыргызстандагы эң ири улуттук маалымат каражатынын жетекчилигине Байкоочу кеңештин сунушу менен И. Карыпбеков, 2015-жылдын 19-мартында, онго жакын атаандаштардын арасынан эң арбын добуш алып КТРК баш директору болуп шайланды.</p>
                  <p>Азыркы кезде корпорацияда төрт телеканал: "КТРК", "Музыка", "Маданият", "Баластан" обого чыгууда. КТРКнын курамында "Ала-Тоо" маалымат борбору, "Замана" студиясы, "Ибарат" студиясы, Жаштар редакциясы, Социалдык-экономикалык программалар редакциясы, котормо студиясы, "Келечек" студиясы иштейт. Ошондой эле, КТРКнын "Кыргыз радио бирикмесинде" 5 радио угармандарына уктурууларын тартуулап келатышат. Алар: "Биринчи радио", "Кыргыз радиосу", "Миң кыял FM", "Достук" жана "Балдар ФМ" радиолору. Корпорациянын курамында Республикалык радиотеле борбор, "Кыргызтелефильм" студиясы бар. Корпорация жетекчилигинин демилгеси менен "Спорт" телеканалы ачылган. Ушу тапта ал обого чыгууда.</p>
                  <p> КТРКнын өнүгүү стратегиясы каналдын жетекчилиги тарабынан иштелип чыгып, Байкоочу кеңеш тарабынан 2012-жылдын 6-декабрында жактырылды. Документте каналдын 2015-жылга чейинки максаттары, иш багыттары каралган.</p>

                @elseif($lc == 'ru')
                  <p>
                    В настоящее время в корпорации функционируют 4 телеканала: «КТРК», «Музыка», «Маданият», «Баластан». По инициативе руководства корпорации открыт канал «Спорт». В состав Общественного первого канала входит информационный центр «Ала-Тоо», студия «Замана», студия «Ибарат», молодежная редакция, редакция социально-экономических программ, переводческая студия «Котормо», студия «Келечек». Также, в КТРК работают 5 радио: «Биринчи Радио», «Кыргыз Радиосу», радио «Миң кыял FM» , радио «Достук» и радио «Балдар FM». В состав корпорации также входят Республиканский радиотелецентр, студия «Кыргызтелефильм».
                  </p>
                @endif
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
@endsection


@section('footerScript')
  <script src="{{ asset('js/custombox.js') }}"></script>
  <script src="{{ asset('js/legacy.js') }}"></script>

  <script>
    $(function() {
      function viewMore(button, target){
        button.on('click', function( e ) {
          Custombox.open({
            target: target,
            effect: 'fadein'
          });
          e.preventDefault();
        });
      }

      viewMore($('#button1'), '#modal1');
      viewMore($('#button2'), '#modal2');
      viewMore($('#button3'), '#modal3');
      viewMore($('#button4'), '#modal4');
    });
  </script>
@endsection