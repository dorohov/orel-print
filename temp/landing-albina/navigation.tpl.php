<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading 		= get_field('navi__heading', $id);
	$_heading_mod 	= $param['block_heading_mod'];
	$_text_left 	= get_field('navi__note-left', $id);
	$_text_right 	= get_field('navi__note-right', $id);
?>
<div class="<?=$_prefix;?>block">
	<div class="container <?=$_prefix_page;?>container  <?=$_prefix;?>container">
		<?if ($_heading != ""){?>
		<h2 class="<?=$_prefix;?>heading"><?=$_heading;?></h2>
		<?}?>
		<div class="row {{block_prefix}}row">	
			<?if ($_text_left != ""){?>		
			<div class="cols <?=$_prefix;?>cols">
				<div class="<?=$_prefix_page;?>text-block <?=$_prefix;?>text-block">
					<?=$_text_left;?>
				</div>		
			</div>			
			<?}?>	
		</div>
	</div> 
	<?
	$this->tpl('landing-albina/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_bg"		=>	$this->path('img')."/lp-albina/bg-mackbook2.png",
		"block_mod"		=>	"is--mackbook2"
	));
	?>
</div>