//jogo dos sete erros

//Antenor Navarro
foto0 = ["265px,84px","194px,188px","154px,201px","221px,216px","370px,161px","406px,177px","448px,250px"];

//Cem Réis
foto1 = ["65px,234px","190px,284px","420px,290px","304px,176px","209px,204px","366px,134px","295px,18px"];

//Dom Adauto
foto2 = ["83px,207px","199px,133px","278px,205px","274px,249px","366px,286px","344px,206px","470px,58px"];

//João Pessoa
foto3 = ["27px,213px","84px,337px","146px,366px","371px,246px","394px,185px","447px,37px","444px,292px"];

window.onload = function(){
	document.getElementById("certo").style.display = "none";
	document.getElementById("errado").style.display = "none";
	document.getElementById("botoes").style.display = "none";
}
	//Testa o navegador e a compatibilidade com a extensao de som
	if(navigator.appName == "Opera"){ var ext = "wav"; } else { var ext = "mp3"; }
	//Carrega som
	var giz = document.createElement('audio');
	var gizPath = "../sons/giz." + ext;
	giz.setAttribute('src', gizPath);
	
	function iniciar(jogox){
		document.getElementById("miniaturas").style.display = "none";
		document.getElementById("botoes").style.display = "block";
		var jogoId = jogox.id;
		
		var certo = document.getElementById("certo");
		var errado = document.getElementById("errado");
		
		for (t=0; t<=3; t++){
			var textoX = "texto"+t;
			document.getElementById(textoX).setAttribute("class", "transparente");
		}
		document.getElementById("texto").setAttribute("class", "transparente");
		
		switch (jogoId){
		
		case "jogo0": 
			var foto = foto0; 
			document.getElementById("texto0").setAttribute("class", "opaco");
			certo.style.backgroundImage = "url(img/antenor_navarroA.jpg)";
			errado.style.backgroundImage = "url(img/antenor_navarroB.jpg)";
			tamanho(jogoId);
			posicionar(foto); 
			
			break;
		case "jogo1": 
			var foto = foto1;
			document.getElementById("texto1").setAttribute("class", "opaco");
			certo.style.backgroundImage = "url(img/cem_reisA.jpg)";
			errado.style.backgroundImage = "url(img/cem_reisB.jpg)";
			tamanho(jogoId);	
			posicionar(foto); 
			
			break;
			
		case "jogo2": 
			var foto = foto2;
			document.getElementById("texto2").setAttribute("class", "opaco");
			certo.style.backgroundImage = "url(img/dom_adautoA.jpg)";
			errado.style.backgroundImage = "url(img/dom_adautoB.jpg)";
			
			tamanho(jogoId);
			posicionar(foto); 
			
			break;
			
		case "jogo3": 
			var foto = foto3;
			document.getElementById("texto3").setAttribute("class", "opaco");
			certo.style.backgroundImage = "url(img/joao_pessoaA.jpg)";
			errado.style.backgroundImage = "url(img/joao_pessoaB.jpg)";
			tamanho(jogoId);
			posicionar(foto); 
			
			break;
		}	
			
		function posicionar(foto){
			document.getElementById("certo").style.display = "block";
			document.getElementById("errado").style.display = "block";
			foto;
			
			for (e=0; e<7; e++){
				var errox = "erro" + e;
				var divErro = document.getElementById(errox);
			
				// posicao = "x,y"	
				var posicao = foto[e].split(",");
				var coordx = posicao[0];
				var coordy = posicao[1];
			
				divErro.style.left = coordx;
				divErro.style.top = coordy;
				
				var errado = document.getElementsByName("erro");
				errado[e].setAttribute("class", "erro");
				errado[e].setAttribute("onclick", "ouch(this);");
			}
		}
	}
	
	function ouch(erro){
		
			erro.setAttribute("class", "ouch");
			erro.setAttribute("onclick", " ");
			
			var achados = document.getElementsByClassName("ouch");
			giz.play();
			
			if (achados.length == 7){ alert("Parabéns, você achou todos os sete erros!");} else {}	
	}
	
	function tamanho(jogoId){
		switch(jogoId){
		
		case "jogo1": document.getElementById("erro1").style.width = "115px"; break;
			
		case "jogo3":
			document.getElementById("erro1").style.width = "200px"; 
			document.getElementById("erro5").style.width = "92px"; 
			document.getElementById("erro5").style.height = "78px"; 
			document.getElementById("erro6").style.width = "88px"; 
			document.getElementById("erro6").style.height = "100px"; 
			break;	
			
		default:
			document.getElementById("erro1").style.width = "40px"; 	
			document.getElementById("erro5").style.width = "40px"; 	
			document.getElementById("erro5").style.height = "40px"; 	
			document.getElementById("erro6").style.width = "40px"; 	
			document.getElementById("erro6").style.height = "40px"; 	
		
		}	
		
	}
