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
	$('.perga').css('top','5vh');
	function saludo() {
$('.perga').css('animationPlayState','running' );	}
	
	setInterval(saludo, 1000);
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
	function casa1() {
$('.casita1').css('animationPlayState','running' );	}
	
	setInterval(casa1, 150);
	function Dojo() {
$('.dojoJapones').css('animationPlayState','running' );	}
	
	setInterval(Dojo, 300);

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
	$('.contenedorFecha .dojoJapones').on({
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
		$(this).animate({opacity: '0.9'}, 200);
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
	$('.contenedorFecha .banderas .bandera').on({
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
		$('.an1970').fadeOut('fast').css('display','none');
		$('.LShanP').fadeOut('fast').css('display','none');
	}
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
		$('.f1944').fadeOut('fast');
		$('.templo').fadeOut('fast');

}); 
		$('.H2').click(function(){
		$('body').addClass('quieto2');
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
		$('.templo').fadeIn('fast');
		$('.f1944').fadeIn('fast');
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
		$('.f1950').fadeIn('fast');
		$('body').removeClass('quieto2');
		$('.LShans').css('opacity','1');
		$('.cerca1').fadeIn('fast');
		$('.casajaponesa').fadeIn('fast');
}); 
	$('.Salir').click(function(){
		$('.texto1970').fadeOut('fast');
		$('body').removeClass('quieto2');
		$('.LShans').css('opacity','1');
});
	$('.m2').click(function(){
		$('.sin2').fadeIn('fast');
		$('.sin2').fadeIn('fast').css({"display":"none"});
});
	$('.m3').click(function(){
		$('.sin3').fadeIn('fast');
		$('.sin3').fadeIn('fast').css({"display":"none"});
});
	$('.m4').click(function(){
		$('.sin4').fadeIn('fast');
		$('.sin4').fadeIn('fast').css({"display":"none"});
});
	$('.m5').click(function(){
		$('.sin5').fadeIn('fast');
		$('.sin5').fadeIn('fast').css({"display":"none"});
});
	$('.m6').click(function(){
		$('.sin6').fadeIn('fast');
		$('.sin6').fadeIn('fast').css({"display":"none"});
});
	$('.m7').click(function(){
		$('.sin7').fadeIn('fast');
		$('.sin7').fadeIn('fast').css({"display":"none"});
});
	$('.m8').click(function(){
		$('.sin8').fadeIn('fast');
		$('.sin8').fadeIn('fast').css({"display":"none"});
});
	$('.m9').click(function(){
		$('.sin9').fadeIn('fast');
		$('.sin9').fadeIn('fast').css({"display":"none"});
});
	$('.m10').click(function(){
		$('.sin10').fadeIn('fast');
		$('.sin10').fadeIn('fast').css({"display":"none"});
});
	$('.M2').click(function(){
		$('.Sin2').fadeIn('fast');
		$('.Sin2').fadeIn('fast').css({"display":"none"});
});
	$('.M3').click(function(){
		$('.Sin3').fadeIn('fast');
		$('.Sin3').fadeIn('fast').css({"display":"none"});
});
	$('.M4').click(function(){
		$('.Sin4').fadeIn('fast');
		$('.Sin4').fadeIn('fast').css({"display":"none"});
});
	$('.M5').click(function(){
		$('.Sin5').fadeIn('fast');
		$('.Sin5').fadeIn('fast').css({"display":"none"});
});
	$('.M6').click(function(){
		$('.Sin6').fadeIn('fast');
		$('.Sin6').fadeIn('fast').css({"display":"none"});
});
	$('.M7').click(function(){
		$('.Sin7').fadeIn('fast');
		$('.Sin7').fadeIn('fast').css({"display":"none"});
});
	
$(window).scroll(function(event) {
  var scrollLeft = $(window).scrollLeft();
  console.log("Horizontal "+scrollLeft);
  if (scrollLeft >180) {
	function casa2() {
$('.casita2').css('animationPlayState','running' );	}
	setInterval(casa2, 100);
}if (scrollLeft >640) {
	function colm1() {
$('.columna1').css('animationPlayState','running' );	}
	setInterval(colm1, 100);
}if (scrollLeft >1000) {
	function israel() {
$('.temploisrael').css('animationPlayState','running' );}
	setInterval(israel, 100);
}if (scrollLeft >1400) {
	function colm2() {
$('.columna2').css('animationPlayState','running' );	}
	setInterval(colm2, 100);
}
if (scrollLeft >2300) {
	function casi1() {
$('.cas1').css('animationPlayState','running' );	}
	setInterval(casi1, 100);
}
if (scrollLeft >2600) {
	function casi2() {
$('.cas2').css('animationPlayState','running' );	}
	setInterval(casi2, 100);
}
if (scrollLeft >2800) {
	function casi3() {
$('.cas3').css('animationPlayState','running' );	}
	setInterval(casi3, 100);
}
if (scrollLeft >2900) {
	function cer1() {
$('.cerca1').css('animationPlayState','running' );	}
	setInterval(cer1, 100);
}if (scrollLeft >3300) {
	function templot() {
$('.temploJ').css('animationPlayState','running' );	}
	setInterval(templot, 100);
}if (scrollLeft >3700) {
	function banderas() {
$('.banderas').css('animationPlayState','running' );	}
	setInterval(banderas, 100);
}if (scrollLeft >3900) {
	function cercaa() {
$('.cerca2').css('animationPlayState','running' );	}
	setInterval(cercaa, 100);
}if (scrollLeft >5100) {
	function plataforma() {
$('.plataforma').css('animationPlayState','running' );	}
	setInterval(plataforma, 100);
}if (scrollLeft >6300) {
	function imgra() {
$('.imagenRA').css('animationPlayState','running' );	}
	setInterval(imgra, 100);
}
if (scrollLeft >6200) {
	function textora() {
$('.inforRA').css('animationPlayState','running' );	}
	setInterval(textora, 100);
}if (scrollLeft >5200) {
	function temploschinos() {
$('.templos').css('animationPlayState','running' );	}
	setInterval(temploschinos, 100);
}if (scrollLeft >7200) {
	function muralla() {
$('.muralla').css('animationPlayState','running' );	}
	setInterval(muralla, 100);
}if (scrollLeft >7700) {
	function juegoin() {
$('.inforjuego').css('animationPlayState','running' );	}
	setInterval(juegoin, 100);
}
if(scrollLeft > 99880) {
	$('.LShan').fadeOut('fast').css('display','none');
}
if (scrollLeft < 99880) {
	$('.LShan').fadeIn('fast');
}
});

});