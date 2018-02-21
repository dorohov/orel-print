<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading 		= get_field('project-note__heading', $id);
	$_heading_mod 	= $param['block_heading_mod'];
	$_text_left 	= get_field('project-note__left', $id);
	$_text_right 	= get_field('project-note__right', $id);
?>
<div class="<?=$_prefix;?>block">
	<div class="container <?=$_prefix_page;?>container <?=$_prefix;?>container">
		<?if ($_heading != ""){?>
		<h2 class="<?=$_prefix_page;?>heading <?=$_prefix;?>heading  <?=$_heading_mod;?>"><?=$_heading;?></h2>
		<?}?>
		<div class="row <?=$_prefix;?>row">	
			<?if ($_text_left != ""){?>		
			<div class="cols <?=$_prefix;?>cols  ">
				<div class="<?=$_prefix_page;?>text-block  ">
					<?=$_text_left;?>
				</div>		
			</div>	
			<?}?>	
			<?if ($_text_right != ""){?>	
			<div class="cols <?=$_prefix;?>cols  ">
				<div class="<?=$_prefix_page;?>text-block  ">
					<?=$_text_right;?>
				</div>
			</div>
			<?}?>
		</div>
	</div>
</div>