<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinado' => array(
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
                        'subordinado' => array(
                            //Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinado' => array(
                                    array(
                                        'nome_cargo' => 'Comprador'
                                    )
                                )
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


function exibe($cargos)
{
    $html = '<ul>';
    foreach ($cargos as $cargo) {
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinado']) && count($cargo['subordinado']) > 0) {
            $html .= exibe($cargo['subordinado']);
        }
        $html .= "</li>";
    }
    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);
