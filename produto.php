		<body>
									<?php
					$cabecalho_title	=	"CatLux";
					include("cabecalho.php");
	?>
		
<?php	$cabecalho_css	=	'<link	rel="stylesheet"	href="css/produto.css">';	?>
<link	rel="stylesheet"	href="css/produto.css">
						<div	class="container">			
						<div	class="produto">
			<h1>Moletom</h1>
			<p>por	apenas	R$	139,90</p>
		<form	action="checkout.php" method="POST">
<input	type="hidden" name="nome" value="Moletom">
<input	type="hidden" name="preco" value="139,90">

							<fieldset	class="cores">
											<legend>Escolha	a	cor:</legend>
											<input	type="radio" name="cor" value="rosa" id="rosa" checked>
											<label	for="rosa">
													<img	src="fotos/moletom-rosa.webp" alt="rosa">
											</label>
										
											<input	type="radio" name="cor" value="azul" id="azul">
											<label	for="azul">
													<img	src="fotos/moletom-azul.webp" alt="azul">
											</label>
							</fieldset>
							<fieldset class="tamanhos">
    <legend>Escolha o tamanho:</legend>
    <input type="range" min="1" max="4" value="2" step="1" name="tamanho" id="tamanho">
    <output for="tamanho" name="valortamanho">M</output>
</fieldset>

							<input	type="submit" class="comprar" value="Comprar">
			</form>
		
</div>	
		<div	class="detalhes">
		<h2>Detalhes	do	produto</h2>
									<p>Esse	é	o	melhor	moletom que	você	já	viu.	Excelente
									material	italiano.	Compre	já	e	receba	hoje
									mesmo	pela	nossa	entrega	a	jato.</p>
									<table>
					<thead>
									<tr>
													<th>Característica</th>
													<th>Detalhe</th>
									</tr>
					</thead>
					<tbody>
									<tr>
													<td>Modelo</td>
													<td>Moletom	7845</td>
									</tr>
									<tr>
													<td>Material</td>
													<td>Algodão	e	poliester</td>
									</tr>
									<tr>
													<td>Cores</td>
													<td>Azul e Rosa	</td>
									</tr>
									<tr>
													<td>Lavagem</td>
													<td>Lavar	a	mão</td>
									</tr>
					</tbody>
</table>
					</div>	
</div>	
									
									
									
									
									
									
									<?php	include("rodape.php");	?>
<script>
var	inputTamanho	=	document.querySelector('[name=tamanho]')
var	outputTamanho	=	document.querySelector('[name=valortamanho]')
function	mostraTamanho(){
			outputTamanho.value	=	inputTamanho.value
			outputTamanho.textContent	=	event.target.value
}
inputTamanho.oninput	=	mostraTamanho
	</script>
	<script>
  const tamanhoInput = document.getElementById('tamanho');
  const tamanhoOutput = document.querySelector('output[name="valortamanho"]');
  
  // Mapeando os valores numéricos para os tamanhos de roupa
  const tamanhos = ["P", "M", "G", "GG"];
  
  // Atualizando o valor do output de acordo com o valor selecionado
  tamanhoInput.addEventListener('input', function() {
    tamanhoOutput.textContent = tamanhos[tamanhoInput.value - 1]; // Ajustando o índice para 0-based
  });
</script>
					</body>