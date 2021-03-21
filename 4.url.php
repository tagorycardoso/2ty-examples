<?php


    /*


    A estrutura de uma URL do nosso framework é definida na seguinte forma

    #controller/view/action/id&queryparameters

    - Controller        => É o nome do módulo
    - View              => É a visualização do módulo
    - Action            => É a ação do módulo
    - ID                => É o código referente a primária da tabela
    - Query Parameters  => São parâmetros passados via $_GET

    Exemplo:

    #agro/animais/criar
    #agro/animais/criar/1
    #agro/animais/index.pesquisar&Agro_Locais_id=2

    Como localizar nas pastas estes arquivos?

    agro/
        views/animais/
            criar.php
            index.pesquisar.php


    Dentro de cada VIEW, irá sempre existir uma trait do mesmo nome da pasta. Utilizando-se do exemplo acima:
    agro/
        views/animais/
            animais.trait.php



    Existem os seguintes tipos de arquivo dentro do sistema:

    
    
    
    - JSON
    - TRAITS
    - CLASSES DE CONTROLLER
    - CLASSES DE FUNÇÕES
    

    
    Explicando cada um:

    1- CLASSES DE CONTROLLER: Sempre que uma URL é chamada, ele irá instanciar a classe referente aquele controller. Explico:
        Ao chamar a url: #agro/animais/index
        Ele sempre irá instanciar a classe Agro, contida em: agro/controllers/agro.php
        Executará automaticamente: $Agro = new Agro;
        Deixará disponível para o usuário sem precisar requisitar

        $Agro->animais_listar();

    2- TRAITS: É uma forma de organização do sistema, onde as funções de uma classe são separadas. Nelas irão conter os métodos básicos: create, update, atualizar, listar, carregar, deletar
        Sempre irão ter o mesmo nome da view.
        agro/views/animais/animais.trait.php


    3- CRIAR: É o arquivo que irá mostrar ao usuário um formulário. Ele vai receber input de dados, a tela onde se cadastrará alguma coisa. Dentro do sistema, os arquivos podem estar nomeados como: criar.php, atualizar.php, editar.php. A notação atual é criar.php
        agro/views/animais/criar.php

    4- FORMULÁRIO: É um arquivo que contém metadados sobre os formulários, uma vez que dentro evitamos usar HTML para gerá-los. Sua extensão é .form.php Normalmente seu nome é igual a página que está chamando: criar.form.php
        A ação do formulário sempre irá para uma ação de backend, no caso ACTIONS.
        agro/views/animais/criar.form.php

    5- ACTIONS: É o destino de todo formulário, para onde o formulário dá um POST. É basicamente o caminho de entrada do processamento Backend. Ele é sempre nomeado como actions.php
        agro/views/animais/actions.php


    6- CENTRAL: É a página onde o usuário irá cair, é a index da view. Nessa página normalmente haverá uma barra de busca (Fastsearch), com seus campos, apontando para uma pagina LISTAR ou ABAS
        agro/views/animais/index.php
    
    7- ABAS: É a página que terá opções de abas para navegação do usuário dentro de uma view
        producao/views/lotes/index.abas.php

    8- LISTAR: É a página que irá exibir os dados da view, em forma de tabela. Por exemplo: A lista de animais, ou lista de lotes.
        agro/views/animais/index.pesquisar.php
    
    9- DATAGRID: É o arquivo que contém metadados, assim como o FORMULÁRIO, mas para gerar tabelas. Ele irá receber um array e gerar uma tabela de dados. Possui a extensão: .formmaker.php
        agro/views/animais/index.formmaker.php

    10 - JSON: É o arquivo que irá servir como API, sempre retornando um JSON para ser lido por um código Javascript
    
    

    






    */