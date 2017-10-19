<div class="content-block news-page__block" role="main">
	<div class="container content-block__container news-page__container"> 
		<div class="breadcrumb__block  is--center">
			<ul class="breadcrumb__list  is--center">
				<li class="breadcrumb__list-item"><a href="/" class="breadcrumb__list-link">Главная</a></li>	
				<li class="breadcrumb__list-item  is--active"><?=t($id);?></li>
			</ul>
		</div>		
		<div class="page-header__block  is--heading  is--center">
			<h1 class="page-header__heading  is--heading  is--center"><span><?=t($id);?></span></h1>		
		</div>
		<div class="text__container">
			<div class="text__block">
				<?=c($id);?>
			</div>
		</div>
	</div>
</div>