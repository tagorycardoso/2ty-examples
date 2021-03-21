<?
	
	$post = $_POST['fields']['Producao_Lotes'];
	switch ($id) {
		case "criar":
			require 'actions/criar.php';
			break;
		case "editar":
			require 'actions/editar.php';
			break;
		case "deletar":
			require 'actions/deletar.php';
			break;
		case "status":
			require 'actions/status.php';
			break;
		case "etiqueta":
			$msg = '[Script]<script>window.open("pure/etiquetas/index/etiqueta_lote_100x150&Producao_Lotes_id='.$post['Producao_Lotes_id'].'&qtdEtiquetas='.$post['qtdEtiquetas'].'&idProduto='.$post['idProduto'].'&Produtos_Embalagens_id='.$post['Produtos_Embalagens_id'].'");</script>';
			break;
	}
?>