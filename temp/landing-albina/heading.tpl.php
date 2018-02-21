<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
	$_heading 		= get_field('header__heading', $id);
	$_heading_small = get_field('header__heading-sm', $id);
	$_heading_firm = get_field('header__heading-firm', $id);
	$_header_note = get_field('header__note', $id);
?>
<div class="<?=$_prefix;?>block" style="background-image: url(<?=$this->path('img');?>/lp-albina/bg-header.jpg)">
	<div class="container <?=$_prefix_page;?>container">
		<div class="<?=$_prefix;?>inner">
			<?if ($_heading != ""){?>
			<div class="<?=$_prefix;?>heading"><?=$_heading;?></div>
			<?}?>
			<?if ($_heading_small != ""){?>	
			<div class="<?=$_prefix;?>heading-small"><?=$_heading_small;?></div> 
			<?}?>
			<?if ($_heading_firm != ""){?>	
			<div class="<?=$_prefix;?>heading-firm"><?=$_heading_firm;?></div> 
			<?}?>
			<?if ($_header_note != ""){?>	
			<div class="<?=$_prefix;?>note"><?=$_header_note;?></div> 
			<?}?>
		</div> 
	</div> 
</div>