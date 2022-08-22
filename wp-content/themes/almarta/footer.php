	<footer>
		<div class="footer__wrapper">
			<div class="row">
				<div class="footer__column">
					<img src="<?=get_template_directory_uri()?>/assets/img/logo.png" width="148" height="118">
				</div>
				<div class="footer__column">
					<p class="column-title">Продукция</p>
					<ul>
						<li><a href="#">Козырьки</a>
						<li><a href="#">Усиленные козырьки</a>
						<li><a href="#">Каркасы</a>
						<li><a href="#">Сопутствующие товары</a>
					</ul>
				</div>
				<div class="footer__column">
					<p class="column-title">Информация</p>
					<ul>
						<li><a href="#">О компании</a>
						<li><a href="#">Доставка и оплата</a>
						<li><a href="#">Контакты</a>
						<li><a href="#">Инструктаж</a>
					</ul>
				</div>
				<div class="footer__column">
					<p class="column-title">Покупателям</p>
					<ul>
						<li><a href="#">Монтаж</a>
						<li><a href="#">Часто задаваемые вопросы</a>
						<li><a href="#">Каталог</a>
						<li><a href="#">Инструкция сборки</a>
						<li><a href="#">Размеры поликарбоната</a>
					</ul>
				</div>
				<div class="footer__column">
					<p class="column-title">Обратный звонок</p>
					<form class="callback">
						<input type="text" name="phone">
						<label>Оставьте свой номер, и мы перезвоним</label>
						<button type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
					</form>
					<p class="worktime">
						Время работы контакт-центра:<br>
						пн-пт с 9:00 до 18:00<br>
						сб-вс: выходные
					</p>
					<div class="contact">
						<div class="contact__icon phone"></div>
						<div class="contact__text">
							<a href="tel://74996861088">+7 (499) 686-10-88</a>
							<a href="tel://79770001245">+7 (977) 000-12-45</a>
						</div>
					</div>
					<div class="contact">
						<div class="contact__icon mail"></div>
						<div class="contact__text">
							<a href="mailto://almarta@almarta.ru">almarta@almarta.ru</a>
						</div>
					</div>
					<div class="contact">
						<div class="contact__icon instagram"></div>
						<div class="contact__text">
							<a href="https://www.instagram.com/almarta_rus/">@almarta_rus</a>
						</div>
					</div>
					<div class="social">
						<a href="#" class="facebook"></a>
						<a href="#" class="pinterest"></a>
						<a href="#" class="vk"></a>
					</div>
					<p class="inn">
						ОГРН: 1147746261190<br>
						ИНН: 7720807376
					</p>
				</div>
			</div>
			<div class="copyright">
				© 2008-2020. Все права защищены и принадлежат ООО «АЛМАРТА РУС».<br>Юридический адрес: 143057, Московская обл., Одинцовский район, с. Каринское 1В
			</div>
		</div>
	</footer>

	<div id="lightbox" class="modal">
		<span class="close">×</span>
		<img class="modal-content">
	</div>

	<?php wp_footer(); ?>
	
</body>
</html>
