<?php

    /*
    Este é um arquivo modelo de trait.
    Percebe-se que em vez de CLASS, inicia-se declarando a TRAIT.

    E dentro delas estão as funções que irão direto para a classe.
    Essa classe usa uma camada de abstração que faz com que nós programadores não precisemos escrever as SQL para poder inserir, atualizar, deletar um dado.
    Basta passar como um objeto/array que o framework trata de resolver.

    */

    trait Pessoas_Index {
        function create($array) {
            
        }
        function update($array, $reference) {

        }
        function listar($funParams) {

        }
        function carregar($funParams) {

        }

        function deletar($funParams) {

        }

    }


    /*
        Esse método irá criar um registro na tabela Pessoas, retornar o ID inserido e gravar na variável $idPessoa
        Semelhante a: INSERT INTO Pessoas (nmPessoa, nmApelido) VALUES ("Tagory Cardoso", "tagory")
        $idPessoa = $Pessoas->create([
            'nmPessoa' => 'Tagory Cardoso',
            'nmApelido' => 'tagory'
        ]);

        
        Esse método irá atualizar o campo nmPessoa na tabela Pessoas, cujo idPessoa = 1
        Semelhante a: UPDATE Pessoas SET nmPessoa = "Tagory Henrique Sousa Cardoso WHERE idPessoa = 1
        $retorno = $Pessoas->update([
            'nmPessoa' => 'Tagory Henrique Sousa Cardoso
        ], [
            'idPessoa' => 1
        ]);


        Esse método irá fazer um select de dados e retornar um array de dados (Ou seja, 1 ou mais linhas)
        Semelhante a: SELECT nmPessoa, nmApelido FROM Pessoas WHERE isAtivo = "Sim" AND nmApelido LIKE "%zangado%"
        $pessoasArr = $Pessoas->listar([
            'nmApelido' => "zangado"
        ]);


        Esse método irá fazer um select de dados e retornar somente 1 registro
        Semelhante ao exemplo anterior, mas com 1 só linha retornada. Utilizado majoritariamente com algum ID, para maior precisão
        $pessoaFields = $Pessoas->carregar([
            'idPessoa' => 1            
        ]);

        
        Esse método é para deletar os dados.
        Executa: UPDATE Pessoas SET isAtivo="Não" WHERE idPessoa=1
        No nosso framework, o sistema não deleta dados (DELETE FROM), mas usa uma coluna para marcar que aquele campo foi inativado (isAtivo)
        $Pessoas->deletar([
            'idPessoa' => 1
        ]);
    

    */