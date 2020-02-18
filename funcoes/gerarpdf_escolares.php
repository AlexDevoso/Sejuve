<?php
	include "conexao.php";
	session_start();
	if (isset($_GET['modalidade_coletivaid'])) {
		$modalidade_coletivaid = $_GET['modalidade_coletivaid'];
		}
	if(isset($_SESSION['login_escola'][0])){
		$id = $_SESSION['login_escola'][0];
  		$seleciona = "SELECT escola_id from escola where login = '$id'";
	}else{
		if(isset($_SESSION['login_escola'][1])){
		$id = $_SESSION['login_escola'][1];
  		$seleciona = "SELECT escola_id from escola where escola_id = '$id'";
		}
	}
			
  	$resus = mysqli_query($conexao, $seleciona);
  	$verificaid = mysqli_fetch_row($resus);
  	$str = implode($verificaid);
			

	// referencia o namespace
	use Dompdf\Dompdf;
	

	// inclui o autoloader
	require_once  '../dompdf/autoload.inc.php'; 
	$sqlt = "SELECT * FROM comissao_tecnica_escolares where modalidade_coletivaid_fk = '$modalidade_coletivaid' and escola_id_fk = '$str'";
	$resultecnico = mysqli_query($conexao, $sqlt);
	$dadost = mysqli_fetch_array($resultecnico);
	$sql = "SELECT * FROM aluno where modalidade_coletivaid_fk = '$modalidade_coletivaid' and escola_id_fk = '$str'";
	$result = mysqli_query($conexao, $sql);
	
	$sqlescola = "SELECT * from escola where escola_id = '$str'";
	$resultescola = mysqli_query($conexao, $sqlescola);
	$dadosescola = mysqli_fetch_array($resultescola);
	$logoescola = $dadosescola['imagem'];
	if($dadosescola['imagem'] != null){
		$html = '<div id="imglogo">
		img src="../imagens/relatorio/sejuve_logo2.png"  style="width:130px; height:80px;">
		<img src="../imagens/relatorio/JOGOS.png"  style="width:130px; height:80px;" id="imglogo2">
		<img src="../imagens/relatorio/pre.png"  style="width:130px; height:80px;" id="imglogo3">
				<img src="../imagens/'.$logoescola.'" style="width:80px; height:80px;" id="imglogo4">
			</div> ';
	}
	else{
			$html = '<div id="imglogo">
			<img src="../imagens/relatorio/sejuve_logo2.png"  style="width:130px; height:80px;">
			<img src="../imagens/relatorio/JOGOS.png"  style="width:130px; height:80px;" id="imglogo2">
			<img src="../imagens/relatorio/pre.png"  style="width:130px; height:80px;" id="imglogo3">
		
			</div> ';
				
	}
	
			$html .= '<table id="tb1" border = 1 width = 100%>';
			$html .= '<thead>';
				$html .= '<tr align="center">';
					$html .= '<td>ESCOLA</td>';
					$html .= '<td>INEP</td>';
					$html .= '<td>RESPONSÁVEL</td>';
					$html .= '<td>DIRETOR</td>';			
				$html .= '</tr>';
			$html .= '</thead>';
			
			$html .='<tbody>';
				$html .='<tr align="center">';
				$html .='<td>'.$dadosescola['nome'].'</td>';
				$html .='<td>'.$dadosescola['inep'].'</td>';
				$html .='<td>'.$dadosescola['nome_responsavel_escola'].'</td>';
				$html .='<td>'.$dadosescola['diretor_escola'].'</td></tr>';
				$html .='</tbody>';
		
			
			$html .='</table>';
			$html .= '<h3 align="center">ALUNOS<h3>';
	
			$html .= '<table border = 1 width = 100%>';
			$html .= '<thead>';
				$html .= '<tr align="center">';
					$html .= '<td>NOME</td>';
					$html .= '<td>DATA DE NASCIMENTO</td>';
					$html .= '<td>RG</td>';
							
				$html .= '</tr>';
			$html .= '</thead>';
			$html .='<tbody>';
			
			while ($linha = mysqli_fetch_assoc($result)) {
				$html .='<tr align="center"><td>'.$linha['nome'].'</td>';
				$html .='<td>'.date('d/m/Y', strtotime($linha['data_nascimento_aluno'])).'</td>';
				$html .='<td>'.$linha['rg'].'</td>';
				$html .='</tbody>';
			}
		
			$html .= '</table>';
	
	$html .= '<h3 align="center">TÉCNICO<h3>';
	$html .= '
	<style>

	body {
		font-family: Arial,sans-serif;
		text-transform: uppercase;
	}
			#tb1{
				margin-top: 10%;

			}
			table {
				border-collapse:collapse;
				white-space: nowrap;		
			}

			tbody{
				font-family: Arial,sans-serif;
       			margin: 0;
       			padding: 0;
       			border: none;
       			font-size: 13px;
       			
			}
				#imglogo{
					position: relative;
					
				}
				#imglogo2{
					margin-left: 20%;
				}
				#imglogo3{
					margin-left: 20%;
				}
				#imglogo4{
					margin-left: 38.5%;
				}
				#assdiv{
					position: absolute;
					margin-top: 10%;
					
				}
				#assdiv{
					
					margin-top: 9%;
					float: right;
					font-size: 10px;
				}

				#assdiv1{
					
					margin-top: -0.3%;
					float: left;
					font-size: 10px;
				}
	</style>';
	$html .= '<table border = 1 width = 100%>';
	$html .= '<thead>';
		$html .= '<tr align="center">';
			$html .= '<td>NOME</td>';
			$html .= '<td>CREF</td>';
			$html .= '<td>RG</td>';
					
		$html .= '</tr>';
	$html .= '</thead>';
	$html .='<tbody>';
	
		$html .='<tr align="center"><td>'.$dadost['nome_tecnico'].'</td>';
		$html .='<td>'.$dadost['cref_tecnico'].'</td>';
		$html .='<td>'.$dadost['rg_tecnico'].'</td>';
		$html .='</tbody>';
	

	$html .= '</table>';

	$html .= '<div id="assdiv0">';
	$html .= '<div id="assdiv">';
	$html .= '<p >___________________________________________________________</p>';
	$html .= '<p>CARIMBO E ASSINATURA DO DIRETOR - '.$dadosescola['diretor_escola'].'</p>';
	$html .= '</div>';

	$html .= '<div id="assdiv1">';
	$html .= '<p>___________________________________________________________</p>';
	$html .= '<p>ASSINATURA DO TÉCNICO - '.$dadost['nome_tecnico'].'</p>';
	$html .= '</div>';
	$html .= '</div>';
	//instancia
	$dompdf = new Dompdf;
	//converter o html
	$dompdf->loadhtml($html);
	//definir tamanho e orientação do papel
	$dompdf->setPAPER('A4', 'portrait');
	//rederizando o html
	$dompdf->render();
	//enviar para o browser
	$dompdf->stream(
			'relatório_alunos.pdf', array('Attachment' => false)
	);

?>