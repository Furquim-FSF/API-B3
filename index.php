<!DOCTYPE html>

<?php
include 'bolsavalores.php';
?>

<html>
    <head>
        <title> Bolsa de Valores </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/bootstrap.css">
    </head>
    <body>
        <div class="container mt-5" >
            <div class="card">
                <div class="card-header font-weight-bold">
                    Mercado de Ações - Informação sobre as Açoes da Bolsa de Valores, pesquise sobre suas ações preferidas.
                </div>
                <div class="card-body">
                    <form method="POST" action="index.php">
                        <div class="form-row" >
                            <div class="col">
                                Renda Variável
                                <input class="form-control" type="text" name="simbolo" placeholder="<?php echo $digitarAcao;?>">
                                
                            </div>
                            <div class="col mt-4 " >
                                <button class="btn btn-outline-primary" type="submit" name="btnbuscar">Buscar</button>
                            </div>
                        </div>
                        <div class="form-row">
                        </div>
                    
                    </form>
                
                <div class="row mt-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Nome
                            </div>
                            <div class="card-body ">
                                <h1 class="text-center"></h1>
                                <?php
                                    echo $nome;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Simbolo
                            </div>
                            <div class="card-body ">
                                <h1 class="text-center"></h1>
                                <?php
                                    echo $sigla;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Região
                            </div>
                            <div class="card-body ">
                                <h1 class="text-center"></h1>
                                <?php
                                    echo $regiao;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Preço
                            </div>
                            <div class="card-body ">
                                <h1 class="text-center"></h1>
                                <?php
                                    echo $preco;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Descrição
                            </div>
                            <div class="card-body ">
                                <h1 class="text-center"></h1>
                                <?php
                                    echo $descricao;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Variação
                            </div>
                            <div class="card-body ">
                                <h1 class="text-center"></h1>
                                <?php
                                    echo $variacao;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Hora de Abertura
                            </div>
                            <div class="card-body ">
                                <h1 class="text-center"></h1>
                                <?php
                                    echo $abertura;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Hora de Fechamento
                            </div>
                            <div class="card-body ">
                                <h1 class="text-center"></h1>
                                <?php
                                    echo $fechamento;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                Ultima Atualização
                            </div>
                            <div class="card-body ">
                                <h1 class="text-center"></h1>
                                <?php
                                    echo $datahora;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

