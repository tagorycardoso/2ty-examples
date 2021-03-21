<?php

    /*

    Dentro da operação do sistema, você irá perceber uma operação muito mista de código, entre código mais antigo e modernizado.
    Como identificar:

        - Código Antigo

        $pesParams['nmApelido'] = 'zangado';
        $Pessoas->carregar($pesParams);
        $pesFields = $Pessoas->fieldsarr['Pessoas'];


        - Código modernizado:

        $pesFields = $Pessoas->carregar([
            'nmApelido' => 'zangado
        ]);


        Continua com a mesma quantidade de linhas, mas o código é mais legível e fácil de dar manutenção.
            



        - Código Antigo
        $pesParams['nmApelido'] = 'zangado';
        $Pessoas->listar($pesParams);
        $pessoasArr = $Pessoas->fieldsarr['Pessoas'];

        - Código modernizado
        $pessoasArr = $Pessoas->listar([
            'nmApelido' => 'zangado
        ]);

    */