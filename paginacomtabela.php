<?php

    /*

    Página com tabela

    São páginas que irão listar algo para o usuário, por exemplo:
    Lista de Vendas
    Lista de Pessoas
    Lista de Contas a Receber

    Elas possuem uma estrutura básica:

    1. Cabeçalho: Trata os dados que chegam via $_GET ou $_POST para validações
    2. Consulta no Banco de Dados (Exemplo: $Pessoas->listar([]))
    3. Processamento de dados
    4. Renderização da tabela

    Exemplo: pessoas/views/index/index.pesquisar.php

    */

    //CABECALHO
	$rand = rand(0,1000);
	
  	$funParams = $_GET;		
	
	if ($_GET['nmCampo'] == 'idPessoaMotorista') {
		$funParams['tpParceiro'] = 'Motorista';
	}
	
	if ($_GET['conOrigem'] == 'vendas') {
		$funParams['tpParceiro'] = 'Cliente';
	}
	
	//FIM CABECALHO

    //CONSULTA BANCO DE DADOS + PROCESSAMENTO
	
	
	
	if ($_GET['nmCidade'] != '') {
		$enderecosParams['nmCidade'] = $_GET['nmCidade'];
		$enderecosParams['agruparPessoa'] = true;
		$Pessoas->enderecos_listar($enderecosParams);
		$enderecosArr = $Pessoas->fieldsarr['Pessoas_Enderecos'];
		
		if (is_array($enderecosArr)) {
			foreach ($enderecosArr as $idPessoa => $pessoa) {
				$funParams['idPessoa'] .= "$idPessoa,";
			}
		}
		
	}
	
	if ($_GET['nmPessoaRCA'] != '') {
		$rcaParams['nmPessoa'] = $_GET['nmPessoaRCA'];
		$Pessoas->listar($rcaParams);
		$pessoasArr = $Pessoas->fieldsarr['Pessoas'];
		
		if (is_array($pessoasArr)) {
			foreach ($pessoasArr as $idPessoa => $pessoa) {
				$funParams['idPessoaRCA'] .= "$idPessoa,";
			}
		}
		
		
	}
	
	if ($_GET['nrCpfCnpj'] != '') {
		$cpfParams['nrCpf'] = $_GET['nrCpfCnpj'];
		$Pessoas->listar($cpfParams);
		$pessoasArr = $Pessoas->fieldsarr['Pessoas'];
		
		if (is_array($pessoasArr)) {
			foreach ($pessoasArr as $idPessoa => $pessoa) {
				$funParams['idPessoa'] .= "$idPessoa,";
			}
		}else{
			$cnpjParams['nrCnpj'] = $_GET['nrCpfCnpj'];
			$Pessoas->listar($cnpjParams);
			$pessoasArr = $Pessoas->fieldsarr['Pessoas'];
			
			if (is_array($pessoasArr)) {
			    foreach ($pessoasArr as $idPessoa => $pessoa) {
				    $funParams['idPessoa'] .= "$idPessoa,";
			    }
			}
			
		}
		
	}
	
	$Pessoas->listar($funParams);
	$pessoasArr = $Pessoas->fieldsarr['Pessoas'];

    //FIM CONSULTA

    //RENDERIZAÇÃO DE TABELA
	
	
	require 'index.pesquisar.formmaker.php';
	$generate->formmaker($params);
?>
