<?php
	include "conexao.php";
	session_start();
	if (isset($_GET['modalidade_coletivaid'])) {
		$modalidade_coletivaid = $_GET['modalidade_coletivaid'];
}
	$verifica = $_SESSION['login_escola'][0];
  	$seleciona = "SELECT escola_id from escola where login = '$verifica'";
  	$resus = mysqli_query($conexao, $seleciona);
  	$verificaid = mysqli_fetch_row($resus);
  	$str = implode($verificaid);
	//mostrar id do evento
	$seleciona2 = "SELECT modalidade_coletivaid from modalidade_coletiva where modalidade_coletivaid = '$modalidade_coletivaid'";
  	$resus2 = mysqli_query($conexao, $seleciona2);
  	$verificaid2 = mysqli_fetch_row($resus2);
	$str2 = implode($verificaid2);
	//acaba aqui  

			

	// referencia o namespace
	use Dompdf\Dompdf;
	

	// inclui o autoloader
	require_once  '../dompdf/autoload.inc.php'; 
	

	$sql = "SELECT * FROM aluno where escola_id_fk = '$str' and modalidade_coletivaid_fk = '$modalidade_coletivaid'";
	$result = mysqli_query($conexao, $sql);
	$sqlescola = "SELECT * from escola where escola_id = '$str'";
	$resultescola = mysqli_query($conexao, $sqlescola);
	$dadosescola = mysqli_fetch_array($resultescola);
	$logoescola = $dadosescola['imagem'];
	$html = '<div id="imglogo">
				<img src="../imagens/jogosescolares.png"  style="width:100px; height:100px;">
				<img src="../imagens/'.$algumacoisa.'" style="width:100px; height:100px;" id="imglogo2">
				<img src="../imagens/'.$algumacoisa.'" style="width:100px; height:100px;" id="imglogo3">
				
            </div> ';
            
	$html .= '<img src="../imagens/'.$algumacoisa.'" style="width:100px; height:100px;" id="imglogo3">';
		$html .='<h2 align="center" > ESCOLA: '.$dadosescola['nomeequipe'].'</h2>';
		$html .='<h3 align="center"> DIRETOR: '.$dadosescola['nomeresponsavel'].'</h3>';
		$html .='<h3 align="center"> INEP: '.$dadosescola['nomeresponsavel'].'</h3>';		
	
	$html .= '<h2 align="center">Alunos<h2>';
	$html .= '
	<style>

	body {
		font-family: Arial,sans-serif;

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
					margin-left: 28%;
				}
				#imglogo3{
					margin-left: 28%;
				}
	</style>';
	$html .= '<table border = 1 width = 100%>';
	$html .= '<thead>';
		$html .= '<tr align="center">';
			$html .= '<td>Nome do Aluno</td>';
			$html .= '<td>Data de Nascimento</td>';
			$html .= '<td>Rg do Aluno</td>';
		$html .= '</tr>';
	$html .= '</thead>';
	$html .='<tbody>';
	while ($linha = mysqli_fetch_assoc($result)) {
		$html .='<tr align="center"><td>'.$linha[''].'</td>';
		$html .='<td>'.$linha['nome'].'</td>';
		$html .='<td>'.$linha['data_nascimento_aluno'].'</td>';
		$html .='<td>'.$linha['rg'].'</td></tr>';
		$html .='</tbody>';
	}

	$html .='</table>';
	
	

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
			'relatório_atleta.pdf', array('Attachment' => false)
	);

?>