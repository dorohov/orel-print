<?
	$block_prefix = "footer__";
	$vk = getContact('vk');
	$fb = getContact('fb');
	$inst = getContact('inst');
	$copyright = getContact('copyright');
?>
			<footer class="<?=$block_prefix;?>block">	
				<div class="container <?=$block_prefix;?>container">
					<div class="row <?=$block_prefix;?>row">					
						<div class="cols <?=$block_prefix;?>cols  is--logotip">
							<a href="/" class="<?=$block_prefix;?>logotip">
								<img src="<?=$this->path('img');?>/default/logotip-footer.png" alt="">
							</a>			
						</div>
						<div class="cols <?=$block_prefix;?>cols  is--copyright">			
							<?=$copyright;?>
						</div>
						<div class="cols <?=$block_prefix;?>cols  is--soc">
							<div class="social__block">
								<div class="row social__row"> 
									<? if ($vk != ""){?>
									<div class="cols social__cols">
										<a href="<?=$vk;?>" target="_blank" class="social__item  is--vk">
											<div class="social__icon">
												<svg class="icon-svg icon-vk" role="img">
													<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#vk"></use>
												</svg>
											</div>
										</a>
									</div>
									<?}?>
									<? if ($fb != ""){?>
									<div class="cols social__cols">
										<a href="<?=$fb;?>" target="_blank" class="social__item  is--fb">
											<div class="social__icon">
												<svg class="icon-svg icon-fb" role="img">
													<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#fb"></use>
												</svg>
											</div>
										</a>
									</div>
									<?}?>
									<? if ($inst != ""){?>
									<div class="cols social__cols">
										<a href="<?=$inst;?>" target="_blank" class="social__item  is--inst">
											<div class="social__icon">
												<svg class="icon-svg icon-inst" role="img">
													<use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#inst"></use>
												</svg>
											</div>
										</a>
									</div>
									<?}?>
								</div>
							</div>  
						</div>
						<div class="cols <?=$block_prefix;?>cols  is--dorohovdesign">
							<div class="row <?=$block_prefix;?>dorohovdesign-row"> 
								<div class="cols <?=$block_prefix;?>dorohovdesign-cols  is--text">
									<div class="<?=$block_prefix;?>dorohovdesign-text">Разработка сайта</div>
								</div>
								<div class="cols <?=$block_prefix;?>dorohovdesign-cols  is--logotip">
									<a href="http://dorohovdesign.ru/" target="_blank" class="<?=$block_prefix;?>dorohovdesign-logotip">
										<svg class="icon-svg icon-dorohovdesign" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#dorohovdesign"></use></svg>
									</a>
								</div>
							</div>				 
						</div>	
					</div>
				</div>
			</footer>
		</div>	
		<?
			//modals
			$video = get_field('video', 1);
			if ($video != ""){
				$this->tpl(
					'_/modals/video', 
					array(
						"block_prefix" => "modal-video__",
						"block_modal_id" => "modal-video",
						"block_url" => $video
					)
				);
			};
			$this->tpl(
				'_/modals/enter', 
				array(
					"block_prefix" => "modal-base__",
					"block_modal_id" => "modal-enter",
					"block_heading" => "Регистрация",
					"block_note" => "",
				)
			);
		?>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="<?=$this->path('js');?>/jquery-3.2.1.min.js" ></script>
		<script src="<?=$this->path('js');?>/document-ready.js" ></script>

		<script src="<?=$this->path('js');?>/bootstrap.min.js" ></script>
		<script src="<?=$this->path('js');?>/svg4everybody.min.js" ></script>
		<script>svg4everybody();</script> 
		<?
			//script
			$this->tpl('_/script/validationEngine');

			if($this->post['id'] == 1) {
				$this->tpl('_/script/response');
			}
			if($this->post['id'] == 2) {
				$this->tpl('_/script/googleMap');
			}
			if(is_single()) {
				$this->tpl('_/script/fancybox');
			}

			wp_footer();
			$this->tpl('_/metrics', array());

		?>
		<script>
			(function(){
				
				var l = window.location;
				var t = new Date().getTime();
				
				var i = document.createElement('img');
				i.width = 0; i.height = 0;
				i.onload = function(){document.body.appendChild(i);};
				i.setAttribute('src', 'http://app.azbn.ru/counter/common/?h=' + l.hostname + '&p=' + l.port + '&lt=' + t);
				
			})();
		</script>
	</body>
</html>