	var ext = "ogg";
	
	var certo = document.createElement('audio');
	var certoPath = "../sons/certo." + ext;
	certo.setAttribute('src', certoPath);
	
	var flipsound = document.createElement('audio');
	var flipPath = "../sons/flip." + ext;
	flipsound.setAttribute('src', flipPath);

function dificuldade(botao){
	
	
	//Carrega som
	var shuffle = document.createElement('audio');
	var shufflePath = "../sons/shuffle." + ext;
	shuffle.setAttribute('src', shufflePath);
	shuffle.play();
	
	var nivel = botao.id;
	
	//(re)inicia as cartas
		
		var elem = document.getElementById("jogo");
		for(f=0; f<16; f++){
			var filho = elem.children[f];
			filho.setAttribute("class", "ativa");
			filho.innerHTML = " ";
			filho.style.backgroundImage = "url('img/cartas.png')";
		}
	
	//(re)inicia os textos
	for (t=0; t<8; t++){
		var textoFX = "textoF"+t;
		document.getElementById(textoFX).setAttribute("class", "transparente");
		var textoDX = "textoD"+t;
		document.getElementById(textoDX).setAttribute("class", "transparente");
	}
	
	// declara as arrays das cartas para gerar os pares
	CartaAarr = [];
	CartaBarr = [];
	
	// seleciona o nivel
	switch(nivel){
	case "facil":
		document.getElementById("texto").innerHTML = " Combine as fotos atuais e antigas dos prédios. ";
		document.getElementById("texto").setAttribute("class", "opaco");
		for (i = 0; i < 8; i++) { CartaAarr[i] = "CartaF" + i + "A"; CartaBarr[i] = "CartaF" + i + "B";}; 
		var cartas = CartaAarr.concat(CartaBarr);
		iniciar(cartas);
		break;
	case "dificil":
		document.getElementById("texto").innerHTML = " Combine os prédios com um objeto que faça referência a esse prédio.";
		document.getElementById("texto").setAttribute("class", "opaco");
		for (i = 0; i < 8; i++) { CartaAarr[i] = "CartaD" + i + "A"; CartaBarr[i] = "CartaD" + i + "B";}; 
		//concatena as duas arrays de cartas		
		var cartas = CartaAarr.concat(CartaBarr);
		
		//inicia o jogo
		iniciar(cartas);		
		break;
	}
	
	// gera as arrays que vão guardar as ids das cartas, de acordo com o nivel selecionado
	function iniciar(cartas){
		
		//random
		function shuffle(array) {
		    var p, n, tmp;
		    for (p = array.length; p;) {
		        n = Math.random() * p-- | 0;
		        tmp = array[n];
		        array[n] = array[p];
		        array[p] = tmp;
		    }
		}
	
		
		shuffle(cartas);
		
		//pega todas as cartas em jogo
		var cartasinicio = document.getElementsByClassName("ativa");
		
		//posiciona as cartas
		for(i=0; i < cartasinicio.length; i++){ 
		
			cartasinicio[i].setAttribute("id", cartas[i]);
			cartasinicio[i].setAttribute("onclick", "jogada(this);");
			var id = cartasinicio[i].getAttribute("id");
			var nome = id.substring(0,7);
			cartasinicio[i].setAttribute("name", nome);
		}
	}
}

