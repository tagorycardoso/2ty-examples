<?php

    /*

        3. Laços de repetição

    */

    require '2.arrays.php';

    /*
        Um dos laços mais utilizados por nós na construção de dados é percorrer arrays utilizando o foreach
        WHILE e FOR quase nunca são utilizados.

        - Utilizar os dados anteriores para montar o exemplo
    */


    foreach ($array['Pessoas'] as $pessoa) {
        ?>
        <tr>
            <td><?=$pessoa['nome']; ?></td>
            <td><?=$pessoa['apelido']; ?></td>
        </tr>
        <?

    }