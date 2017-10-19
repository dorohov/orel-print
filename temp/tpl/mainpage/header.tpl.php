<?
	$banner__link = get_field('banner__link', $id);
	$banner__preview = get_field('banner__preview', $id);
	$banner__preview__xs = get_field('banner__preview-xs', $id);
	$video = get_field('video', $id);
	$video__preview = get_field('video__preview', $id);
	$video__heading = get_field('video__heading', $id);
	$video__note = get_field('video__note', $id);
	$pages = get_field("include__pages", $id);	
	$conference = get_field("include__conference", $id);	
	if ($video__preview == ""){
		$video__preview = "https://placeholdit.imgix.net/~text?txtsize=90&txt=Нет фото&w=755&h=380";
	} 
?>
<header class="<?=$param["block_prefix"];?>block">	
	<div class="<?=$param["block_prefix"];?>container container">
		<div class="<?=$param["block_prefix"];?>row row  is--wrap  is--gutter">
			<?if($banner__preview != ""){?>
			<div class="<?=$param["block_prefix"];?>cols cols  is--cols-12">
				<?if($banner__link != ""){?>
				<a href="<?=$banner__link;?>">
					<img src="<?=$banner__preview;?>" 
						data-src-0="<?=$banner__preview__xs;?>" 
						data-src-451="<?=$banner__preview;?>" alt="">
				</a>
				<?} else {?>
					<img src="<?=$banner__preview;?>" 
						data-src-0="<?=$banner__preview__xs;?>" 
						data-src-451="<?=$banner__preview;?>" alt="">
				<?}?>
			</div>
			<?}?>			
			<?
				if(count($conference)) {				
					foreach($conference as $id) {
						$preview = $this->Imgs->postImg($id->ID, '755x380');
						$link = l($id->ID);
						$title = t($id->ID);
						$heading = get_post_meta($id->ID, 'heading', true);
						if ($preview == ""){
							$preview = "https://placeholdit.imgix.net/~text?txtsize=90&txt=Нет фото&w=755&h=380";
						} 
						if ($heading == ""){
							$heading = $title;
						} 
			?>	
				<div class="<?=$param["block_prefix"];?>cols cols  is--cols-6">	
					<a href="<?=$link;?>" class="index-header-card__item">
						<div class="index-header-card__preview">
							<img src="<?=$preview;?>" alt="">
						</div>
						<div class="index-header-card__inner">
							<h3 class="index-header-card__heading"><?=$heading;?></h3>
						</div>
					</a>	
				</div>
			<? } 
			} ?>
			<?if($video != ""){?>
			<div class="<?=$param["block_prefix"];?>cols cols  is--cols-6">				
				<a href="#" data-toggle="modal" data-target="#modal-video" class="index-header-card__item  is--show-video" data-iframe-url="https://www.youtube.com/embed/<?=$video;?>?autoplay=1">
					<div class="index-header-card__preview">
						<img src="<?=$video__preview?>" alt="">
					</div>
					<div class="index-header-card__inner">
						<?if($video__heading != ""){?>
						<h3 class="index-header-card__heading"><?=$video__heading;?></h3>
						<?}?>
						<?if($video__note != ""){?>
						<div class="index-header-card__note"><?=$video__note?></div>
						<?}?>
					</div>
				</a>	
			</div>
			<?}?>
			<?
				if(count($pages)) {				
					foreach($pages as $id) {
						$preview = $this->Imgs->postImg($id->ID, '755x380');
						$link = l($id->ID);
						$title = t($id->ID);
						$heading = get_post_meta($id->ID, 'heading', true);
						if ($preview == ""){
							$preview = "https://placeholdit.imgix.net/~text?txtsize=90&txt=Нет фото&w=755&h=380";
						} 
						if ($heading == ""){
							$heading = $title;
						} 
			?>	
				<div class="<?=$param["block_prefix"];?>cols cols  is--cols-6">	
					<a href="<?=$link;?>" class="index-header-card__item">
						<div class="index-header-card__preview">
							<img src="<?=$preview;?>" alt="">
						</div>
						<div class="index-header-card__inner">
							<h3 class="index-header-card__heading"><?=$heading;?></h3>
						</div>
					</a>	
				</div>
			<? } 
			} ?>
		</div>
	</div>
</header>