//função da primeira carta da jogada
function jogada(p){
	flipsound.play();
	for (t=0; t<8; t++){
		var textoFX = "textoF"+t;
		document.getElementById(textoFX).setAttribute("class", "transparente");
		var textoDX = "textoD"+t;
		document.getElementById(textoDX).setAttribute("class", "transparente");
	}
	
	document.getElementById("texto").setAttribute("class", "transparente");
	
	var idP = p.id;
	
	var carta;
	var foto = "url('img/" + idP + ".png')";
	
	switch(idP){
		case "CartaF0A": carta = "CartaF0"; trocarsegunda(p, idP, carta); break;
		case "CartaF0B": carta = "CartaF0"; trocarsegunda(p, idP, carta); break;
		case "CartaF1A": carta = "CartaF1"; trocarsegunda(p, idP, carta); break;
		case "CartaF1B": carta = "CartaF1"; trocarsegunda(p, idP, carta); break;
		case "CartaF2A": carta = "CartaF2"; trocarsegunda(p, idP, carta); break;
		case "CartaF2B": carta = "CartaF2"; trocarsegunda(p, idP, carta); break;
		case "CartaF3A": carta = "CartaF3"; trocarsegunda(p, idP, carta); break;
		case "CartaF3B": carta = "CartaF3"; trocarsegunda(p, idP, carta); break;
		case "CartaF4A": carta = "CartaF4"; trocarsegunda(p, idP, carta); break;
		case "CartaF4B": carta = "CartaF4"; trocarsegunda(p, idP, carta); break;
		case "CartaF5A": carta = "CartaF5"; trocarsegunda(p, idP, carta); break;
		case "CartaF5B": carta = "CartaF5"; trocarsegunda(p, idP, carta); break;
		case "CartaF6A": carta = "CartaF6"; trocarsegunda(p, idP, carta); break;
		case "CartaF6B": carta = "CartaF6"; trocarsegunda(p, idP, carta); break;
		case "CartaF7A": carta = "CartaF7"; trocarsegunda(p, idP, carta); break;
		case "CartaF7B": carta = "CartaF7"; trocarsegunda(p, idP, carta); break;
		
		case "CartaD0A": carta = "CartaD0"; trocarsegunda(p, idP, carta); break;
		case "CartaD0B": carta = "CartaD0"; trocarsegunda(p, idP, carta); break;
		case "CartaD1A": carta = "CartaD1"; trocarsegunda(p, idP, carta); break;
		case "CartaD1B": carta = "CartaD1"; trocarsegunda(p, idP, carta); break;
		case "CartaD2A": carta = "CartaD2"; trocarsegunda(p, idP, carta); break;
		case "CartaD2B": carta = "CartaD2"; trocarsegunda(p, idP, carta); break;
		case "CartaD3A": carta = "CartaD3"; trocarsegunda(p, idP, carta); break;
		case "CartaD3B": carta = "CartaD3"; trocarsegunda(p, idP, carta); break;
		case "CartaD4A": carta = "CartaD4"; trocarsegunda(p, idP, carta); break;
		case "CartaD4B": carta = "CartaD4"; trocarsegunda(p, idP, carta); break;
		case "CartaD5A": carta = "CartaD5"; trocarsegunda(p, idP, carta); break;
		case "CartaD5B": carta = "CartaD5"; trocarsegunda(p, idP, carta); break;
		case "CartaD6A": carta = "CartaD6"; trocarsegunda(p, idP, carta); break;
		case "CartaD6B": carta = "CartaD6"; trocarsegunda(p, idP, carta); break;
		case "CartaD7A": carta = "CartaD7"; trocarsegunda(p, idP, carta); break;
		case "CartaD7B": carta = "CartaD7"; trocarsegunda(p, idP, carta); break;
	}
	
// função que faz as cartas serem clicáveis para a segunda escolha
function trocarsegunda(p, idP, carta){

	p.style.background = "none";			
	var foto = "url('img/" + idP + ".png')";
flipsound.play();
		
	// FLIP
		var imgP = idP + "img";
		var cobertoP = idP + "coberto";			
		var flip = "<div id=" + cobertoP + " style=background-image:" + foto + ";></div> <div id=" + imgP + "></div>";
		
		var topoP = idP + "topo";
		var fundoP = idP + "fundo";
		var transicao =  "<img id='"+ fundoP +"' class='fundo' src='img/" + idP + ".png' /> <img id='" + topoP + "' class='topo' src='img/cartas.png' />";
			
		if (navigator.userAgent.indexOf("Chrome")>0 || navigator.userAgent.indexOf("Opera") == 0){
			p.innerHTML = transicao;
			document.getElementById(topoP).setAttribute("class", "topo");
			setTimeout(function(){ document.getElementById(topoP).setAttribute("class", "topotrans");  }, 20);
		}else{
			p.innerHTML = flip;
			document.getElementById(imgP).setAttribute("class", "imagemvirada");
			document.getElementById(imgP).style.backgroundImage="url('img/cartas.png')";
			document.getElementById(cobertoP).setAttribute("class", "cobertovirada");
			setTimeout(function(){
				document.getElementById(imgP).setAttribute("class", "imagem");
				document.getElementById(cobertoP).setAttribute("class", "coberto");
			}, 20);
		}
	// FIM FLIP
	
	//muda atributo onClick
 	var click = "virar(this, '" + carta + "', '"+ idP +"');";
	x = document.getElementsByClassName("ativa");
	for(i=0; i<x.length; i++){ x[i].setAttribute("onclick", click);}
	p.setAttribute("onclick", " "); 
}
	
}
// função segunda carta da jogada
function virar(s, carta, idP){
	var idS = s.id;
	var p = document.getElementById(idP);
	var cartaxA = carta + "A", cartaxB = carta + "B";
	var foto = "url('img/" + idS + ".png')";
	s.style.background = "none";
		
	// FLIP
			var imgP = idP + "img";
			var cobertoP = idP + "coberto";	
			var imgS = idS + "img";
			var cobertoS = idS + "coberto";			
			
			var flip = "<div id=" + cobertoS + " style=background-image:" + foto + ";></div> <div id=" + imgS + "  ></div>";
			
			var topoS = idS + "topo";
			var fundoS = idS + "fundo";
			var transicao =  "<img id='"+ fundoS +"' class='fundo' src='img/" + idS + ".png' /> <img id='" + topoS + "' class='topo' src='img/cartas.png' />";
			
			if (navigator.userAgent.indexOf("Chrome")>0 || navigator.userAgent.indexOf("Opera") == 0){
				
				s.innerHTML = transicao;
				document.getElementById(topoS).setAttribute("class", "topo");
				setTimeout(function(){ document.getElementById(topoS).setAttribute("class", "topotrans"); }, 20);
			
			}else{
				s.innerHTML = flip;
			
				var imgPDiv = document.getElementById(imgP);
				var imgSDiv = document.getElementById(imgS);
				var cobertoSDiv = document.getElementById(cobertoS);
			
				imgSDiv.setAttribute("class", "imagemvirada");
				imgSDiv.style.background="url('img/cartas.png')";
				cobertoSDiv.setAttribute("class", "cobertovirada");
			
				setTimeout(function(){
					imgSDiv.setAttribute("class", "imagem");
					cobertoSDiv.setAttribute("class", "coberto");
				}, 20);
			}
	// FIM FLIP
	
	//Remove onclick
	x = document.getElementsByClassName("ativa");
	for(i=0; i<x.length; i++){ x[i].setAttribute("onclick", "");}
	
	
	//Se segunda carta (s) for par da primeira carta (p)
	if(idS == cartaxA | idS == cartaxB){
		
		document.getElementById("caixatexto").setAttribute("class", "balaopulsando");
		setTimeout(function(){document.getElementById("caixatexto").setAttribute("class", "balao");},200);
		setTimeout(function(){document.getElementById("caixatexto").setAttribute("class", "balaopulsando");},400);
		setTimeout(function(){document.getElementById("caixatexto").setAttribute("class", "balao");},600);
		
		certo.play();
		setTimeout(function(){
			p.setAttribute("class", "inativa");
			p.setAttribute("onclick", "");
			s.setAttribute("class", "inativa");
			s.setAttribute("onclick", "");
			imgPDiv.style.background="none";
			imgSDiv.style.background="none";
		}, 1000);
		
		switch(carta){
			case "CartaF0": document.getElementById("textoF0").setAttribute("class", "opaco"); break;
			case "CartaF1": document.getElementById("textoF1").setAttribute("class", "opaco"); break;
			case "CartaF2": document.getElementById("textoF2").setAttribute("class", "opaco"); break;
			case "CartaF3": document.getElementById("textoF3").setAttribute("class", "opaco"); break;
			case "CartaF4": document.getElementById("textoF4").setAttribute("class", "opaco"); break;
			case "CartaF5": document.getElementById("textoF5").setAttribute("class", "opaco"); break;
			case "CartaF6": document.getElementById("textoF6").setAttribute("class", "opaco"); break;
			case "CartaF7": document.getElementById("textoF7").setAttribute("class", "opaco"); break;
			
			case "CartaD0": document.getElementById("textoD0").setAttribute("class", "opaco"); break;
			case "CartaD1": document.getElementById("textoD1").setAttribute("class", "opaco"); break;
			case "CartaD2": document.getElementById("textoD2").setAttribute("class", "opaco"); break;
			case "CartaD3": document.getElementById("textoD3").setAttribute("class", "opaco"); break;
			case "CartaD4": document.getElementById("textoD4").setAttribute("class", "opaco"); break;
			case "CartaD5": document.getElementById("textoD5").setAttribute("class", "opaco"); break;
			case "CartaD6": document.getElementById("textoD6").setAttribute("class", "opaco"); break;
			case "CartaD7": document.getElementById("textoD7").setAttribute("class", "opaco"); break;
		}
	
	//Se segunda carta (s) não for par da primeira carta (p)	
		
	}else{
		flipsound.play();
		if (navigator.userAgent.indexOf("Chrome")>0 || navigator.userAgent.indexOf("Opera") == 0){
		var topoP = idP + "topo";
		var fundoP = idP + "fundo";
			
			setTimeout(function(){
				document.getElementById(topoP).setAttribute("class", "topo");
				document.getElementById(topoS).setAttribute("class", "topo");
			}, 1000);
			
		}else{
		setTimeout(function(){
		p.style.backgroundImage = "none";
		s.style.backgroundImage = "none";
		
		imgPDiv.style.background="none";
		imgSDiv.style.background="none";
		
		imgPDiv.setAttribute("class", "imagemvirada");
		imgSDiv.setAttribute("class", "imagemvirada");
		
		document.getElementById(cobertoP).setAttribute("class", "cobertovirada");
		cobertoSDiv.setAttribute("class", "cobertovirada");
		
		}, 900);
		
		setTimeout(function(){
			imgPDiv.style.background = "url('img/cartas.png')";
			imgSDiv.style.background = "url('img/cartas.png')";
		}, 1350);
		}
	}

	x = document.getElementsByClassName("ativa");
	for(i=0; i<x.length; i++){ x[i].setAttribute("onclick", "jogada(this);");}
}
