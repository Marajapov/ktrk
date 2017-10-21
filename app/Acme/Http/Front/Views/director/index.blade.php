@extends('Front::layouts.defaultTest')
@section('title', trans('site.DirectorPage')." | КТРК")
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/test3.css') }}">
@stop
@section('content')

	<div class="section light-section dir-section">
		@include('Front::partials.bannerTest')

		<div class="container">
			<div class="row">
				<div class="left-section col-md-8">
					<div class="section">
						<div class="section-body">
							<div class="persons">
								<div class="media media-director">
									<div class="media-body">
										<ul class="list-group">
											<li class="list-group-item">
												<h4>
													Карыпбеков Илим Майрамбекович
												</h4>
											</li>
											<li class="list-group-item">
												<div class="person-extra">
													<ul class="clearfix">
														<li>
															@if($lc == 'kg')
																КТРКнын башкы директору
															@else
																Генеральный директор КТРК
															@endif
														</li>
														<li class="person-divider"></li>
														<li>
															<a href="https://www.facebook.com/ilim.karypbekov" title="Facebook">
																<svg class="svgIcon-use" viewBox="0 0 21 21"><path d="M18.26 10.55c0-4.302-3.47-7.79-7.75-7.79-4.28 0-7.75 3.488-7.75 7.79a7.773 7.773 0 0 0 6.535 7.684v-5.49h-1.89v-2.2h1.89v-1.62c0-1.882 1.144-2.907 2.814-2.907.8 0 1.48.06 1.68.087V8.07h-1.15c-.91 0-1.09.435-1.09 1.07v1.405h2.16l-.28 2.2h-1.88v5.515c3.78-.514 6.7-3.766 6.7-7.71"></path></svg>
															</a>
														</li>
														<li>
															<a href="https://twitter.com/ilimkm" title="Twitter">
																<svg class="svgIcon-use" viewBox="0 0 21 21"><path d="M18.502 4.435a6.892 6.892 0 0 1-2.18.872 3.45 3.45 0 0 0-2.552-1.12 3.488 3.488 0 0 0-3.488 3.486c0 .276.03.543.063.81a9.912 9.912 0 0 1-7.162-3.674c-.3.53-.47 1.13-.498 1.74.027 1.23.642 2.3 1.557 2.92a3.357 3.357 0 0 1-1.555-.44.15.15 0 0 0 0 .06c-.004 1.67 1.2 3.08 2.8 3.42-.3.06-.606.1-.934.12-.216-.02-.435-.04-.623-.06.42 1.37 1.707 2.37 3.24 2.43a7.335 7.335 0 0 1-4.36 1.49L2 16.44A9.96 9.96 0 0 0 7.355 18c6.407 0 9.915-5.32 9.9-9.9.015-.18.01-.33 0-.5A6.546 6.546 0 0 0 19 5.79a6.185 6.185 0 0 1-1.992.56 3.325 3.325 0 0 0 1.494-1.93"></path></svg>
															</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="list-group-item">
												<button class="own-btn own-btn-default" id="button" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
													{{ trans('site.DirBio') }}
												</button>
											</li>											
										</ul>
									</div>
									<div class="media-right text-center">
										<div class="media-object">
											<img src="{{ asset('images/manager_main_2.jpg') }}" class="">
										</div>
									</div>
								</div>
								<div class="collapse" id="collapseExample">
									<ul class="list-group first-list">
										@if($lc == 'kg')
											<li class="list-group-item">
												Жеке Маалымат
												<ul class="list-group second-list">
													<li class="list-group-item">
														1979-жылы 13-августта туулган.
													</li>
												</ul>
											</li>
											<li class="list-group-item">
												Билими
												<ul class="list-group second-list">
													<li class="list-group-item">
														<span class="list-extra">2001- ж.</span>
														<span class="list-info">Кыргыз мамлекеттик улуттук университетинин укук факультетин артыкчылык менен бүтүргөн</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">2007 -ж.</span>
														<span class="list-info">Варшавадагы (Польша) адам укуктары боюнча жогорку эл аралык мектепти аяктаган</span>
													</li>
												</ul>
											</li>
											<li class="list-group-item">
												Эмгек жолу
												<ul class="list-group second-list">
													<li class="list-group-item">
														<span class="list-extra">1997-1999ж.</span>
														<span class="list-info">«Ренессанс» студенттик илимий коомунун президенти, Бишкек</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Январь 1999-ж. - июнь 2000-ж. </span>
														<span class="list-info">«BNS - Securities» ЖЧКнун юристи, Бишкек</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2000-ж. - июнь 2001-ж.</span>
														<span class="list-info">Сорос-Кыргызстан фондунун укуктук программалары боюнча кызматкери.</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2001-ж. - октябрь 2001-ж. </span>
														<span class="list-info">БУУнун өнүктүрүү программасы,Кочкор району. БУУнун улуттук ыктыярчысы</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Февраль 2002-ж. - январь 2003-ж.  </span>
														<span class="list-info">«Сорос-Кыргызстан» фонду, Бишкек. «Коомдук башкаруу»,«Этникалык азчылык», «Коомдук саясатты иштеп чыгуу» программаларынын кызматкери.</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Январь 2003-ж. - 2004-ж.</span>
														<span class="list-info">«LARC» укуктук долбоорунун юристи, Кара-Балта</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июль 2003-ж.</span>
														<span class="list-info">Адвокат болуп иштөөгө укук берүү  лицензиясы № 1051, Бишкек шаары</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Январь 2004-ж. - июнь 2004-ж.</span>
														<span class="list-info">«ЛАРК» АК филиалынын директору, Түп району</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2004–ж. - июнь 2006–ж.</span>
														<span class="list-info">Медиаөкүл институту/ Интерньюс-Кыргызстан, ага юрист.</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2006-ж. - учурда </span>
														<span class="list-info">КР президентине караштуу башкаруу академиясы, окутуучу. (Жарандык жана эмгек укугу, бейөкмөт уюмдардын укуктук негиздери)</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2006-ж. - февраль 2009-ж.</span>
														<span class="list-info">«Медиа-өкүл институту» коомдук фондунун директору</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2008-ж. - февраль 2009-ж.</span>
														<span class="list-info">КР акыйкатчысынын медиа-өкүлү</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Февраль 2009-ж. - октябрь 2009-ж.  </span>
														<span class="list-info">Кыргыз Республикасынын президентинин катчылыгынын референти</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Октябрь 2009-ж -апрель 2010-ж. </span>
														<span class="list-info">КыргызРеспубликасынын президентинин катчылыгы, көмөк көрсөтүү кызматынын жетекчиси</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Февраль 2011-ж.-июль 2011-ж. </span>
														<span class="list-info">«Альфа Телеком» (соода маркасы «MegaCom») Жабык акционердик коому, «Альфа Телеком» Жабык акционердик коомунун укук маселелери боюнча башкы директорунун орун басары</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Апрель 2010-ж. - учурда    </span>
														<span class="list-info">«Кеңеш берүү жана укук институту» Коомдук фондунун директору</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Апрель 2010-ж. - учурда</span>
														<span class="list-info">«Ин.Консалт»Кеңеш берүү компаниясынын директору</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Апрель 2010-2013-ж.</span>
														<span class="list-info">Америка Борбор Азия университети, окутуучу (адвокатура,  укук клиникасы, ишкерлер укугу)</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июль 2011-ж. - февраль 2012-ж.</span>
														<span class="list-info">Кыргыз Республикасынын мамлекеттик мүлк министрлиги, «Альфа Телеком» ЖАК сырттан башкаруучу</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Октябрь 2011-ж. -учурда</span>
														<span class="list-info">Кыргыз мамлекеттик юридикалык академиясы, ага окутуучу  (Экономикалык сот, Инвестициялык укук)</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Апрель 2013-ж. - февраль 2015-ж.</span>
														<span class="list-info">«Эл аралык  «Манас» аэропорту» ААК, президенттин кеңешчиси</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Февраль 2015-ж.</span>
														<span class="list-info">КТРКнын башкы директордун милдетин аткаруучу</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Март 2015-ж. - учурда</span>
														<span class="list-info">КТРК башкы директору</span>
													</li>
												</ul>
											</li>
											<li class="list-group-item">
												Кошумча маалымат
												<ul class="list-group second-list">
													<li class="list-group-item">
														«K-News», www.knews.kg маалымат агенттигинин негиздөөчүсү
													</li>
													<li class="list-group-item">
														«Svoboda», www.svoboda.kg укук коргоо сайтынын негиздөөчүсү
													</li>
													<li class="list-group-item">
														«Институт Медиа Полиси» коомдук фондунун уюштуруучусу
													</li>
													<li class="list-group-item">
														«Институт Консалтинга и Права» коомдук фондунун уюштуруучусу
													</li>
													<li class="list-group-item">
														«Де-Факто»  гезитинин уюштуруучусу
													</li>
												</ul>
											</li>
											<li class="list-group-item">
												Коомдук иштери
												<ul class="list-group second-list">
													<li class="list-group-item">
														Бишкек шаары жана Чүй облусунун адвокаттар  коллегиясынын мүчөсү
													</li>
													<li class="list-group-item">
														Бишкек пресс-клубунун мүчөсү
													</li>
													<li class="list-group-item">
														Маалымдоо каражаттарына келген арыздарды кароочу комиссия мүчөсү
													</li>
													<li class="list-group-item">
														Сорос-Кыргызстан фондунун башкармалыгынын мүчөсү
													</li>
													<li class="list-group-item">
														КТРК көркөм кеңешинин мүчөсү
													</li>
													<li class="list-group-item">
														КР маданият жана маалымат министрлигинин алдындагы “Телекорсөтүү жана радиоуктуруулар жөнүндө” мыйзамдаргаөзгөртүүлөр жана оңдоолорду иштеп чыгуу боюнча жумушчу топтун мүчөсү
													</li>
													<li class="list-group-item">
														КТРКны реформалоо боюнча жумушчу топтун төрагасы
													</li>
													<li class="list-group-item">
														Адам укуктары жана эл аралык укуктар боюнча эксперт
													</li>
													<li class="list-group-item">
														КР президент  институтун реформалоо боюнча жумушчу топтун мүчөсү
													</li>
													<li class="list-group-item">
														Санариптик берүүгө өтүү боюнча мамлекеттик программаны иштеп чыгуу жумушчу тобунун төрагасы
													</li>
													<li class="list-group-item">
														КР өкмөтүн реформалоо боюнча жумушчу топтун мүчөсү
													</li>
													<li class="list-group-item">
														КР жаштар саясатын өнүктүрүү стратегиясын иштеп чыгуу боюнча жумушчу топтун төрагасы
													</li>
													<li class="list-group-item">
														КР Коомдук телерадиоберүү корпорациясынын Байкоочу кеңешинин төрагасы
													</li>
												</ul>
											</li>
										@elseif($lc == 'ru')
											<li class="list-group-item">
												Личная Информация
												<ul class="list-group second-list">
													<li class="list-group-item">
														Дата рождения: 13  августа 1979 года.
													</li>
												</ul>
											</li>
											<li class="list-group-item">
												Образование
												<ul class="list-group second-list">
													<li class="list-group-item">
														<span class="list-extra">2001-г.</span>
														<span class="list-info">С отличием окончил юридический факультет Кыргызского Государственного Национального университета, г.Бишкек.</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">2007-г.</span>
														<span class="list-info">окончил Высшую международную школу по правам человека, Польша/Варшава</span>
													</li>
												</ul>
											</li>
											<li class="list-group-item">
												Трудовая деятельность
												<ul class="list-group second-list">
													<li class="list-group-item">
														<span class="list-extra">1997-1999гг.</span>
														<span class="list-info">Президент, Студенческое Научное Общество «Ренессанс», Бишкек</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Январь 1999-г. - июнь 2000-г. </span>
														<span class="list-info">Юрист, ОсОО «BNS - Securities», Бишкек</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2000-г. - июнь 2001-г.</span>
														<span class="list-info">Сотрудник правовых программ, Фонд Сорос-Кыргызстан, Бишкек</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2001-г. - октябрь 2001-г. </span>
														<span class="list-info">Национальный волонтер ООН, Программа развития ООН, Кочкорский район </span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Февраль 2002-г. - январь 2003-г.  </span>
														<span class="list-info">Сотрудник программ «Общественное управление», «Этнические меньшинства», «Выработка общественной политики»,  Фонд «Сорос-Кыргызстан», Бишкек</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Январь 2003-г. - 2004-г.</span>
														<span class="list-info">юрист в правовом проекте «LARC», Кара-Балта</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июль 2003-г.</span>
														<span class="list-info">Лицензия на право занятия адвокатской деятельностью № 1051, Бишкек</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Январь 2004-г. - июнь 2004-г.</span>
														<span class="list-info">Директор филиала ОО «ЛАРК», Тюпский район </span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2004–г. - июнь 2006–г.</span>
														<span class="list-info">Старший юрист Института Медиа Представителя / Интерньюс-Кыргызстан.</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2006-г. - по настоящее время </span>
														<span class="list-info">Преподаватель (Гражданское и Трудовое право, Правовые основы НПО),  Академия управления при Президенте КР</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2006-г. - февраль 2009-г.</span>
														<span class="list-info">Директор Общественного фонда «Институт медиа-представителя»</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июнь 2008-г. - февраль 2009-г.</span>
														<span class="list-info">Медиа-представитель (омбудсмен) в КР</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Февраль 2009-г. - октябрь 2009-г.  </span>
														<span class="list-info">Референт Секретариата Президента Кыргызской Республики</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Октябрь 2009-г. - апрель 2010-г. </span>
														<span class="list-info">Руководитель Службы взаимодействия,  Секретариат Президента Кыргызской Республики</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Февраль 2011-г. - июль 2011-г. </span>
														<span class="list-info">Заместитель генерального директора ЗАО «Альфа Телеком» по правовым вопросам</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Апрель 2010-г.</span>
														<span class="list-info">Директор Общественного фонда «Институт консалтинга и права»</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Апрель 2010-г.</span>
														<span class="list-info">Директор консалтинговой компании «Ин.Консалт»</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Апрель 2010-г. - 2013-г.</span>
														<span class="list-info">Преподаватель (адвокатура, юридическая клиника,  предпринимательское право), Американский университет в Центральной Азии</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Июль 2011-г. - февраль 2012-г.</span>
														<span class="list-info">Внешний управляющий ЗАО «Альфа Телеком», Министерство государственного имущества Кыргызской Республики</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Октябрь 2011-г. - по настоящее время </span>
														<span class="list-info">Старший преподаватель (Судопроизводство по  экономическим делам, Инвестиционное право), Кыргызскаяой государственная юридическая академия</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Апрель 2013-г. - по настоящее время</span>
														<span class="list-info">Советник президента,  ОАО «Международный аэропорт «Манас»</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Февраль 2015-г.</span>
														<span class="list-info">Исполняющий обязанности генерального директора КТРК</span>
													</li>
													<li class="list-group-item">
														<span class="list-extra">Март 2015-г. - по настоящее время</span>
														<span class="list-info">Генеральный директор КТРК</span>
													</li>
												</ul>
											</li>
											<li class="list-group-item">
												Дополнительная информация
												<ul class="list-group second-list">
													<li class="list-group-item">
														Основатель Информационного агентства «K-News», www.knews.kg
													</li>
													<li class="list-group-item">
														Основатель Правозащитного сайта «Svoboda», www.svoboda.kg
													</li>
													<li class="list-group-item">
														Учредитель Общественного фонда «Институт Медиа Полиси»
													</li>
													<li class="list-group-item">
														Учредитель Общественного фонда «Институт Консалтинга и Права»
													</li>
													<li class="list-group-item">
														Учредитель газеты «Де-Факто»
													</li>
												</ul>
											</li>
											<li class="list-group-item">
												Общественная деятельность
												<ul class="list-group second-list">
													<li class="list-group-item">
														Член Коллегии адвокатов Чуйской области и г. Бишкек
													</li>
													<li class="list-group-item">
														Член Бишкекского пресс-клуба
													</li>
													<li class="list-group-item">
														Член Комиссии по рассмотрению жалоб на СМИ
													</li>
													<li class="list-group-item">
														Член правления Фонда Сорос-Кыргызстан
													</li>
													<li class="list-group-item">
														Член Художественного совета НТРК
													</li>
													<li class="list-group-item">
														Член рабочей группы по разработке законопроекта о внесении изменений и дополнений в Закон. КР «О телевидении и радиовещании» при Министерстве культуры и информации КР
													</li>
													<li class="list-group-item">
														Председатель Рабочей комиссии по реформированию НТРК
													</li>
													<li class="list-group-item">
														Эксперт по правам человека и международному праву
													</li>
													<li class="list-group-item">
														Член рабочей группы по реформированию Института Президента Кыргызской Республики
													</li>
													<li class="list-group-item">
														Председатель рабочей группы по разработке Государственной программы по переходу на цифровое вещание
													</li>
													<li class="list-group-item">
														Член рабочей группы по реформированию Правительства Кыргызской Республики
													</li>
													<li class="list-group-item">
														Председатель рабочей группы по разработке Стратегии развития молодежной политики Кыргызской Республики
													</li>
													<li class="list-group-item">
														Председатель Наблюдательного совета Общественной телерадиовещательной корпорации КР
													</li>
												</ul>
											</li>
										@endif
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="section section-with-list section-list-with-thumb">
						<div class="section-title">
							<h4>{{ trans('site.NavAboutReport') }}</h4>
						</div>
						<div class="section-body">
							<div class="left-categories categories">
								<div class="cat-posts">
									@if($leftPosts)
										@foreach($leftPosts as $post)										
											<div class="cat-post news-body">
												<div class="post-extra clearfix">
		                                	@if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes')
		                                    <span class="post-file">                                                        
		                                     	@if($post->getIsPhoto() == 'yes')
		                                         	<svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
		                                             <g>
		                                              	<g transform="translate(-428.000000, -532.000000)">
		                                                  	<g transform="translate(428.000000, 532.000000)">
		                                                      <g>
		                                                       	<path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
		                                                                       c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
		                                                                       C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
		                                                                       c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
		                                                                       L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
		                                                                       C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
		                                                                       C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
		                                                                       C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
		                                                      </g>
		                                                  	</g>
		                                              	</g>
		                                             </g>
		                                         	</svg>
		                                     	@endif
		                                     	@if($post->getIsVideo() == 'yes')
		                                         	<svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
		                                             <g transform="translate(0,-952.36218)">
		                                              	<path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
		                                                        c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
		                                                        L11.7,961.3z"/>
		                                             </g>
		                                         	</svg>                                                                
		                                     	@endif
		                                    </span>
		                                	@endif
		                                	<span class="post-date">{{ $post->getDay() }} {{ $post->getMonthRu() }} @if(date('Y') != $post->getYear()) {{ $post->getYear() }} @endif, {{ $post->getTime()}}</span>
		                                	<span class="post-views">                                                        
		                                    <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
		                                     	<g>
		                                         	<path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
		                                                   C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
		                                     	</g>
		                                 	</svg>
		                                    {{ $post->getViewed() }}
		                                	</span>                                                    
		                            	</div>
		                            	<a class="post-title" href="{{ route('front.post', [$post, $lc]) }}">
		                                	<img src="@if($post->thumbnail_big) {{ asset($post->thumbnail_big) }} @else {{ asset($post->thumbnail) }}  @endif" alt=""/>
		                                	{{ $post->getTitleRuOrKg() }}
		                            	</a>
											</div>	
										@endforeach
									@endif
								</div>						
							</div>
							<div class="right-categories categories">
								<div class="cat-posts">
									@if($rightPosts)
										@foreach($rightPosts as $post)										
											<div class="cat-post news-body">
												<div class="post-extra clearfix">
		                                	@if($post->getIsVideo() == 'yes' || $post->getIsPhoto() == 'yes')
		                                    <span class="post-file">                                                        
		                                     	@if($post->getIsPhoto() == 'yes')
		                                         	<svg class="gallery-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
		                                             <g>
		                                              	<g transform="translate(-428.000000, -532.000000)">
		                                                  	<g transform="translate(428.000000, 532.000000)">
		                                                      <g>
		                                                       	<path d="M16,0C7.2,0,0,7.2,0,16s7.2,16,16,16s16-7.2,16-16S24.8,0,16,0L16,0z M26.8,20.8c-0.8,0.2-1.7-0.2-2.5-0.9
		                                                                       c-1.6-1.4-4-5.9-4-5.9c-0.4-0.7-1-0.7-1.4,0c0,0-1.2,2-1.8,3c-0.9,1.4-2.9,4-2.9,4c-0.1,0.2-0.4,0.2-0.5,0c0,0-1.1-1-1.5-1.6
		                                                                       C11.8,19,11.1,18,11.1,18c-0.2-0.3-0.6-0.3-0.9,0c0,0-0.9,1.2-2,2.5c-1.1,1.3-1.9,1.9-2.7,1.8c-0.7-0.1-1.2-0.5-1.6-1.2
		                                                                       c-0.6-1.5-1-3.2-1-5C2.9,8.8,8.8,2.9,16,2.9c7.2,0,13.1,5.9,13.1,13.1c0,0.8-0.1,1.6-0.2,2.3C28.6,19.5,27.9,20.4,26.8,20.8
		                                                                       L26.8,20.8z M25.1,24.6c-0.6,0.8-1.8,1.3-2.5,0.8c-0.7-0.5,0.2-1.2,0.9-1.9c0.8-0.9,1.3-1.1,1.7-0.9
		                                                                       C25.7,22.9,25.5,24,25.1,24.6 M21.1,27c-0.6,0.4-1.4,0.5-1.8,0.1c-0.4-0.5,0.4-0.7,0.9-1.1c0.7-0.5,1-0.5,1.3-0.3
		                                                                       C21.8,26,21.5,26.7,21.1,27L21.1,27z M8,8.6C7.3,9.5,7.1,11,7.9,11.5c0.6,0.3,1.4,0.1,2.5-1.2c0.9-1,2.2-2,1.2-2.7
		                                                                       C10.6,6.8,8.9,7.4,8,8.6L8,8.6z"/>
		                                                      </g>
		                                                  	</g>
		                                              	</g>
		                                             </g>
		                                         	</svg>
		                                     	@endif
		                                     	@if($post->getIsVideo() == 'yes')
		                                         	<svg class="play-button" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
		                                             <g transform="translate(0,-952.36218)">
		                                              	<path d="M16,952.4c-8.8,0-16,7.2-16,16s7.2,16,16,16s16-7.2,16-16C32,959.5,24.8,952.4,16,952.4L16,952.4z M16,954.7
		                                                        c7.6,0,13.7,6.1,13.7,13.7c0,7.6-6.1,13.7-13.7,13.7s-13.7-6.1-13.7-13.7S8.4,954.7,16,954.7L16,954.7z M11.7,961.3v14l11.7-7
		                                                        L11.7,961.3z"/>
		                                             </g>
		                                         	</svg>                                                                
		                                     	@endif
		                                    </span>
		                                	@endif
		                                	<span class="post-date">{{ $post->getDay() }} {{ $post->getMonthRu() }} @if(date('Y') != $post->getYear()) {{ $post->getYear() }} @endif, {{ $post->getTime()}}</span>
		                                	<span class="post-views">                                                        
		                                    <svg class="fa-view" x="0px" y="0px" viewBox="0 0 22 14" xml:space="preserve">
		                                     	<g>
		                                         	<path d="M17.7,2.3C15.5,0.7,12.9,0,11,0S6.5,0.7,4.3,2.3C1.9,4.2,0,6.4,0,7s1.9,2.8,4.3,4.7C6.5,13.3,9.1,14,11,14s4.5-0.7,6.7-2.3
		                                                   C20.1,9.8,22,7.6,22,7S20.1,4.2,17.7,2.3z M11,10c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S12.7,10,11,10z"/>
		                                     	</g>
		                                 	</svg>
		                                    {{ $post->getViewed() }}
		                                	</span>                                                    
		                            	</div>
		                            	<a class="post-title" href="{{ route('front.post', [$post, $lc]) }}">
		                                	<img src="@if($post->thumbnail_big) {{ asset($post->thumbnail_big) }} @else {{ asset($post->thumbnail) }}  @endif" alt=""/>
		                                	{{ $post->getTitleRuOrKg() }}
		                            	</a>
											</div>	
										@endforeach
									@endif
								</div>						
							</div>
							<footer>
								<nav class="pagination-nav">
									<ul class="pagination">
										<li>
											<a href="{{ $directorPosts->previousPageUrl() }}" class="slick-arrow arrow-prev @if($directorPosts->currentPage() == 1) disabled @endif">
												<svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M13.7,26.8c0-0.4-0.1-0.7-0.4-1L5,17.5h25.6c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5H5l8.3-8.3c0.3-0.3,0.4-0.7,0.4-1c0-0.4-0.1-0.7-0.4-1c-0.6-0.6-1.5-0.6-2,0L0.4,14.9c-0.6,0.6-0.6,1.5,0,2l10.8,10.9c0.6,0.6,1.5,0.6,2,0C13.6,27.6,13.7,27.3,13.7,26.8z"/></g></svg>
											</a>
										</li>

										@for($i = 0, $j = 1; $i < $directorPosts->total(); $i+=$perPage)
											<li class="@if(($j > $directorPosts->currentPage()+3) || ($j < $directorPosts->currentPage()-3)) hidden @endif">
												<a href="{{ route('front.pages.director', ['page' => $j]) }}" class="@if($directorPosts->currentPage() == $j) active @endif">
													{{ $j++ }}
												</a>
											</li>
										@endfor

										<li>
											<a href="{{ $directorPosts->nextPageUrl() }}" class="slick-arrow arrow-next @if($directorPosts->currentPage() == ceil($directorPosts->total()/$perPage)) disabled @endif">
												<svg x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><g><path d="M18.3,5.2c0,0.4,0.1,0.7,0.4,1l8.3,8.3H1.5C0.7,14.6,0,15.2,0,16c0,0.8,0.7,1.5,1.5,1.5H27l-8.3,8.3c-0.3,0.3-0.4,0.7-0.4,1c0,0.4,0.1,0.7,0.4,1c0.6,0.6,1.5,0.6,2,0l10.8-10.8c0.6-0.6,0.6-1.5,0-2L20.7,4.1c-0.6-0.6-1.5-0.6-2,0C18.4,4.4,18.3,4.8,18.3,5.2z"/></g></svg>
											</a>
										</li>

									</ul>
								</nav>
							</footer>
						</div>
					</div>
				</div>
				<div class="right-section col-md-4">
					<div class="section">
						<div class="section-title">
							<h4>Твиттер</h4>
						</div>
						<div class="section-body">
							<a class="twitter-timeline" href="https://twitter.com/ilimkm" data-widget-id="680338148379996160">Твиты от @ilimkm</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
					</div>
					<div class="section">
						<div class="section-title">
							<h4>Facebook</h4>
						</div>
						<div class="section-body">
							@if($fbpost != null)
								@foreach($fbpost as $post)
									<div class="fb-post" data-href="https://www.facebook.com/{{$post->title}}" data-width="300">
									</div>
								@endforeach
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('footerScript')
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5&appId=977320525631518";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
@endsection