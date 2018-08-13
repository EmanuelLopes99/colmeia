$(document).ready(function(){
	var _containerBtn = (".jbtn-voltar");
	var _btnLink = (".jbtn-voltar-link");

	//mostrar os botoes
	$(window).scroll(function(){
		if($(this).scrollTop() > 70){
			_containerBtn.fadeIn(0);
		}else{
			_containerBtn.fadeOut(0);
		}
	});

	//clicar para o top
	_containerBtn.click(function(){
		$("html").animate({scrollTop:0}, 800);

		return false; //nao deixe o site regaregar
	})
});