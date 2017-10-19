<?
	$this->tpl(
		'mainpage/header', 
		array(
			"block_prefix" => "index-header__"
		)
	);
?>
<div class="content-block index-page__block" role="main">
	<div class="container index-page__container">
		<?
			$this->tpl(
				'mainpage/advantages', 
				array(
					"block_prefix" => "advantages-panel__" 
				)
			);
		?> 
	</div>
</div>	