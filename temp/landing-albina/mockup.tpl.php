<?
	$_prefix 		= $param['block_prefix'];
	$_mod 		= $param['block_mod'];
	$_id 		= $param['block_id'];
	$_bg		= $param['block_bg'];
	$_prefix_page 	= $param['page_prefix'];
?>
<div class="<?=$_prefix;?>block" id="<?=$_id;?>" style="background-image: url(<?=$_bg;?>)">>	
	<div class="container <?=$_prefix;?>container <?=$_prefix_page;?>container  <?=$_mod;?>"></div>
</div>