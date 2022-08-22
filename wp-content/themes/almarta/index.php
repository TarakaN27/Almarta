<?php
get_header();
?>

<section id="banner">
			<img src="<?=get_template_directory_uri()?>/assets/img/banner.png" class="banner__img">
			<div class="content">
				<div class="content__title">
					Выбери козырек на нашем сайте
				</div>
				<div class="content__text">
					А купи на любимом маркетплейсе
				</div>
				<div class="content__icons">
					<a href="#" class="wb"></a>
					<a href="#" class="ozon"></a>
					<a href="#" class="leroy"></a>
					<a href="#" class="yandex"></a>
				</div>
				<a href="#" class="btn btn-shadow">Каталог</a>
			</div>
		</section>

		<section id="feature">
			<div class="title">
				<span class="title__main">Особенности и комплектация</span>
				<span class="title__sub">козырьков Алмарта</span>
			</div>
			<div class="content">
				<div class="blocks">
					<div class="block left">
						<div class="block__img">
							<img src="<?=get_template_directory_uri()?>/assets/img/circle1.png">
						</div>
						<div class="block__text">
							<div class="block__text-title">
								Монтаж
							</div>
							<div class="block__text-desc">
								Своими руками без помощи специалиста
							</div>
						</div>
					</div>

					<div class="block right">
						<div class="block__img">
							<img src="<?=get_template_directory_uri()?>/assets/img/circle1.png">
						</div>
						<div class="block__text">
							<div class="block__text-title">
								Монтаж
							</div>
							<div class="block__text-desc">
								Своими руками без помощи специалиста
							</div>
						</div>
					</div>

					<div class="block left">
						<div class="block__img">
							<img src="<?=get_template_directory_uri()?>/assets/img/circle1.png">
						</div>
						<div class="block__text">
							<div class="block__text-title">
								Монтаж
							</div>
							<div class="block__text-desc">
								Своими руками без помощи специалиста
							</div>
						</div>
					</div>

					<div class="block right">
						<div class="block__img">
							<img src="<?=get_template_directory_uri()?>/assets/img/circle1.png">
						</div>
						<div class="block__text">
							<div class="block__text-title">
								Монтаж
							</div>
							<div class="block__text-desc">
								Своими руками без помощи специалиста
							</div>
						</div>
					</div>

					<div class="block left">
						<div class="block__img">
							<img src="<?=get_template_directory_uri()?>/assets/img/circle1.png">
						</div>
						<div class="block__text">
							<div class="block__text-title">
								Монтаж
							</div>
							<div class="block__text-desc">
								Своими руками без помощи специалиста
							</div>
						</div>
					</div>

					<div class="block right">
						<div class="block__img">
							<img src="<?=get_template_directory_uri()?>/assets/img/circle1.png">
						</div>
						<div class="block__text">
							<div class="block__text-title">
								Монтаж
							</div>
							<div class="block__text-desc">
								Своими руками без помощи специалиста
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="calc">
			<div class="calc__title">Калькулятор козырька</div>
			<div class="calc__subtitle">1. Выбирай параметры</div>
			<form class="calc__form">
				<div class="group-column">
					<div class="column">
						<span class="column__title">Цвет бокового кронштейна:</span>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="colorBracket" value="1">
								<span>Темно-коричневый</span>
							</label>
						</div>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="colorBracket" value="2">
								<span>Черный</span>
							</label>
						</div>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="colorBracket" value="3">
								<span>Серый металлик</span>
							</label>
						</div>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="colorBracket" value="4">
								<span>Слоновая кость (светлый)</span>
							</label>
						</div>
					</div>

					<div class="column">
						<span class="column__title">Цвет поликарбоната:</span>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="colorPoly" value="1">
								<span>Темный</span>
							</label>
						</div>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="colorPoly" value="2">
								<span>Без проликарбоната</span>
							</label>
						</div>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="colorPoly" value="3">
								<span>Прозрачный</span>
							</label>
						</div>
					</div>

					<div class="column">
						<span class="column__title">Ширина козырька (мм):</span>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="width" value="1">
								<span>1100</span>
							</label>
						</div>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="width" value="2">
								<span>1500</span>
							</label>
						</div>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="width" value="3">
								<span>2200</span>
							</label>
						</div>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="width" value="4">
								<span>3300</span>
							</label>
						</div>
						<div class="checkbox">
							<label class="custom-checkbox">
								<input type="radio" name="width" value="5">
								<span>4400</span>
							</label>
						</div>
						<span class="notify">
							*козырьки стыкуются между собой без щелей и зазоров в любом количестве
						</span>
					</div>
				</div>
				<button class="btn btn-shadow" type="submit">Результат</button>
			</form>
		</section>

		<section id="gallery">
			<div class="row">
				<div class="title">
					<div class="title__main">Фотографии</div>
					<div class="title__sub">козырьков от наших покупателей</div>
				</div>
				<div class="content">
					<a href="#" class="popup"><img src="<?=get_template_directory_uri()?>/assets/img/pic1.png"></a>
					<a href="#" class="popup"><img src="<?=get_template_directory_uri()?>/assets/img/pic2.png"></a>
					<a href="#" class="popup"><img src="<?=get_template_directory_uri()?>/assets/img/pic3.png"></a>
				</div>
			</div>
			<a href="#" class="btn btn-shadow">Все фото</a>
		</section>

		<section id="faq">
			<div class="title">
				<div class="title__main">Часто задаваемые вопросы</div>
				<div class="title__sub">наших покупателей</div>
			</div>
			<div class="accordion">
				<div class="head">
					<i class="icon-circle"></i>
					<span>
						10 лет гарантии - если зимой охрупчится пластик и кронштейны подломятся под нагрузкой льда и снега, то в чем и от кого будет заключаться гарантия?
					</span>
				</div>
				<div class="content">
					Если сборка, монтаж и стыковка козырька/ов была произведена в строгом соответствии с Инструкцией по сборке и монтажу, прилагающейся к каждой упаковке товара. При сборке НЕ были внесены изменения в детали конструкции, например:(увеличен паз алюминиевой планки жесткости, использован клей/герметик для стыковки, использован поликарбонат менее 6 мм, заменены крепежные детали (дюбеля, саморезы) и др. не описанные действия в Инструкции. При сборке была соблюдена жесткость конструкции, а именно: прямой угол между стыкуемыми деталями, выдержан горизонт крепления нескольких стыкуемых секций, ровный фасад или стена крепления козырька, умеренно затянуты крепежные шурупы или болты, листы поликарбоната плотно вставлены в пазы кронштейна и/или планок жесткости. Крыша здания, к фасаду которого смонтированы козырьки, имеет оборудование, обеспечивающее безопасность в случае стихийного, лавинообразного схода льда и снега, обледенения, образования сосулек (снегозадержатели, снегорезы, снеговые барьеры). И козырек сломался, вы присылаете нам качественные фотографии и чек. Решение о передаче конструкции на оценку гарантийного случая принимается индивидуально по каждому обращению. 90% случаев мы сможем урегулировать дистанционно по фото и вашему описанию. Мы всегда стараемся найти наилучшее решение для нашего клиента. Желаем Вам в дальнейшем приятных покупок и отличного настроения! Будем рады видеть Вас среди наших постоянных покупателей! С Уважением, АЛМАРТА - для тех, кто любит свой дом.
				</div>
			</div>
			<div class="accordion">
				<div class="head">
					<i class="icon-circle"></i>
					<span>
						Мне сказали, что козырек расчитан на снеговую нагрузку 110кг. 110/1.48 = 74кг/ м2. Для примера в Сибири (IV зона) расчетная снеговая нагрузка 200кг/м2. Т.е. эти козырьки только для южных регионов?
					</span>
				</div>
				<div class="content">
					Наши козырьки установлены в северных регионах еще несколько лет назад и отлично себя зарекомендовали. Рекламации есть, но они происходят по причине лавинообразного схода снега с крыши, как правило у тех, у кого крыша не оборудована снегозадержателями и снегорезами. Наш козырек выдерживает нагрузку 110 кг на секцию, а в момент схода снег имеет массу во много раз превышающую эти параметры. Поэтому мы всегда рекомендуем оборудовать крышу снегорезами и снегозадержателями, ведь такая масса снега может не только сломать козырек, но и нанести серьёзные повреждения другим постройкам и людям. Вторая причина, это неправильная сборка и монтаж козырька на стену и, как следствие, ломается одна секция которая за собой тянет весь козырек. Просим при монтаже козырька следовать строго инструкции и тогда козырек АЛМАРТА прослужит Вам долгие года. Желаем Вам в дальнейшем приятных покупок и отличного настроения! Будем рады видеть Вас среди наших постоянных покупателей! С Уважением, АЛМАРТА - для тех, кто любит свой дом.
				</div>
			</div>
			<div class="accordion">
				<div class="head">
					<i class="icon-circle"></i>
					<span>
						Поддаются ли планки жёсткости укорачиванию? Мне нужно будет уменьшить общий размер с 2200 до 1800
					</span>
				</div>
				<div class="content">
					Да. Планки можно укоротить до любой длины. На нашем сайте и канале Youtube есть видео, как это сделать. 
Желаем приятных покупок.  
АЛМАРТА для тех, кто любит свой дом!
				</div>
			</div>
			<div class="accordion">
				<div class="head">
					<i class="icon-circle"></i>
					<span>
						Какой материал боковых кронштейнов?
					</span>
				</div>
				<div class="content">
					Боковые кронштейны состоят из полипропилена - это морозостойкий, качественный материал, достаточно крепкий и надежный. С 2012 годы наши козырьки радуют покупатлей от Хабаровска до Сочи.
Поликарбонат, который применяется для козырька качественный. Толщина его 6 мм. Вес пластика — 1100 грамм на 1 м². 
Желаем Вам приятных покупок!
				</div>
			</div>
			<div class="accordion">
				<div class="head">
					<i class="icon-circle"></i>
					<span>
						Можно ли соединить два козырька между собой?
					</span>
				</div>
				<div class="content">
					Да, конечно, Вы можете соединить несколько козырьков в один. Секции стыкуются друг с другом без зазоров и щелей.
Желаем Вам приятных покупок!
С уважением, АЛМАРТА - для тех, кто любит свой дом.
				</div>
			</div>
			<div class="accordion">
				<div class="head">
					<i class="icon-circle"></i>
					<span>
						Скажите, пожалуйста, можно ли крепить козырек к дачному дому, покрытому сайдингом?
					</span>
				</div>
				<div class="content">
					Да, Вы можете прикрепить козырек на сайдинг.
Как это правильно сделать Вам могут пояснить наши менеджеры, а также выслать фотографию.
Желаем Вам приятных покупок!
				</div>
			</div>
			<a href="#" class="btn btn-shadow">Все вопросы</a>
		</section>

		<section id="callback">
			<div class="block">
				<div class="block__title">Не знаете какой козырек купить?</div>
				<div class="block__text">Оставьте заявку и мы перезвоним!</div>
				<a href="#" class="block__link">Получить консультацию</a>
			</div>
		</section>

<?php
get_footer();
