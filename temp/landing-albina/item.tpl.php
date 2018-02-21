<div class="albina-page-content padtop">
	<div class="albina__block-content"> 
		<div class="lp-albina__block-content">	
		<?
			$GLOBALS['footer_type'] = 'slide';
			$this->tpl('landing-albina/heading', array(
				"block_prefix" 	=> "albina_hb__",
				"page_prefix" 	=> "lp-albina__",
			));
			$this->tpl('landing-albina/mockup', array(
				"block_prefix" 	=> "albina_mockup__",
				"page_prefix" 	=> "lp-albina__",				
				"block_id"		=>	"step1",
				"block_bg"		=>	$this->path('img')."/lp-albina/bg-mockup.jpg",
				"block_mod"		=>	"is--step1"
			));
			$this->tpl('landing-albina/about', array(
				"block_prefix" 	=> "albina-about__",
				"page_prefix" 	=> "lp-albina__",
				"block_heading_mod" 	=> "is--heading  is--center",
			));
			$this->tpl('landing-albina/mockup', array(
				"block_prefix" 	=> "albina_mockup__",
				"page_prefix" 	=> "lp-albina__",				
				"block_id"		=>	"step2",
				"block_bg"		=>	$this->path('img')."/lp-albina/bg-mockup2.jpg",
				"block_mod"		=>	"is--step2"
			));
			$this->tpl('landing-albina/interface', array(
				"block_prefix" 	=> "albina-interface__",
				"page_prefix"	=> "lp-albina__",
				"block_heading_mod" 	=> "is--heading  is--center",
			));
			$this->tpl('landing-albina/navigation', array(
				"block_prefix" 	=> "albina-navigation__",
				"page_prefix"	=> "lp-albina__",
				"block_heading_mod" 	=> "is--heading",
			));
			$this->tpl('landing-albina/preview', array(
				"block_prefix" 	=> "albina_preview__",
				"page_prefix" 	=> "lp-albina__",
			));
			$this->tpl('landing-albina/mobile', array(
				"block_prefix" 	=> "albina-mobile__",
				"page_prefix"	 => "lp-albina__",
				"block_heading_mod" 	=> "is--heading  is--center",
			));
			$this->tpl('landing-albina/adaptiv', array(
				"block_prefix" 	=> "albina-adaptiv__",
				"page_prefix"	 => "lp-albina__",
				"block_heading_mod" 	=> "is--heading  is--center",
			));
		?>
		</div>
	</div>
</div> 