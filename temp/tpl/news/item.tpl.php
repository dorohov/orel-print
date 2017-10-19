<div class="content-block news-page__block" role="main">
	<div class="container content-block__container news-page__container"> 
		<div class="breadcrumb__block  is--center">
			<ul class="breadcrumb__list  is--center">
				<li class="breadcrumb__list-item"><a href="/" class="breadcrumb__list-link">Главная</a></li>		
				<li class="breadcrumb__list-item">
					<a href="<?=l(4);?>" class="breadcrumb__list-link"><?=t(4);?></a>
				</li>
				<li class="breadcrumb__list-item  is--active"><?=t($this->post['id']);?></li>
			</ul>
		</div>		
		<div class="page-header__block  is--heading  is--center">
			<h1  class="page-header__heading  is--heading  is--center"><span><?=t($this->post['id']);?></span></h1>		
		</div> 
		
		<div class="text__container">
			<div class="text__block">
				<?=c($this->post['id']);?>
			</div>
		</div>
	</div>
</div>
<?$gallery = get_field("news__gallery", $this->post['id']);
	if(count($gallery)) {?>
<div class="gallery-block__block">
	<div class="container gallery-block__container">
		<div class="gallery-block__row row  is--wrap  is--gutter">
			<?foreach($gallery as $id) {
				$preview = $this->Imgs->rawImg($id, '495x330');
				$preview_full = $this->Imgs->rawImg($id, 'full');?>			
			<div class="gallery-block__cols cols  is--cols-4">
				<a href="<?=$preview_full;?>" data-fancybox="block_fancybox" class="gallery-card__item">
					<img src="<?=$preview;?>" alt=""> 
				</a>
			</div>
			<? } ?>
		</div>
	</div>
</div>
<? } ?>