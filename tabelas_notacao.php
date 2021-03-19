<?php  

    /*
        A notação de tabelas segue também dois padrões: Antigo e Modernizado


        Para o padrão antigo, utiliza-se prefixos para definir, como:
        -   nm => nome (Varchar)
        -   ds => Descrição (Varchar)
        -   nr => Número (INT)
        -   id => identificador (INT/BIGINT)
        -   vr => valor (Decimal 65,5)
        -   dt => data (TIMESTAMP)
        -   qtd => quantidade (Decimal 65,5)
        -   is => É (Não/Sim)
        -   has => possui (Não/Sim)
        

        Para a tabela de pessoas:
        - nmPessoa => Nome da Pessoa
        - idPessoa => Código da pessoa/Identificador da pessoa
        - vrSalario => Valor do salário
        - dtCriacao => Data de criação,
        - nrCpf => Número do CPF
        - nrCnpj => Número do CNPJ
        - hasCasaPropria => Possui casa propria




        Na notação nova, utliza-se também um pouco da notação antiga, mas o nome do campo agora precisa ter o nome da tabela.
        Nome da tabela: Produtos_Embalagens
        - Produtos_Embalagens_id => Identificador da Embalagem do Produto
        - Produtos_Embalagens_descricao => Nome da embalagem do produto
        - Produtos_Embalagens_qtdProduto => Quantidade de Produto na embalagem do produto




    */