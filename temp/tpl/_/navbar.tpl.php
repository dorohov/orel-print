<?
	$block_prefix = "navbar__";
?>
<nav class="navbar navbar-site scroll">
	<div class="container <?=$block_prefix;?>container">
		<div class="row <?=$block_prefix;?>row">
			<div class="cols <?=$block_prefix;?>cols  is--header"> 				
				<div class="<?=$block_prefix;?>header">
					<div class="row <?=$block_prefix;?>row-header ">
						<div class="cols <?=$block_prefix;?>cols-header  is--hamburger">
							<div class="<?=$block_prefix;?>hamburger">
								<button class="<?=$block_prefix;?>hamburger-btn hamburger__item" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false" data-toggle-nav=".navbar-site" data-body="html" data-collapse-nav=".<?=$block_prefix;?>collapse">
									<span class="hamburger__line  is--left"></span>
									<span class="hamburger__line  is--center"></span>
									<span class="hamburger__line  is--center-2"></span>
									<span class="hamburger__line  is--right"></span>
								</button>
							</div>
						</div>
						<div class="cols <?=$block_prefix;?>cols-header  is--brand">
							<a class="<?=$block_prefix;?>brand" href="/">
								<img src="<?=$this->path('img');?>/default/logotip-navbar.png" alt="">
							</a>
						</div>						
						<div class="cols <?=$block_prefix;?>cols-header  is--tel">
							<button type="button" class="btn__item is--icon" data-toggle="modal" data-target="#modal-enter"><svg class="icon-svg icon-login" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#login"></use></svg></button>	
						</div>
					</div>
				</div>
			</div>
			<div class="cols <?=$block_prefix;?>cols  is--collapse">
				<div class="<?=$block_prefix;?>collapse" >
					<div class="<?=$block_prefix;?>collapse-inner">
						<div class="row <?=$block_prefix;?>collapse-row">
							<div class="cols <?=$block_prefix;?>collapse-cols  is--nav">	
								<ul class="<?=$block_prefix;?>nav  is--nav">	
									<?
									$menu_items = $this->getMenu(2);
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
								</ul>
							</div>
							<div class="cols <?=$block_prefix;?>collapse-cols  is--right" >	
								<button type="button" class="btn__item is--xs" data-toggle="modal" data-target="#modal-enter">Войти</button>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>