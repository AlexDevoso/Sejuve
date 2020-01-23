<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		window.onload = function (){
			document.getElementById('trmodalidae').style.display = 'none';
			document.getElementById('trnaipe').style.display = 'none';

			document.getElementById('tr_ec').style.display = 'none';
			document.getElementById('tr_ei').style.display = 'none';
			document.getElementById('trbutao').style.display = 'none';
		}
		function selecionaCategoria(){

			var categoria = document.getElementById("categoria").value;
			if(categoria != ''){
				document.getElementById('trnaipe').style.display = '';
				
			}
			
		}

		function selecionaNaipe(){

			var naipe = document.getElementById("naipe").value;
			if(naipe != ''){
				
				document.getElementById('trmodalidae').style.display = '';
			}
		}
		function selecionaModalidade(){

			var modalidade = document.getElementById("modalidade").value;
			if(modalidade == "coletiva"){
				document.getElementById('tr_ei').style.display = 'none';
				document.getElementById('tr_ec').style.display = '';

			}
			else
			{   
				document.getElementById('tr_ei').style.display = '';
				document.getElementById('tr_ec').style.display = 'none';	
			}
		}
		function selecionaEsporte(){
			var esporte = document.getElementById("esportes_ct").value;
			var esporte2 = document.getElementById("esportes_in").value;
			if(esporte != '' || esporte2 != ''){
				document.getElementById('trbutao').style.display = '';
			}

		}
	</script>
</head>
<body>
	<div>
		<form action="testeboxcadastrar.php" method="POST">
		<table>
			
			<tr >
				<label>CATEGORIA</label>
				<select id="categoria" onchange="selecionaCategoria()" name="categoria">
      			<option value="" disabled selected>Categoria</option>
        		<option value="masculino">Masculino</option>
        		<option value="feminino">Feminino</option>
    			</select>
			</tr>

			<tr id="trnaipe">
				<td>
				<label>NAIPE</label>
				<select id="naipe" onchange="selecionaNaipe()" name="naipe">
      			<option value="" disabled selected>Naipe</option>
        		<option value="12a14">12 a 14</option>
        		<option value="15a17">15 a 17</option>
    			</select>
    			</td>
			</tr>

			<tr id="trmodalidae">
				<td>
				<label>MODALIDADE</label>
				<select id="modalidade" onchange="selecionaModalidade()" name="modalidade">
      			<option value="" disabled selected>Modalidae</option>
        		<option value="coletiva">Coletiva</option>
        		<option value="indivual">Individual</option>
    			</select>
    			</td>
			</tr >

			<tr id="tr_ec">
				<td>
				<label>Esportes Coletivos</label>
				<select id="esportes_ct" onchange="selecionaEsporte()" name="esporte">
      			<option value="" disabled selected>Esporte</option>
        		<option value="handebol">Handebol</option>
        		<option value="basquete">Basquete</option>
    			</select>
    			</td>
			</tr>

			<tr id="tr_ei">
				<td>
				<label>Esportes Individuais</label>
				<select id="esportes_in" onchange="selecionaEsporte()" name="esporte">
      			<option value="" disabled selected>Esporte</option>
        		<option value="tenis">Tênis de Mesa</option>
        		<option value="atletismo">Atletismo</option>
    			</select>
    			</td>

			</tr>

			<tr id="trbutao">
				<td>
				<button type="submit" name="enviar">Cadastrar atletas</button>
    			</td>
    			
			</tr>
		</table>
		</form>
	</div>
</body>
</html>