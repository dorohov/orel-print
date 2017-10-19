<?
	$block_prefix = "contacts-panel__";
	$address = getContact('address');
	$webSite = getContact('webSite');
	$phone = getContact('phone');
	$map = getContact('map');
	$phone_num = phone(getContact('phone'));
?>
<div class="content-block contacts-page__content-block" role="main">
	<div class="container content-block__container contacts-page__container"> 
		<div class="breadcrumb__block  is--center">
			<ul class="breadcrumb__list  is--center">
				<li class="breadcrumb__list-item"><a href="/" class="breadcrumb__list-link">Главная</a></li>
				<li class="breadcrumb__list-item is--active"><?=t(2);?></li>
			</ul>
		</div>		
		<div class="page-header__block  is--heading  is--center  is--contacts">
			<h1 class="page-header__heading  is--heading  is--center  is--contacts"><span><?=t(2);?></span></h1>		
		</div> 
		<div class="<?=$block_prefix;?>block">
			<div class="<?=$block_prefix;?>text-block">
				<?=c(2);?>
			</div>
			<div class="<?=$block_prefix;?>row row  is--wrap  is--top">
				<?if ($address != ""){?>
				<div class="<?=$block_prefix;?>cols cols">
					<div class="contact-item__item is--nobg">
						<div class="contact-item__icon  is--nobg">
							<svg class="icon-svg icon-contacts-location" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-location"></use></svg>
						</div>
						<?=$address;?>
					</div>			
				</div>	
				<?}?>
				<?if ($webSite != ""){?> 
				<div class="<?=$block_prefix;?>cols cols">
					<div class="contact-item__item  is--round">
						<a href="http://www.ctocongress.ru/" target='_blank' class="contact-item__link  is--round">
							<div class="contact-item__icon  is--round">
								<svg class="icon-svg icon-contacts-link" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-link"></use></svg>
							</div>
							<?=$webSite;?>
						</a>
					</div>				
				</div>
				<?}?>
				<?if ($phone != ""){?> 
				<div class="<?=$block_prefix;?>cols cols">
					<div class="contact-item__item  is--round">
						<a href="tel:+<?=$phone_num?>" class="contact-item__link  is--round">
							<div class="contact-item__icon  is--round">
								<svg class="icon-svg icon-contacts-tel" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-tel"></use></svg>
							</div>
							<?=$phone;?>
						</a>
					</div>			
				</div>	
				<?}?>
				<div class="<?=$block_prefix;?>cols cols  is--cols-12">			
					<div class="<?=$block_prefix;?>map">
						<div class="<?=$block_prefix;?>map-item" id="map-google" data-map='<?=$map;?>' ></div>
					</div>
				</div>
			</div>
			<div class="<?=$block_prefix;?>row row  is--wrap">	
				<div class="<?=$block_prefix;?>cols cols  is--cols-screen-3  is--cols-sm-6">
					<div class="<?=$block_prefix;?>item">
						<div class="<?=$block_prefix;?>item-heading">Общая координация проекта</div>
						<div class="<?=$block_prefix;?>item-name">Обухова Лилия</div>
						<div class="<?=$block_prefix;?>item-num">					
							<div class="contact-item__item  is--round  is--top">
								<a href="tel:+74956460155"    class="contact-item__link  is--round  is--top">
									<div class="contact-item__icon  is--round  is--top">
										<svg class="icon-svg icon-contacts-tel" role="img">
											<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-tel"></use>
										</svg>	
									</div>
									+7 (495) 646-01-55 доб. 140
								</a>
								<a href="tel:+79269189680"    class="contact-item__link  is--round  is--top  is--num-2">
									+7 (926) 918–96-80 
								</a>
							</div>
						</div>
						<div class="<?=$block_prefix;?>item-num">
							<div class="contact-item__item  is--round">
								<a href="http://www.ctocongress.ru/" target='_blank' class="contact-item__link  is--round">
									<div class="contact-item__icon  is--round">
										<svg class="icon-svg icon-contacts-link" role="img">
											<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-link"></use>
										</svg>
									</div>
									www.ctocongress.ru
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="<?=$block_prefix;?>cols cols  is--cols-screen-3  is--cols-sm-6">
					<div class="<?=$block_prefix;?>item">
						<div class="<?=$block_prefix;?>item-heading">Работа с участниками, гостиничное размещение, трансферы</div>
						<div class="<?=$block_prefix;?>item-name">Тихомирова Радмила</div>
						<div class="<?=$block_prefix;?>item-num">					
							<div class="contact-item__item  is--round  is--top">
								<a href="tel:+74956460155"    class="contact-item__link  is--round  is--top">
									<div class="contact-item__icon  is--round  is--top">
										<svg class="icon-svg icon-contacts-tel" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-tel"></use></svg>	
									</div>
									+7 (495) 646-01-55 доб. 140
								</a>
								<a href="tel:+79269189680" class="contact-item__link  is--round  is--top  is--num-2">
									+7 (926) 918-96-80 
								</a>
							</div>
						</div>
						<div class="<?=$block_prefix;?>item-num">
							<div class="contact-item__item  is--round">
								<a href="mailto:fast-track2017@ctogroup.ru"    class="contact-item__link  is--round">
									<div class="contact-item__icon  is--round">
										<svg class="icon-svg icon-contacts-email" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-email"></use></svg>
									</div>
									fast-track2017@ctogroup.ru
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="<?=$block_prefix;?>cols cols  is--cols-screen-3  is--cols-sm-6">
					<div class="<?=$block_prefix;?>item">
						<div class="<?=$block_prefix;?>item-heading">Спонсорство и выставка </div>
						<div class="<?=$block_prefix;?>item-name">Матвей Усов</div>
						<div class="<?=$block_prefix;?>item-num">					
							<div class="contact-item__item  is--round  is--top">
								<a href="tel:+74956460155"    class="contact-item__link  is--round  is--top">
									<div class="contact-item__icon  is--round  is--top">
										<svg class="icon-svg icon-contacts-tel" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-tel"></use></svg>	
									</div>
									+7 (495) 646-01-55 доб. 140
								</a>
								<a href="tel:+79269189680"    class="contact-item__link  is--round  is--top  is--num-2">
									+7 (926) 918-96-80 
								</a>
							</div>
						</div>
						<div class="<?=$block_prefix;?>item-num">
							<div class="contact-item__item  is--round">
								<a href="mailto:fast-track2017@ctogroup.ru"    class="contact-item__link  is--round">
									<div class="contact-item__icon  is--round">
										<svg class="icon-svg icon-contacts-email" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-email"></use></svg>
									</div>
									fast-track2017@ctogroup.ru
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="<?=$block_prefix;?>cols cols  is--cols-screen-3  is--cols-sm-6">
					<div class="<?=$block_prefix;?>item">
						<div class="<?=$block_prefix;?>item-heading">СМИ и информационное партнерство </div>
						<div class="<?=$block_prefix;?>item-name">Евгения Фролова</div>
						<div class="<?=$block_prefix;?>item-num">					
							<div class="contact-item__item  is--round  is--top">
								<a href="tel:+74956460155"    class="contact-item__link  is--round  is--top">
									<div class="contact-item__icon  is--round  is--top">
										<svg class="icon-svg icon-contacts-tel" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-tel"></use></svg>	
									</div>
									+7 (495) 646-01-55 доб. 140
								</a>
								<a href="tel:+79269189680"    class="contact-item__link  is--round  is--top  is--num-2">
									+7 (926) 918-96-80 
								</a>
							</div>
						</div>
						<div class="<?=$block_prefix;?>item-num">
							<div class="contact-item__item  is--round">
								<a href="mailto:fast-track2017@ctogroup.ru"    class="contact-item__link  is--round">
									<div class="contact-item__icon  is--round">
										<svg class="icon-svg icon-contacts-email" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-email"></use></svg>
									</div>
									fast-track2017@ctogroup.ru
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="<?=$block_prefix;?>cols cols  is--cols-screen-4  is--cols-sm-6">	
					<div class="<?=$block_prefix;?>item">
						<div class="<?=$block_prefix;?>item-heading">Научный секретарь Оргкомитета Конференции</div>
						<div class="<?=$block_prefix;?>item-name">Губайдуллин Ренат Рамилевич</div>
						<div class="<?=$block_prefix;?>item-num  is--lg">
							<div class="contact-item__item  is--round">
								<a href="tel:+74956460155"    class="contact-item__link  is--round">
									<div class="contact-item__icon  is--round">
										<svg class="icon-svg icon-contacts-tel" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-tel"></use></svg>
									</div>
									+7 (495) 646-01-55
								</a>
							</div>
						</div>
						<div class="<?=$block_prefix;?>item-num">
							<div class="contact-item__item  is--round">
								<a href="http://www.ctocongress.ru/" target='_blank' class="contact-item__link  is--round">
									<div class="contact-item__icon  is--round">
										<svg class="icon-svg icon-contacts-link" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#contacts-link"></use></svg>
									</div>
									www.ctocongress.ru
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>	
</div>