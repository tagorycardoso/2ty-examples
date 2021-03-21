<?php


    /* 
        EXISTEM DOIS TIPOS DE CLASSES ENCONTRADAS NO SISTEMA
        1. Classes para manipulação de banco de dados. Elas possuem os mesmos nomes dos módulos (Vendas, Pessoas) e são elas as responsáveis pelo CRUD
        2. Classes para manipulação de dados. Elas processam os dados e utilizam as classes para manipular o banco de dados. Exemplo: Processar uma venda.

        Para facilitar o desenvolvimento, quebramos as classes em TRAITS. Basicamente são pequenos trechos de um a classe.
        Um exemplo segue abaixo
        1. Requisita o arquivo da trait
        2. Aplica a trait dentro da clase usando USE.

        Este arquivo normalmente não é mexido, mas nas traits sim.

    */

    require 'traits.php';

    class Pessoas {
        use Pessoas_Index;
    }

    $Pessoas = new Pessoas;