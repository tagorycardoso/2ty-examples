<? unset($colunas, $acoes); 
								$coluna['nmLabel'] = 'Código';
								$coluna['nmField'] = 'Producao_Lotes_id';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '10';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Fórmula';
								$coluna['nmField'] = 'Produtos_Combos_descricao';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Embalagem';
								$coluna['nmField'] = 'Produtos_Embalagens_descricao';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Previsto';
								$coluna['nmField'] = 'Producao_Lotes_quantidade';
								$coluna['isNumeric'] = 'Sim';
								$coluna['isFloat'] = 'Sim';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Sim';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Realizado';
								$coluna['nmField'] = 'Producao_Lotes_quantidadeRealizado';
								$coluna['isNumeric'] = 'Sim';
								$coluna['isFloat'] = 'Sim';
								$coluna['ifZeroNull'] = 'Sim';
								$coluna['hasTotalizador'] = 'Sim';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Eficiencia %';
								$coluna['nmField'] = 'Producao_Lotes_quantidadeRealizadoPcnt';
								$coluna['isNumeric'] = 'Sim';
								$coluna['isFloat'] = 'Sim';
								$coluna['ifZeroNull'] = 'Sim';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '([Producao_Lotes_quantidadeRealizado] > 0) ? ([Producao_Lotes_quantidadeRealizado] / [Producao_Lotes_quantidade]) * 100 : 0';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Data';
								$coluna['nmField'] = 'Producao_Lotes_dataOD';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Conclusão';
								$coluna['nmField'] = 'Producao_Lotes_dtConclusaoOD';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Responsável';
								$coluna['nmField'] = 'nmApelido';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Filial';
								$coluna['nmField'] = 'Configuracoes_Filiais_idFilial';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Status';
								$coluna['nmField'] = 'Producao_Lotes_status';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Máquina';
								$coluna['nmField'] = 'Producao_Maquinas_descricao';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
								$coluna['nmLabel'] = 'Solicitação';
								$coluna['nmField'] = 'Producao_Lotes_tpSolicitacao';
								$coluna['isNumeric'] = 'Não';
								$coluna['isFloat'] = 'Não';
								$coluna['ifZeroNull'] = 'Não';
								$coluna['hasTotalizador'] = 'Não';
								$coluna['width'] = '';
					    			$coluna['colorConditions'] = '';

					    
								$coluna['vrCampo'] = '';
								$colunas[] = $coluna; unset($coluna);
								
								
									$acao['nmAcao'] = 'Ver';
									$acao['linkAcao'] = 'producao/lotes/ver/[Producao_Lotes_id]';
									$acao['isAssistente'] = 'Sim';
									$acoes[] = $acao; unset($acao);

									
				$params['acoes'] = $acoes;
				$params['colunas'] = $colunas;
				$params['novo'] = '1';
				
			
				$params['tpLayout'] = 'list';
				
				$params['scriptPesquisaTxt'] = 'lotes_selecionar_[P_ID]([Producao_Lotes_id])';
				
				$params['valoresTxt'] = '$lotesArr';
				$params['valores'] = $lotesArr;
				
				$params['checkboxLateral'] = 'Não';
				
				/*
				$html->well_open('Título');
				$generate->datagrid('producao/views/lotes/index.formmaker.php', $lotesArr);
				$html->well_close();
				*/
				
			