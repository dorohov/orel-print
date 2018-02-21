<?
	$_prefix 		= $param['block_prefix'];
	$_prefix_page 	= $param['page_prefix'];
?>
<div class="<?=$_prefix;?>block">	
	<?
	$this->tpl('landing-albina/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_mod"		=>	"is--tube",
		"block_bg"		=>	$this->path('img')."/lp-albina/bg-tube-190-860.png"
	));
	$this->tpl('landing-albina/bg', array(
		"block_prefix" 	=> $_prefix_page,
		"block_mod"		=>	"is--ipad",
		"block_bg"		=>	$this->path('img')."/lp-albina/bg-ipad.png"
	));
	?>
	<div class=" <?=$_prefix;?>preview">
		<img src="<?=$this->path('img');?>/lp-albina/bg-mockup3.jpg" alt="">	
	</div>
</div>