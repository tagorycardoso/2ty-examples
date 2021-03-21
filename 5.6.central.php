<?
	require '../mtos/controllers/utils/fastsearch.php';
	require_once 'modules/configuracoes/controllers/configuracoes.php';
?>
<h1>Producao - Lotes de Produção</h1>
<?
	$rand = rand(0,1000);

	if ($_GET['dtPeriodo'] == '') {
		$_GET['dtPeriodo'] = date("01-m-Y,31-m-Y");
	}
	

	$filiaisArr = $Configuracoes->filiais_listar([
		'hasAcessoDados' => true
	]);

	/*
	require 'index.pesquisar.form.php';
	$params['action'] = $controller.'/'.$
	view.'/'.$action;
	$params['idArea']  = 'formPesquisarProducao'.$rand;
	$generate->gridform_search($params);
	*/
	$maquinasArr = $Producao->maquinas_listar([]);
	
	$fastsearch = new fastsearch(array(
		'url' => $controller.'/lotes/index.abas',
		'autoload' => true
	));
	
	$maquinas = $fastsearch->convertToSelect($maquinasArr, 'Producao_Maquinas_id', 'Producao_Maquinas_descricao', true);
	$filiais = $fastsearch->convertToSelect($filiaisArr, 'idFilial', 'nmApelidoFilial', true);


	$status = [
		'' => '',
		'Aguardando' => 'Aguardando',
		'Execucao' => 'Execução',
		'Finalizado' => 'Finalizado',
	];
	$fastsearch->fastsearch_add(array(
		'label' => 'Filial',
		'name' => 'Configuracoes_Filiais_idFilial',
		'size' => 1,
		'type' => 'select',
		'array' => $filiais,
		'defaultValue' => $_GET['Configuracoes_Filiais_idFilial'],
	));	
	$fastsearch->fastsearch_add(array(
		'label' => 'Máquina',
		'name' => 'Producao_Maquinas_id',
		'size' => 1,
		'type' => 'select',
		'array' => $maquinas,
		'defaultValue' => $_GET['Producao_Maquinas_id'],
	));	
	$fastsearch->fastsearch_add(array(
		'label' => 'Lote',
		'name' => 'Producao_Lotes_id',
		'size' => 2,
		'defaultValue' => $_GET['nmPessoa'],
	));
	//Modificação Danilo
	$fastsearch->fastsearch_add(array(
		'label' => 'Produto',
		'name' => 'nmProduto',
		'type' => 'text',
		'size' => 1,
		'defaultValue' => $_GET['nmProduto'],
	));	
	$fastsearch->fastsearch_add(array(
		'label' => 'Responsável',
		'name' => 'nmPessoa',
		'size' => 2,
		'defaultValue' => $_GET['nmPessoa'],
	));
	$fastsearch->fastsearch_add(array(
		'label' => 'Status',
		'name' => 'Producao_Lotes_status',
		'size' => 1,
		'type' => 'select',
		'defaultValue' => $_GET['Producao_Lotes_status'],
		'array' => $status
	));
	$fastsearch->fastsearch_add(array(
		'label' => 'Testes do lote',
		'name' => 'Producao_Lotes_statusTestes',
		'size' => 1,
		'type' => 'select',
		'array' => [
			'' => '',
			'Aguardando' => 'Aguardando',
			'Realizado' => 'Realizado',
			'Parcial' => 'Parcial'
		],
		'defaultValue' => $_GET['Producao_Lotes_statusTestes']
	
	));
	$fastsearch->fastsearch_add(array(
		'label' => 'Tipo de Solicitação',
		'name' => 'Producao_Lotes_tpSolicitacao',
		'size' => 1,
		'type' => 'select',
		'array' => [ "" => "" ,"Reposição" => "Reposição", "Emergencial" => "Emergencial", "Prioridade" => "Prioridade" ],
		'defaultValue' => $_GET['Producao_Lotes_statusTestes']
	
	));
	$fastsearch->fastsearch_add(array(
		'label' => 'Período',
		'name' => 'dtPeriodo',
		'size' => 1,
		'type' => 'dateInterval',
		'defaultValue' => $_GET['dtPeriodo'],
	));

	$fastsearch->fastsearch_render();
	
	
	
	

?>

<?
	$html->well_open('');
		$fastsearch->fastsearch_render_container();
		
	$html->well_close();
?>


	
	

<script>
	function lotes_selecionar_<?=$_GET['P_ID']; ?>(Producao_Lotes_id) {	
		$("#<?=$_GET['nmCampo'];?><?=$_GET['P_ID']; ?>").val(Producao_Lotes_id);
		buscarlotes<?=$_GET['P_ID']; ?>();
		fecharAssistente('Sec');
	}	
</script>
