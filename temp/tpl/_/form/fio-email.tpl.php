<form action="#" class="<?=$param["block_prefix"];?>block"  >
	<input type="hidden" name="key" value="londonisthecapitalofgreatbritain">
	<div class="<?=$param["block_prefix"];?>inner"  >
		<div class="row <?=$param["block_prefix"];?>row  is--wrap">
			<div class="cols <?=$param["block_prefix"];?>cols  is--name">
				<div class="<?=$param["block_prefix"];?>item">
					<input type="text" class="<?=$param["block_prefix"];?>control form-control validate[required, custom[onlyLetterSp]]  {{form_color}}" id="<?=$param["block_id"];?>[name]" name="<?=$param["block_id"];?>[Имя]" placeholder="Ваше имя">
				</div>	
			</div>
			<div class="cols <?=$param["block_prefix"];?>cols  is--email">
				<div class="<?=$param["block_prefix"];?>item">
					<input type="email" class="<?=$param["block_prefix"];?>control form-control validate[required,custom[email]]  {{form_color}}" id="<?=$param["block_id"];?>[email]" name="<?=$param["block_id"];?>[Телефон]" placeholder="Ваш E-mail">
				</div>	
			</div>
			<div class="cols <?=$param["block_prefix"];?>cols  is--btn">
				<button type="submit" class="btn__item  is--form  is--yellow"><?=$param["block_btn"];?>
				</button>
			</div>
			<div class="cols <?=$param["block_prefix"];?>cols  is--agreement">
				<div class="rect-switch <?=$param["block_prefix"];?>item">
	                <input class="rect-switch__input validate[required]" id="<?=$param["block_id"];?>[processing]" name="<?=$param["block_id"];?>[processing]" type="checkbox" checked />
	                <label for="<?=$param["block_id"];?>[processing]" class="rect-switch__label"></label> 
					<label for="<?=$param["block_id"];?>[processing]" class="rect-switch__text"> 
						Я согласен на обработку <a href="<?=l(91);?>">персональных данных</a>
					</label>
	            </div>	
			</div>
		</div>	
	</div> 
</form> 