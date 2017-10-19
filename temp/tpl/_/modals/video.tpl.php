<div class="modal fade <?=$param["block_prefix"];?>modal" id="<?=$param["block_modal_id"];?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog <?=$param["block_prefix"];?>dialog">
		<div class="modal-body <?=$param["block_prefix"];?>body" >
			<button type="button" class="btn-site  <?=$param["block_prefix"];?>close  modal-close" data-dismiss="modal" aria-hidden="true">
				<svg class="icon-svg icon-modal-close" role="img"><use xlink:href="<?=$this->path('img');?>/svg/sprite.svg#modal-close"></use></svg>
			</button>
			<iframe src="https://www.youtube.com/embed/<?=$param["block_url"];?>" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</div>