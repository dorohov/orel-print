<?
$block_prefix = "demands-page__";
$bg_card = get_field('bg_card', $id);
$heading_small = get_field('page_heading_small', $id);
$heading_color = get_field('heading_color', $id);
?>
<div class="content-block <?=$block_prefix;?>content-block  is--hidden" role="main">	
	<div class="page-header-panel__block  <?=$heading_color;?>">
		<div class="page-header-panel__container container">
			<div class="breadcrumb__block  is--heading  is--blue">
				<ul class="breadcrumb__list  is--heading  is--blue">
					<li class="breadcrumb__list-item">
						<a href="/" class="breadcrumb__list-link">Главная</a>
					</li>
					<li class="breadcrumb__list-item">
						<a href="<?=l(32);?>" class="breadcrumb__list-link"><?=t(32);?></a>
					</li>
					<li class="breadcrumb__list-item is--active"><?=t($id);?></li>
				</ul>
			</div>	
			<div class="page-header__block  is--heading  is--blue  is--panel">
				<h1 class="page-header__heading  is--heading  is--blue  is--panel"><span><?=t($id);?></span></h1>	
				<?if ($heading_small != ""){?>
				<h3 class="page-header__heading-small  is--heading  is--blue  is--panel"><?=$heading_small;?></h3>		
				<?}?>
			</div>
			<?
				$this->tpl(
					'_/bg-round', 
					array(
						"block_prefix"=>"bg-round__",
					)
				);
			?>   
			<?
			$this->tpl(
				'_/bg-card-preview', 
				array(
					"block_prefix" => "bg-preview__",
					"block_mod" => "is--demands",
					"block_bg" => $bg_card,
				)
			);
			?>
			<?
			$this->tpl(
				'_/bg-card', 
				array(
					"block_prefix" => "bg-plane__",
					"block_mod" => "is--demands-top  is--speed-5",
					"block_bg" => "bg-plane-demands-green.png",
				)
			);
			?>	
			<?
			$this->tpl(
				'_/bg-card', 
				array(
					"block_prefix" => "bg-plane__",
					"block_mod" => "is--demands-left  is--speed-25",
					"block_bg" => "bg-plane-demands-white-lg.png",
				)
			);
			?>			
		</div>	
	</div>
	<div class="container content-block__container <?=$block_prefix;?>container  bg-header__container">	
		<div class="demands-panel__block">
			<div class="demands-panel__row row  is--gutter  is--wrap">
				<div class="demands-panel__cols cols  is--cols-screen-7  is--cols-sm-12">
					<div class="demands-panel__text-block  text__block">
						<?=c($id);?>						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>