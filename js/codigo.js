$(document).ready(function(){

$('body').addClass('quieto');

function andar() {
	document.onkeydown = andar
document.onkeyup = parar
		var Tecla = event.keyCode
	if (Tecla == 39) {
		$('.LShan').css('backgroundImage','url("img/spriteC.png")');
		$('.LShans').css('display','none').fadeOut('fast');
		$('.LShanP').css('display','none').fadeOut('fast');
		$(".LShan").css('animationPlayState','running');
		$('body').removeClass('quieto');
	}

	if (Tecla == 37) {
		$('.LShans').css('display','block');
		$('.LShan').css('background','transparent');
		$('.LShanP').css('display','none').fadeOut('fast');
		$(".LShans").css('animationPlayState','running');
		$('body').removeClass('quieto');
	}
      }

function parar() {
	$('.LShan').css('animationPlayState','paused');
	$('.LShans').css('animationPlayState','paused');
	$('body').addClass('quieto');
		
}
	$('.ani1970').css('display','none');
		var trasladar = 0;
$('.M-Do').click(function(){
	$('.M-Do').toggle('2000');
	$('.inicio').show('fast');
});
$('.ade').click(function(){
	$('.inicio').toggle('2000');
	$('.infor').show('fast');
	andar();
	parar();
});
$('.b6').click(function(){
	$('.infor').toggle('2000');
	$('#contenedorMayor').show('fast');
	andar();
	parar();
});
		$('.f1').on('click', function(e){
			e.preventDefault();
			trasladar += 14.28;
			if(trasladar > 0)
				trasladar = -98;
			$('.a1950').css('transform', 'translateY('+trasladar+'%)'); 
		});

		$('.f2').on('click', function(e){
			e.preventDefault();
			trasladar += -14.28;
			if(trasladar < -98)
				trasladar = 0;
			$('.a1950').css('transform', 'translateY('+trasladar+'%)');
			$('.M2').css('opacity','1');
		});
		$('.ar').on('click', function(e){
			e.preventDefault();
			trasladar += 25;
			if(trasladar > 0)
				trasladar = -100;
			$('.edit').css('transform', 'translateY('+trasladar+'%)'); 
		});

		$('.ab').on('click', function(e){
			e.preventDefault();
			trasladar += -25;
			if(trasladar < -98)
				trasladar = 0;
			$('.edit').css('transform', 'translateY('+trasladar+'%)'); 
		});
		$('.n1').on('click', function(e){
			e.preventDefault();
			trasladar += 10;
			if(trasladar > 0)
				trasladar = -98;
			$('.a1944').css('transform', 'translateY('+trasladar+'%)'); 
		});

		$('.n2').on('click', function(e){
			e.preventDefault();
			trasladar += -10;
			if(trasladar < -98)
				trasladar = 0;
			$('.a1944').css('transform', 'translateY('+trasladar+'%)');
			$('.m2').css('opacity','1'); 
		});
	$('.contenedorFecha div .casita').on({
		click:
		function(){
		var rutaimg = $(this).attr('src');
		$('.ventanatexto').css('display','flex').fadeIn('fast');
		$('.inf').css('display','none');
		$('.p_23aC').css('display','block');
		$('.LShan').fadeOut('fast');
		$('.LShans').fadeOut('fast');
		$('.LShanP').fadeOut('fast');
		$('body').addClass('quieto2');
		$('.LShans').css('opacity','0');
	},
	mouseenter: function(){
		$(this).animate({opacity: '0.5'}, 200);
	},
	mouseleave: function(){
		$(this).animate({opacity: '1'}, 200);
	}
	
});
	$('.secc').on({
		mouseenter: function(){
		$('.secc').css('left','0');
	},
	mouseleave: function(){
		$('.secc').css('left','-28%');
	}
});
	$('.R').on({
		mouseenter: function(){
$(this).text('Registro');
		},
		mouseleave:function(){
		$(this).text('R');	
		}
	});
	$('.C').on({
		mouseenter: function(){
$(this).text('Contacto');
		},
		mouseleave:function(){
		$(this).text('C');	
		}
	});

	$('.cont').click(function(){
		$('.p_23aC').fadeOut('fast');
		$('.inf').css('display','block').fadeIn('fast');
	});
	$('.btnSalir').click(function(){
		$('.ventanatexto').fadeOut('fast');
		$('.LShanP').fadeIn('fast');
		$('body').removeClass('quieto2');
		$('.LShans').css('opacity','1');

	});
	$('.b2').click(function(){
		$('body').removeClass('quieto2');
		$('.ventana').fadeOut('fast');
		$('.LShans').css('opacity','1');

	});
	$('.ani23aC').click(function(){
	$('.ventanatexto').css('display','none');
	$('.ventana').css('top', '0').fadeIn('fast');
	});
	$('.contenedorFecha .banderas').on({
		click:
		function(){
		$('body').addClass('quieto2');
		$('.texto1970').css('display','block').fadeIn('fast');
		$('.i1970').css('display','block').fadeIn('fast');
		$('.contenido').fadeIn('fast').css('display','block');
		$('.tex2').css('display','none');
		$('.vmas').css('display','block');
		$('.LShan').fadeOut('fast').css('display','none');
		$('.LShans').fadeOut('fast').css('display','none');
		$('.LShans').css('opacity','0');
		$('.LShanP').fadeOut('fast').css('display','none');
	},
	mouseenter: function(){
		$('.bandera1').css('display','none');
		$('.bandera').css('display','block');
	},
	mouseleave: function(){
		$('.bandera1').css('display','block');
		$('.bandera').css('display','none');
	},
	
});
		$('.vmas').click(function(){
		$('.tex2').fadeIn('fast');
		$('.i1970').fadeOut('fast');
		$(this).css('display','none');
		$('.an1970').fadeIn('fast');

}); 
		$('.an1970').click(function(){
		$('.ani1970').fadeIn('fast');
		$(this).css('display','none');
		$('.contenido').fadeOut('fast').css('display','none');
		$('.i1970').fadeOut('fast').css('display','none');
		$('.texto1970').fadeOut('fast').css('display','none');
		$('.LShan').fadeOut('fast');
		$('.LShans').fadeOut('fast');
		$('.LShans').css('opacity','0');
		$('.LShanP').fadeOut('fast');
}); 
		$('.H1').click(function(){
		$('body').addClass('quieto2');
		$(this).css('display','none');
		$('.SecHistorieta').fadeIn('fast');
		$('.LShan').fadeOut('fast');
		$('.LShans').fadeOut('fast');
		$('.LShans').css('opacity','0');
		$('.m2').css('opacity','0');
		$('.LShanP').fadeOut('fast');

}); 
		$('.H2').click(function(){
		$('body').addClass('quieto2');
		$(this).css('display','none');
		$('.SecHistorieta2').fadeIn('fast');
		$('.LShan').fadeOut('fast');
		$('.LShans').fadeOut('fast');
		$('.LShans').css('opacity','0');
		$('.M2').css('opacity','0');
		$('.LShanP').fadeOut('fast');
}); 
	$('.btnSalir').click(function(){
		$('.ventana2').fadeOut('fast');
		$('.LShanP').fadeIn('fast');
		$('body').removeClass('quieto2');
		$('.LShans').css('opacity','1');
}); 
		$('.S1').click(function(){
		$('.SecHistorieta').fadeOut('fast');
		$('.H1').fadeIn('fast');
		$('body').removeClass('quieto2');
		$('.LShans').css('opacity','1');
}); 
		$('.S3').click(function(){
		$('.texto1970').fadeOut('fast');
		$('body').removeClass('quieto2');
		$('.LShans').css('opacity','1');
}); 
		$('.S2').click(function(){
		$('.SecHistorieta2').fadeOut('fast');
		$('.H2').fadeIn('fast');
		$('body').removeClass('quieto2');
		$('.LShans').css('opacity','1');
}); 
	$('.Salir').click(function(){
		$('.texto1970').fadeOut('fast');
		$('body').removeClass('quieto2');
		$('.LShans').css('opacity','1');
}); 
	$('.RA').click(function(){
		$('.NR').fadeIn('fast');
		$(this).css('display','none');
}); 
$(window).scroll(function(event) {
  var scrollLeft = $(window).scrollLeft();
  console.log("Horizontal "+scrollLeft);
  if (scrollLeft > 304) {
	$(".casita").attr("src","img/casita.png");
}if(scrollLeft > 0 && scrollLeft < 304){
		$(".casita").attr("src","img/casita2.png");
}if (scrollLeft > 3880) {
	$('.LShan').fadeOut('fast').css('display','none');
}
if (scrollLeft < 3880) {
	$('.LShan').fadeIn('fast');
}
});

});