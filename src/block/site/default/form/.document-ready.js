$(".form__control[type='tel']").mask("+7 (999) 999-99-99",{placeholder:"+7 (___) ___-__-__"});
$(".form__control.is--kpp").mask("9999 99 999",{placeholder:"NNNN PP XXX"});
$(".form__control.is--inn").mask("9999999999",{placeholder:"XXXXXXXXXX"});
$(".form__control.is--ogrn").mask("9 99 99 99 99999 9",{placeholder:"С ГГ КК НН ХХХХХ Ч"});
$(".form__block").validationEngine(
	'attach', {
		promptPosition : "bottomLeft",
		scroll: false
		//scrollOffset: 200
	}
);