<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading 		= get_field('adaptiv__heading', $id);
	$_heading_mod 	= $param['block_heading_mod'];
	$_text 			= get_field('adaptiv__note', $id);
	$_site 			= get_field('work_link', $id);
?>
<div class="<?=$_prefix;?>block">
	<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container">	
		<?if ($_heading != ""){?>
		<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading;?></h2>
		<?}?>
		<?if ($_text != ""){?>		
		<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>text-block">
			<?=$_text;?>
		</div>		
		<?}?>	
		<?if ($_site != ""){?>		
		<div class="<?=$_prefix;?>footer-link">
			Адрес сайта: <a href="http://<?=$_site;?>/" target="_blank"><?=$_site;?></a>
		</div>	
		<?}?>	
		<div class="<?=$_prefix;?>preview-block">
			<div class="<?=$_prefix;?>preview  is--imac">
				<img src="<?=$this->path('img');?>/lp-albina/bg-imac.png" alt="">
			</div>
			<div class="<?=$_prefix;?>preview  is--mackbook">
				<img src="<?=$this->path('img');?>/lp-albina/bg-mackbook.png" alt="">
			</div>
		</div> 
	</div>
</div>