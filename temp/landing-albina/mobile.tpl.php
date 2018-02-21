<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading 		= get_field('mobile__heading', $id);
	$_heading_mod 	= $param['block_heading_mod'];
	$_text_left 	= get_field('mobile__note-left', $id);
	$_text_right 	= get_field('mobile__note-right', $id);
?>
<div class="<?=$_prefix;?>block">
	<?
	$this->tpl('landing-albina/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-albina/bg-flover-855-215.png",
		"block_mod"		=>	"is--flover-855"
	));
	?>
	<div class="container <?=$_prefix_page;?>container  <?=$_prefix;?>container">
		<?if ($_heading != ""){?>
		<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading;?></h2>
		<?}?>
		<div class="row <?=$_prefix;?>text-panel">	
			<?if ($_text_left != ""){?>		
			<div class="cols <?=$_prefix;?>cols  is--left">
				<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>text-block">
					<?=$_text_left;?>
				</div>		
			</div>			
			<?}?>
			<?if ($_text_right != ""){?>		
			<div class="cols <?=$_prefix;?>cols  is--left">
				<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>text-block">
					<?=$_text_right;?>
				</div>		
			</div>			
			<?}?>	
		</div>
		<div class="<?=$_prefix;?>preview-block  row">
			<div class="<?=$_prefix;?>preview-elem cols  is--shadow">
				<img src="<?=$this->path('img');?>/lp-albina/mobile-item1.jpg" alt="">
			</div>
			<div class="<?=$_prefix;?>preview-elem cols">
				<img src="<?=$this->path('img');?>/lp-albina/mobile-item2.png" alt="">
			</div>
			<div class="<?=$_prefix;?>preview-elem cols  is--shadow">
				<img src="<?=$this->path('img');?>/lp-albina/mobile-item3.jpg" alt="">
			</div>
			<div class="<?=$_prefix;?>preview-elem cols  is--shadow">
				<img src="<?=$this->path('img');?>/lp-albina/mobile-item4.jpg" alt="">
			</div>
		</div> 
	</div> 
</div>