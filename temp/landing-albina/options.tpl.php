<div class="<?=$param['block_prefix'];?>block">
	<div class="container <?=$param['block_prefix'];?>container <?=$param['page_prefix'];?>container">
		<div class="row <?=$param['block_prefix'];?>row">
			<div class="<?=$param['block_prefix'];?>cols cols  is--note">		<?if (get_field('tour_heading', $id)){?>
				<h2 class="<?=$param['page_prefix'];?>heading <?=$param['block_prefix'];?>heading  is--heading"><?=get_field('tour_heading', $id);?></h2>
				<?}?>	
				<?if (get_field('tour_note', $id)){?>	
				<div class="<?=$param['page_prefix'];?>text-block <?=$param['block_prefix'];?>text-block		">
					<?=get_field('tour_note', $id);?>
				</div>
				<?}?>
			</div>
			<div class="<?=$param['block_prefix'];?>cols cols  is--img">			
				<div class="<?=$param['block_prefix'];?>preview  is--hand"><img src="<?=$this->path('img');?>/lp-dixion/bg-hand-tablet.png" alt=""></div>				
			</div>
			<div class="<?=$param['block_prefix'];?>cols cols  is--preview">
				<img src="<?=$this->path('img');?>/lp-dixion/preview-tour.jpg" alt="">
			</div>
		</div>	
	</div>
</div>