<div class="modal fade <?=$param["block_prefix"];?>modal" id="<?=$param["block_modal_id"];?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog <?=$param["block_prefix"];?>dialog">
		<div class="modal-body <?=$param["block_prefix"];?>body bg-pattern  is--wall" >
			<button type="button" class="btn-site  <?=$param["block_prefix"];?>close  modal-close" data-dismiss="modal" aria-hidden="true">
				<svg class="icon-svg icon-modal-close" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#modal-close"></use></svg>
			</button>
			<div class="modal-content <?=$param["block_prefix"];?>content">
				<div class="page-header__block  is--modals  is--center">
					<h4 class="page-header__heading  is--modals  is--center"><span><?=$param["block_heading"];?></span></h4>	
					<div class="page-header__heading-small  is--modals  is--center"><?=$param["block_note"];?></div>
				</div>
			</div> 
		</div>
	</div>
</div>