<?php

$nome = '';
$sigla = '';
$simbolo = '';
$regiao = '';
$preco = '';
$datahora = '';
$variacao = '';
$descricao = '';
$abertura = '';
$fechamento = '';
$minima = '';
$maxima = '';
$erro = '';
$digitarAcao = 'Ação';

if (isset($_POST['btnbuscar'])) {
    $simbolo = $_POST['simbolo'];
    if ($simbolo == "") {
        $digitarAcao = 'Digite o nome da ação desejada';
    } else {
        $simbolo = strtoupper($simbolo);
        $url = "https://api.hgbrasil.com/finance/stock_price?key=94ef7c0d&symbol={$simbolo}";

        $rawdata = file_get_contents($url);
        if ($rawdata != null) {
            $digitarAcao = 'Digite um nome válido';
            $jsondata = json_decode($rawdata);
            if ($jsondata != null && isset($jsondata->results)) {
                $digitarAcao = 'Digite um nome válido';
                $results = $jsondata->results;
                if ($results != null && isset($results->$simbolo)) {
                    $digitarAcao = 'Digite um nome válido';
                    $acaodesejada = $results->$simbolo;
                    if ($acaodesejada != null && isset($acaodesejada->name)) {
                        $digitarAcao = 'Ação';
                        $nome = $acaodesejada->name;
                        $sigla = $acaodesejada->symbol;
                        $regiao = $acaodesejada->region;
                        $preco = 'R$ ' . $acaodesejada->price;
                        $variacao = '' . $acaodesejada->change_percent . '%';
                        $descricao = $acaodesejada->description;
                        if (isset($acaodesejada->website)) {
                            $descricao = $descricao . ' ' . '<a href="' . $acaodesejada->website . '">' . $acaodesejada->website . '</a>';
                        }
                        if (isset($acaodesejada->market_time)) {
                            $abertura = $acaodesejada->market_time->open;
                            $fechamento = $acaodesejada->market_time->close;
                        }
                        $datahora = $acaodesejada->updated_at;
                    }
                }
            }
        }
    }
}
