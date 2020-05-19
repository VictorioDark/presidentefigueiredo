<?php
import("conexao.php");
import("cabecalho.php");
import("menu.php");
echo $id;
$sql = "SELECT * FROM noticias";
$result = $_GLOBAL["conexao"]->query($sql);
?>
<script>
var cachoeiras = [];
int contador = 0;
function mudaSlide(){
	int tamanho = cachoeiras.length;
	cachoeiraAtual = cachoeiras[contador];
	document.getElementById('imagens_passando').src=cachoeiraAtual.img; 
	document.getElementById('imagens_passando').style.filter="saturate("+cachoeiraAtual.saturacao+"%)";
	document.getElementById('imagens_passando').style.transition="4s";
	document.getElementById("p_waterfallname").innerHTML=cachoeiraAtual.nome;
	setTimeout("mudaSlide()", 4000);
	contador++;
	if(contador >= tamanho) {
		contador = 0;
	}
}
</script>
<?php
echo "<script>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	echo "cachoeiras.push({nome:\""+$row["nome"]+"\", img:\""+$row["img"]+"\", saturacao: \""+$row["saturacao"]+"\"});"
  
  }
} else {
  echo "0 results";
}
echo "</script>"
?>


	


		<div id="guarda_info">
			<div id="principal">
				<img src="" id="imagens_passando">
				<div id="div_waterfallname">
					<p id="p_waterfallname">NOME DA CACHOEIRA</p>
				</div>
			</div>

			<div class="inf1">
			</div>

			<div class="inf2">
				<div class="fundo">
					<div class="fundo1">
					</div>
				</div>

				<div class="frente">
					<div class="frente1">
					</div>
				</div>
			</div>
		</div>

	

	<div id="texto">
				<p id="apresentalocal">
				TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                TEXTO TEXTO TEXTO TEXTO TEXTO </br>
				</p>

				<p id="apresentasau">
                    TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                    TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                    TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                    TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                    TEXTO TEXTO TEXTO TEXTO TEXTO </br>
                    TEXTO TEXTO TEXTO TEXTO TEXTO </br>

				<div id="linhadivisora"></div>
	</div>




<?php
import("rodape.php");
?>