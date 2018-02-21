<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading 		= get_field('interface__heading', $id);
	$_heading_mod 	= $param['block_heading_mod'];
	$_text_left 	= get_field('interface__note-left', $id);
	$_text_right 	= get_field('interface__note-right', $id);
?>
<div class="<?=$_prefix;?>block">
	<?
	$this->tpl('landing-albina/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-albina/bg-flover-680-760.png",
		"block_mod"		=>	"is--flover-680"
	));
	?>
	<div class="container <?=$_prefix_page;?>container  <?=$_prefix;?>container">
		<?if ($_heading != ""){?>
		<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading;?></h2>
		<?}?>
		<div class="row <?=$_prefix;?>row">
			<?if ($_text_left != ""){?>		
			<div class="cols <?=$_prefix;?>cols  is--left">
				<div class="<?=$_prefix_page;?>text-block  ">
					<?=$_text_left;?>
				</div>		
			</div>	
			<?}?>	
			<?if ($_text_right != ""){?>		
			<div class="cols <?=$_prefix;?>cols  is--right">
				<div class="<?=$_prefix_page;?>text-block  ">
					<?=$_text_right;?>
				</div>		
			</div>	
			<?}?>
		</div>

		<div class="iphone-slider" data-interval-ms="0">
			<div class="iphone-slider__bg">
				<div class="iphone-slider__container">
					<div class="iphone-slider__item" 
						style="background-image:url(<?=$this->path('img');?>/lp-albina/slider-xs-item1.jpg)"
						data-style="background-image:url(<?=$this->path('img');?>/lp-albina/slider-xl-item3.jpg)"
					></div>
					<div class="iphone-slider__item" 
						style="background-image:url(<?=$this->path('img');?>/lp-albina/slider-xs-item2.jpg)"
						data-style="background-image:url(<?=$this->path('img');?>/lp-albina/slider-xl-item1.jpg)"
					></div>
					<div class="iphone-slider__item" 
						style="background-image:url(<?=$this->path('img');?>/lp-albina/slider-xs-item3.jpg)"
						data-style="background-image:url(<?=$this->path('img');?>/lp-albina/slider-xl-item2.jpg)"
					></div>
				</div>
			</div>
			<div class="iphone-slider__blurscreen">
				<div class="iphone-slider__blurscreen-inner"></div>
			</div>
			<button type="button" class="iphone-slider__btn  is--right ">
				<span class="iphone-slider__btn-arrow">
					<svg class="icon-svg icon-lp-enerfit-arrow-right" role="img">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-enerfit-arrow-right"></use>
					</svg>
				</span>
			</button>
			<button type="button" class="iphone-slider__btn  is--left ">
				<span class="iphone-slider__btn-arrow">
					<svg class="icon-svg icon-lp-enerfit-arrow-left" role="img">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?=$this->path('img');?>/svg/sprite.svg#lp-enerfit-arrow-left"></use>
					</svg>
				</span>
			</button>
			<ul class="iphone-slider__dots">
				<li class="iphone-slider__dot is--active"><button class="iphone-slider__item-btn" ></button></li>
				<li class="iphone-slider__dot"></li>
				<li class="iphone-slider__dot"></li>
				<li class="iphone-slider__dot"></li>
				<li class="iphone-slider__dot"></li>
			</ul>
			<ul class="iphone-slider__count">
				<li class="iphone-slider__count-item iphone-slider__count-item_number is--active ">03</li>
				<li class="iphone-slider__count-item">/</li>
				<li class="iphone-slider__count-item iphone-slider__count-item_amount">03</li>
			</ul>
		</div>	
	</div> 
</div>