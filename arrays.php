<?php



    //TRÊS FORMAS BÁSICAS DE INSTANCIAR UM ARRAY
    /*

        1. Atribuindo usando colchetes direto na variável
        2. Atribuindo usando o método array();
        3. Usando colchetes em substituição a array()  <=== Metodo preferido
    */

    $array['Pessoas'][0]['nome'] = 'Tagory Cardoso';
    $array['Pessoas'][0]['apelido'] = 'tagory';

    $array['Pessoas'][1]['nome'] = 'Rafael Andrade';
    $array['Pessoas'][1]['apelido'] = 'zangado';


    echo 'Primeiro Array: '. "\n";
    print_r($array);
    echo "\n\n\n";

    unset($array);


    //SEGUNDA FORMA

    $array = array(
        'Pessoas' => array(
            array(
                'nome' => 'Tagory Cardoso',
                'apelido' => 'tagory'
            ),
            array(
                'nome' => 'Rafael Andrade',
                'apelido' => 'zangado'
            ),
        )
    );

    echo 'Segundo Array: '. "\n";
    print_r($array);
    echo "\n\n\n";


    //TERCEIRA FORMA

    $array = [
        'Pessoas' => [
            [
                'nome' => 'Tagory Cardoso',
                'apelido' => 'tagory'
            ],
            [
                'nome' => 'Rafael Andrade',
                'apelido' => 'zangado'
            ]
        ]
    ];


    //É POSSÍVEL QUE ENCONTRE MUITO NO CÓDIGO JUNÇÃO DE VARIAVEIS DE ARRAYS

    $tagory = [
        'nome' => 'Tagory Cardoso',
        'apelido' => 'tagory',
    ];

    $rafael = [
        'nome' => 'Rafael Andrade',
        'apelido' => 'zangado'
    ];

    $array = [
        'Pessoas' => [
            $tagory,
            $rafael
        ]
    ];