<?php
						$fieldsets = [
							'1' => 'Dados do Lote',
						];
					
						$fieldsetsProperties[1] = [
							"well" => true,
						
							'semBorda' => 'undefined',
							'semBordaTxt' => 'undefined',
							'isTabelaDeDados' => 'Não',
							'isTabelaDeDadosTxt' => 'Não',
						];
						
							$fields[1][1][] = [
						
								'nmField' => 'Configuracoes_Filiais_idFilial',
								'nmLabel' => 'Filial',
								'tpField' => 'require',
								'tpEstilo' => '',
								'nmClass' => '',
								'dsOptionsText' => '',
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '',
								'nmTabela' => 'Configuracoes',
								'tpEntrada' => 'numeros',
								'isObrigatorio' => 'Sim',
								'isReadonly' => 'Não',
								'nmCampoPrincipal' => 'idFilial',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => 'carregarEmbalagensCombo($([THIS]).val())',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

							$fields[1][2][] = [
						
								'nmField' => 'Produtos_Combos_id',
								'nmLabel' => 'Fórmula',
								'tpField' => 'require',
								'tpEstilo' => '',
								'nmClass' => '',
								'dsOptionsText' => '',
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '',
								'nmTabela' => 'Produtos',
								'tpEntrada' => 'numeros',
								'isObrigatorio' => 'Sim',
								'isReadonly' => 'Não',
								'nmCampoPrincipal' => 'Produtos_Combos_id',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => 'carregarEmbalagensCombo($([THIS]).val())',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

							$fields[1][3][] = [
						
								'nmField' => 'Producao_Maquinas_id',
								'nmLabel' => 'Máquina',
								'tpField' => 'require',
								'tpEstilo' => '',
								'nmClass' => '',
								'dsOptionsText' => '',
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '',
								'nmTabela' => 'Producao',
								'tpEntrada' => 'numeros',
								'isObrigatorio' => 'Sim',
								'isReadonly' => 'Não',
								'nmCampoPrincipal' => 'Producao_Maquinas_id',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => '',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

							$fields[1][4][] = [
						
								'nmField' => 'Produtos_Embalagens_id',
								'nmLabel' => 'Embalagem',
								'tpField' => 'select',
								'tpEstilo' => '',
								'nmClass' => '',
								'dsOptionsText' => '',
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '',
								'nmTabela' => '',
								'tpEntrada' => '',
								'isObrigatorio' => 'Sim',
								'isReadonly' => 'Não',
								'nmCampoPrincipal' => '',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => '',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

							$fields[1][4][] = [
						
								'nmField' => 'Producao_Lotes_quantidade',
								'nmLabel' => 'Quantidade Prevista',
								'tpField' => 'number',
								'tpEstilo' => '',
								'nmClass' => '',
								'dsOptionsText' => '',
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '',
								'nmTabela' => '',
								'tpEntrada' => 'numeros',
								'isObrigatorio' => 'Sim',
								'isReadonly' => 'Não',
								'nmCampoPrincipal' => '',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => '',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

							$fields[1][5][] = [
						
								'nmField' => 'Producao_Lotes_data',
								'nmLabel' => 'Data da Produção',
								'tpField' => 'text',
								'tpEstilo' => '',
								'nmClass' => 'date',
								'dsOptionsText' => '',
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '99/99/9999',
								'nmTabela' => '',
								'tpEntrada' => '',
								'isObrigatorio' => 'Sim',
								'isReadonly' => 'Não',
								'nmCampoPrincipal' => '',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => '',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

							$fields[1][6][] = [
						
								'nmField' => 'Pessoas_idPessoa',
								'nmLabel' => 'Responsável',
								'tpField' => 'require',
								'tpEstilo' => '',
								'nmClass' => '',
								'dsOptionsText' => '',
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '',
								'nmTabela' => 'Pessoas',
								'tpEntrada' => 'numeros',
								'isObrigatorio' => 'Sim',
								'isReadonly' => 'Não',
								'nmCampoPrincipal' => 'idPessoa',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => '',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

							$fields[1][7][] = [
						
								'nmField' => 'Producao_Lotes_tpSolicitacao',
								'nmLabel' => 'Tipo da Solicitação',
								'tpField' => 'select',
								'tpEstilo' => '',
								'nmClass' => '',
								'dsOptionsText' => '[ "Reposição" => "Reposição", "Emergencial" => "Emergencial", "Prioridade" => "Prioridade" ]',
								'dsOptions' => [ "Reposição" => "Reposição", "Emergencial" => "Emergencial", "Prioridade" => "Prioridade" ],
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '',
								'nmTabela' => '',
								'tpEntrada' => '',
								'isObrigatorio' => 'Não',
								'isReadonly' => 'Não',
								'nmCampoPrincipal' => '',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => '',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

							$fields[1][8][] = [
						
								'nmField' => 'Vendas_idVenda',
								'nmLabel' => 'Vendas',
								'tpField' => 'textarea',
								'tpEstilo' => '',
								'nmClass' => '',
								'dsOptionsText' => '',
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '',
								'nmTabela' => '',
								'tpEntrada' => '',
								'isObrigatorio' => '',
								'isReadonly' => '',
								'nmCampoPrincipal' => '',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => '',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

							$fields[1][9][] = [
						
								'nmField' => 'Producao_Lotes_dsObservacoes',
								'nmLabel' => 'Observações',
								'tpField' => 'textarea',
								'tpEstilo' => '',
								'nmClass' => '',
								'dsOptionsText' => '',
								'dsScriptEdicao' => '',
								'nmKeyLabel' => '',
								'dsMascara' => '',
								'nmTabela' => '',
								'tpEntrada' => '',
								'isObrigatorio' => 'Não',
								'isReadonly' => 'Não',
								'nmCampoPrincipal' => '',
								'tpAnexo' => '',
								'dsFiltroPesquisa' => '',
								'onload' => '',
								'onclick' => '',
								'hasNoInclude' => '',
								'size' => '',
								'change-link' => '',
								'change-field' => '',
								'change-clean' => '',
								'font-weight' => '',
						
							];
								
								
						
						

				$params = [
					'fieldsets' => $fieldsets,
					'fieldsetsProperties' => $fieldsetsProperties,
					'fields' => $fields,
					'linhas' => $linhas,
					'action' => 'producao/lotes/actions/criar',
					'titulo' => '',
					'semFormulario' => 'Não',
					'formato' => '',
					'semHiddenFields' => 'Não',
					'nmTabela' => 'Producao_Lotes',
					'nmRotuloBotao' => '',
					'classesBotaoConcluir' => '',
					'valoresTxt' => '$lotesFields',
					'valores' => $lotesFields,
					'novo' => 1,
					
				];
			
				
				
			
					$params['dialog'] = [
						'title' => 'Deseja abrir este lote?',
						'message' => '',
						'confirm' => 'Confirmar'
					];
				