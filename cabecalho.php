<!DOCTYPE html>
<html>
<script type="text/javascript">

function mudaSlide(img, nomeCachoeira, saturacao){
	document.getElementById('imagens_passando').src=img; 
	document.getElementById('imagens_passando').style.filter="saturate("+saturacao+"%)";
	document.getElementById('imagens_passando').style.transition="4s";
	document.getElementById("p_waterfallname").innerHTML=nomeCachoeira;
	setTimeout("slide2()", 4000)
}
</script>
<head>
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 701px)" href="CSSDESKTOP/index.css"/>

	 <link rel="stylesheet" type="text/css" media="screen and (max-width: 700px) "href="indexmobile.css"/>
	
	<!-- <link rel="stylesheet" type="text/css" media="screen and (min-width: 1050px)" href="indextablet.css"/> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nome do Site</title>
	<link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
</head>
<body onload="mudaSlide()">

	<div id="topo">
		<a href="../1-PaginaInicial/index.html">
			<div id="guardalogo">
				<img id="logotipo" src="../Imagens/logotipo.png">
			</div>
		</a>

			<div id="guarda_redesocial">
			<div class="redesocial">
				<a href="" target="_blank">
					<img src="https://w7.pngwing.com/pngs/373/994/png-transparent-computer-icons-facebook-button-taxi-logos-logo-black-and-white-symbol.png" class="redesocialimg"/>
				</a>
			</div>

			<div class="redesocial">
				<a href="" target="_blank">
					<img src="https://image.flaticon.com/icons/png/512/49/49411.png" class="redesocialimg"/>
				</a>
			</div>

			<div class="redesocial">
				<a href="" target="_blank">
					<img src="https://cdn.clipart.email/16b424d7fb8cc80f647ba26a27ce875a_filecis-a2k-instagram-icon-blacksvg-wikimedia-commons_768-768.png"  class="redesocialimg"/>
				</a>
			</div>
		</div>
	</div>


	<input type="checkbox" id="botao" name="">
	<label for="botao">&#9776;</label>