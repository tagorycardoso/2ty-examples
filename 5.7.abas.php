<?

	
	$generate->aba_iniciar(false);
	
	
	$generate->aba_adicionar('producao/lotes/calendario&'.$generate->processarGet(), 'Cronograma de Produção', true, "calendario");
	$generate->aba_adicionar('producao/lotes/index.pesquisar&'.$generate->processarGet(), 'Lotes', false, "lotes");
	$generate->aba_adicionar('producao/lotes_testes&'.$generate->processarGet(), 'Calendário de Testes', false, "testes");
	$generate->aba_adicionar('producao/lotes/materiais&'.$generate->processarGet(), 'Materiais', false, "materiais");
	
	 
	
	$idAba = $generate->aba_renderNovo();
	
