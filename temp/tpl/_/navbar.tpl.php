<?
	$email = getContact('email');
	$email_arr = explode('@', $email);
	$phone = getContact('phone');	
	$phone_num = phone(getContact('phone'));
?>
<nav class="navbar-site scroll navbar scroll-navbar">
	<div class="<?=$param["block_prefix"];?>inner">
		<div class="container <?=$param["block_prefix"];?>container">
			<div class="row <?=$param["block_prefix"];?>row">
				<div class="cols <?=$param["block_prefix"];?>cols  is--header"> 	
					<div class="<?=$param["block_prefix"];?>header">
						<div class="row <?=$param["block_prefix"];?>row-header ">
							<div class="cols <?=$param["block_prefix"];?>cols-header  is--hamburger">
								<div class="<?=$param["block_prefix"];?>hamburger">
									<button class="<?=$param["block_prefix"];?>hamburger-btn hamburger__item" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false" data-toggle-nav=".navbar-site" data-body="html" data-collapse-nav=".navbar__collapse">
										<span class="hamburger__line  is--left"></span>
										<span class="hamburger__line  is--center"></span>
										<span class="hamburger__line  is--right"></span>
									</button>
								</div>
							</div>
							<div class="cols <?=$param["block_prefix"];?>cols-header  is--brand">
								<a class="<?=$param["block_prefix"];?>brand" href="/">
									<svg class="icon-svg icon-logotip" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#logotip"></use></svg>
								</a>
							</div>
							<div class="cols <?=$param["block_prefix"];?>cols-header  is--tel">
								<a href="tel:{{contacts.phone_tel}}" class="<?=$param["block_prefix"];?>tel  is--icon">
									<svg class="icon-svg icon-tel" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#tel"></use></svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="cols <?=$param["block_prefix"];?>cols  is--collapse">
					<div class="<?=$param["block_prefix"];?>collapse" >
						<div class="<?=$param["block_prefix"];?>collapse-inner">
							<div class="row <?=$param["block_prefix"];?>collapse-row">
								<div class="cols <?=$param["block_prefix"];?>collapse-cols  is--soc" >
									<?
										$this->tpl(
											'_/social/social', 
											array(
												"block_prefix"=>"social__",
											)
										);
									?> 
								</div>
								<div class="cols <?=$param["block_prefix"];?>collapse-cols  is--nav">
									<div class="row <?=$param["block_prefix"];?>nav-row  is--wrap">
										<div class="cols <?=$param["block_prefix"];?>nav-cols cols  is--sm">
											<ul class="<?=$param["block_prefix"];?>nav  is--sm">
												<?
													$menu_items = $this->getMenu(2);
													if(count($menu_items)) {
														var_dump($menu_items);
														foreach($menu_items as $item) {
															$navbar_name = $item->navbar_name;
															$item_class = '';
															if($item->object_id == $this->post['id']){
																$item_class = $item_class . ' is--active ';
															}
															
													?>
													<li class="<?=$param["block_prefix"];?>nav-item <?=$item_class;?> ">
														<a href="<?=$item->url;?>" class="<?=$param["block_prefix"];?>nav-link">
															<? if($navbar_name != '') {
																echo $navbar_name;
															} else {
																echo $item->title;
															} ?>
														</a>  
													</li>
												<?
													}
												}
												?> 
											</ul>
										</div>
										<div class="cols <?=$param["block_prefix"];?>nav-cols cols">
											<ul class="<?=$param["block_prefix"];?>nav">
												  
											</ul>
										</div>
									</div>
								</div>
								<div class="cols <?=$param["block_prefix"];?>collapse-cols  is--contacts" >
									<?if ($phone != ""){?>
									<div class="<?=$param["block_prefix"];?>tel-block">
										<a href="tel:+<?=$phone_num?>" class="<?=$param["block_prefix"];?>tel"><?=$phone;?></a>
									</div>
									<?}?>
									<?if ($email != ""){?>
									<div class="<?=$param["block_prefix"];?>tel-block">
										<a href="mailto:<?=$email;?>" class="<?=$param["block_prefix"];?>email"><span><?=$email_arr[0];?></span>@<?=$email_arr[1];?></a>
									</div>
									<?}?>
								</div>
								<div class="cols <?=$param["block_prefix"];?>collapse-cols  is--btn" >
									<button type="button" data-toggle="modal" data-target="#modal-enter" class="<?=$param["block_prefix"];?>btn-icon">
										<svg class="icon-svg icon-btn-login" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#btn-login"></use></svg>
									</button>
									<a href="<?=l(1);?>" class="<?=$param["block_prefix"];?>btn-icon">
										<svg class="icon-svg icon-btn-basket" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#btn-basket"></use></svg>
										<span class="<?=$param["block_prefix"];?>btn-icon-label">5</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>

<?
	$menu_items = $this->getMenu(3);
	//__theme_ed($menu_items);
	if(count($menu_items)) {
		foreach($menu_items as $item) {
			$item_class = '';
			if($item->object_id == $this->post['id']){
				$item_class = $item_class . ' is--active ';
			}
			
	?>								
	<li class="<?=$block_prefix;?>nav-item <?=$item_class;?> ">
		<a href="<?=$item->url;?>" class="<?=$block_prefix;?>nav-link"><?=$item->title;?></a>  
	</li>
<?
	}
}
?>  