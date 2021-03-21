<?php

    /*
        Essa é uma lista dos problemas mais comuns no dia a dia, ou tarefas mais solicitadas.


        1. Adicionar um campo no formulário:
            - Localizar a tabela correspondente
            - Adicionar o campo conforme notação.
            - Abrir o arquivo do formulário na varinha mágica
            - Adicionar o campo e salvar
            - Limpar Redis

        2. Identificar a SQL que está sendo executada
            - Adicionar antes do código: $_GET['debug'] = 1;


        3. Erro de SQL: Column 'Agro_Locais_id' in where clause is ambiguous
            - Acontece quando ele está executando uma SQL mas faltou um ALIAS para o campo para definir de qual tabela ele precisa aplicar o filtro/trazer o dado
            - Acontece sempre que tem tabelas usando JOIN e campos iguais.
                Exemplo:

                            SELECT 
                                aga.Agro_Animais_id as Agro_Animais_id, 
                                vacin.Agro_Animais_Vacinas_id as Agro_Animais_Vacinas_id 
                            FROM 
                                Agro_Animais_Vacinacoes agvac 
                                JOIN Agro_Animais_Vacinas vacin ON (agvac.Agro_Animais_Vacinas_id = vacin.Agro_Animais_Vacinas_id) 
                                JOIN Agro_Animais aga ON (agvac.Agro_Animais_id = aga.Agro_Animais_id) 
                                JOIN Agro_Animais_Tipos tip ON (tip.Agro_Animais_Tipos_id = aga.Agro_Animais_Tipos_id) 
                                JOIN Agro_Animais_Racas rac ON (rac.Agro_Animais_Racas_id = aga.Agro_Animais_Racas_id) 
                                JOIN Agro_Animais_Cores cor ON (cor.Agro_Animais_Cores_id = aga.Agro_Animais_Cores_id) 
                                LEFT JOIN Agro_Animais_Compras cmp ON (cmp.Agro_Animais_Compras_id = aga.Agro_Animais_Compras_id) 
                                LEFT JOIN Pessoas pes ON (pes.idPessoa = cmp.Pessoas_idPessoa) 
                            WHERE 1 = 1 
                                AND aga.isAtivo = 'Sim' 
                                AND agvac.isAtivo = 'Sim' 
                Erro===>        AND Agro_Locais_id = '35'   ===> Agro_Locais_id existe em duas tabelas: Agro_Animais (aga) e Agro_Animais_Vacinacoes (agvac), e como não foi colocado um alias, ele dá o erro.
                                AND Agro_Animais_status = 'Fazenda' 
                            LIMIT 0,99999


            - Para corrigir, basta adicionar o ALIAS correto (aga):
                Correto ==>     AND aga.Agro_Locais_id = '35'   => Lê-se "E na coluna Agro_Locais_id da tabela Agro_Animais (aga)"

            - Como no framework não temos acesso a modificar diretamente a consulta, mas alteramos o campo de busca na trait:
                    agro/animais/views/animais.trait.php

                            function animais_listar() {
                                ... 

                                $params['tpPrecedence'][] = '';
                Erro====>       $params['nmFields'][] = 'Agro_Locais_id';   =====> A falta do Alias aqui gera o erro de SQL, para corrigir, basta adicionar o alias.
                                $params['vrFields'][] = $Agro_Locais_id;
                                $params['tpRelacionamento'][] = '';
                                $params['tpSuccessor'][] = '';

                                ...
                            }



                            function animais_listar() {
                                ... 

                                $params['tpPrecedence'][] = '';
                Corrigido=>     $params['nmFields'][] = 'aga.Agro_Locais_id';   =====> Adicionado o mesmo alias em $params['nmTabelaAlias']
                                $params['vrFields'][] = $Agro_Locais_id;
                                $params['tpRelacionamento'][] = '';
                                $params['tpSuccessor'][] = '';

                                ...
                            }


        4. Erro de Sintaxe no PHP

    */