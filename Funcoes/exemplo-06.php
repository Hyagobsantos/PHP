<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordidado' => array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinado' => array(
                    //Inicio Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //Fim Gerente de Vendas
                )
            ),
            //Fim: Diretor Comercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinado' => array(
                    //Inicio Gerente de Contas a Pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinado' => array(
                            //Inicio: Supervidor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            //Fim: Supervidor de Pagamentos
                        )
                    ),
                    //Fim Gerente de Contas a Pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            )
                            //Fim: Supervidor de Suprimentos
                        )
                    )
                    //Termino: Gerente de Compras
                )
            )
            //Fim: Diretor Financeiro
        )

    )
);
