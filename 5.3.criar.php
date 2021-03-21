<?php  
    /*

    Dentro do Framework, para formulários temos a seguinte estrutura básica

    1. Cabeçalho
    2. Título da Página (Encapsulado em um H1)
    3. Carregamento de uma linha
    4. Renderização do formulário.

    - Os formulários possuem extensão: .form.php
    - Um mesmo arquivo de CRIAR pode ser utilizado para EDITAR um registro. O que muda de um para outro é o ID ($_GET['id']) que é passado em uma url:
        #agro/animais/criar     => Insere um novo animal na tabela: Agro_Animais
        #agro/animais/criar/1   => Edita o animal cód 1 da tabela Agro_Animais

        O 4º parâmetro é capturado através de $_GET['id']

    */






	$animaisTiposArr = $Agro->animais_tipos_listar(array());
	$vacinas = $Agro->animais_vacinas_listar(array());
	$racasArr = $Agro->animais_racas_listar(array());
	$coresArr = $Agro->animais_cores_listar(array());

	foreach ($vacinas as $index => $vacina) {
		$vacinasArr[$index] = $vacina['Agro_Animais_Vacinas_descricao'];
	}

	$locaisArr = $Agro->locais_listar([]);
	
?>
<h1>Agro - Cadastro de Animal</h1>
<?

	$funParams['Agro_Animais_id'] = $_GET['id'];
	if ($_GET['id'] > 0) {
	
		$Agro->animais_carregar($funParams);
		$animaisFields = $Agro->fields['Agro_Animais'];
	}

	require 'criar.form.php';
	$idForm = $generate->gridform($params);
?>
<script>
	
	$("#form<?=$idForm; ?>Agro_Animais_pesoInicial").keyup(function() {
		let peso = Number($(this).val());
		$("#form<?=$idForm; ?>Agro_Animais_pesoInicialArrobas").val(number_format(peso / 15, 2, '.', ''));
	});
</script>