<?php
    include("./dados/dados.php");
    $prod = $_GET["prod"];
?>

<div class="row">
    <div class="text-center col-sm-6">
        <img style="max-width: 400px" src="<?= $produto[$prod]["imgSrc"] ?>" alt="<?= $produto[$prod]["descricao"] ?>">
    </div>
</div>
<div class="row">
    <div class="text-center col-sm-6">
        <h3><?= $produto[$prod]["descricao"]?> </h3>
        <p> Detalhes: <?= $produto[$prod]["detalhes"]?> </p>
        <p> Ingredientes: <?= $produto[$prod]["ingredientes"] ?></p>
        <p> Valor: R$<?= $produto[$prod]["preco"] ?></p>

        <a href="index.php?pagina=./pages/produto.php&prod=<?=$key?>" class="btn btn-success" role="button">Comprar</a> 
    </div>
</div>