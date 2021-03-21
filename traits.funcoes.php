<?php  

    /*
        Existe uma camada de abstração que faz com que não seja necessário escrecer queries dentro da nossa plataforma.
        Você escreve objetos e ele trata de fazer a consulta.

        Vamos usar um arquivo de trait completo.

        Nome da tabela = Nome da Trait
        Exceto se houver INDEX, aí se ignora, como no exemplo abaixo



        

    */

    trait Pessoas_Index {

        //TRAIT PARA TRABALHAR COM A TABELA: Pessoas


        function create($array) {
            $params['nmTabela'] = 'Pessoas';
			$params['dados'] = $arr;
			return $this->createDados($params);

            //EXEMPLO DE USO
            /*
                $Pessoas->create([
                    'nmPessoa' => 'Tagory Cardoso',
                    'nmApelido' => 'tagory'
                ]);


            */ 
            //QUERY EQUIVALENTE
            /*
                REPLACE INTO Pessoas (nmPessoa, nmApelido) VALUES ('Tagory Cardoso', 'tagory');
            */

        }
        function update($array, $reference) {
            $params = array(
				'table' => 'Pessoas',
				'fields' => $fields,
				'reference' => $reference
			);
			return $this->simpleUpdate($params);

            //EXEMPLO DE USO
            /*
                $Pessoas->update([
                    'nmApelido' => 'tagory'
                ], [
                    'idPessoa' => 1
                ]);


            */ 
            //QUERY EQUIVALENTE
            /*
                UPDATE Pessoas SET nmApelido = 'tagory' WHERE idPessoa = 1;
            */

        }
        function listar($funParams) {
            if (is_array($funParams)) { extract($funParams); }		
			
			$params['nmTabela'] = 'Pessoas';
			$params['nmTabelaAlias'] = 'pes';

            $params['tpPrecedence'][] = '';
			$params['nmFields'][] = 'pes.idPessoa';
			$params['vrFields'][] = $idPessoa;
			$params['tpRelacionamento'][] = 'MULTIPLE';
			$params['tpSuccessor'][] = '';
			
			$params['tpPrecedence'][] = '';
			$params['nmFields'][] = 'pes.nmPessoa';
			$params['vrFields'][] = $nmPessoa;
			$params['tpRelacionamento'][] = 'LIKE';
			$params['tpSuccessor'][] = '';
			
			return $this->listarDados($params);

            //EXEMPLO DE USO
            /*
                $Pessoas->listar([
                    'nmPessoa' => 'tagory'
                ]);


            */ 
            //QUERY EQUIVALENTE
            /*
                SELECT * FROM Pessoas pes WHERE pes.nmPessoa LIKE '%tagory%'
            */

        }
        function carregar($funParams) {
            //FORMA ANTIGA

            if (is_array($funParams)) { extract($funParams); }		
			
			$params['nmTabela'] = 'Pessoas';
			$params['nmTabelaAlias'] = 'pes';

            $params['tpPrecedence'][] = '';
			$params['nmFields'][] = 'pes.idPessoa';
			$params['vrFields'][] = $idPessoa;
			$params['tpRelacionamento'][] = 'MULTIPLE';
			$params['tpSuccessor'][] = '';
			
			$params['tpPrecedence'][] = '';
			$params['nmFields'][] = 'pes.nmPessoa';
			$params['vrFields'][] = $nmPessoa;
			$params['tpRelacionamento'][] = 'LIKE';
			$params['tpSuccessor'][] = '';

            $params['tpFuncao'] = 'carregar';
			
			return $this->listarDados($params);



            //FORMA NOVA

            $funParams['params']['tpFuncao'] = 'carregar';
            return $this->listarDados($funParams);

            //EXEMPLO DE USO
            /*
                $Pessoas->listar([
                    'idPessoa' => 615
                ]);


            */ 
            //QUERY EQUIVALENTE
            /*
                SELECT * FROM Pessoas pes WHERE pes.idPessoa = 615 LIMIT 0, 1
            */

        }

        function deletar($funParams) {
            $params['nmTabela'] = 'Pessoas';
			
			$params['nmFields'][] = 'idPessoa';
			$params['vrFields'][] = $idPessoa;
			
			if ($idPessoa > 0) {
				return $this->deletarDados($params);
			}


            //EXEMPLO DE USO
            /*
                $Pessoas->deletar([
                    'idPessoa' => 615
                ]);


            */ 
            //QUERY EQUIVALENTE
            /*
                UPDATE Pessoas SET isAtivo = 'Não' WHERE idPessoa = 615;
            */
        }

    }
