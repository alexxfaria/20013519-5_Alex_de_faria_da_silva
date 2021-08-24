<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoceMania</title>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./css/geral.css">

    
    <?php
        include('./dados/dados.php');
    ?>
</head>
<body>
   <nav id="header" class="navbar navbar-fixed-top">
        <div id="header-container" class="container navbar-container">
            <div class="navbar-header">
                <a id="brand" class="navbar-brand" href="./index.php">DoceMania</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="./index.php">Inicio</a></li>
                    <li><a href="index.php?pagina=./pages/about.php">Quem somos?</a></li>
                    <li><a href="index.php?pagina=./pages/contato.php">Contato</a></li>
                    <li><a href="index.php?pagina=./pages/localiza.php">Localizacao</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container-fluid">
        <?php
            if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
                $pagina = $_GET["pagina"];
                include($pagina);
            } else { 
                
            foreach($produto as $key => $value) {
        ?>
                    
                    <div class="col-sm-2 col-md-3">
                        <div class="thumbnail">
                        <img style="max-width: 200px" src="<?= $value["imgSrc"] ?>" alt="<?= $key ?>">
                        <div class="caption text-center">
                            <h3><?= $value["descricao"] ?></h3>
                            <p> Valor: R$<?= $value["preco"] ?> </p>
                            <p>
                                <a href="index.php?pagina=./pages/produto.php&prod=<?=$key?>" class="btn btn-success" role="button">DETALHES</a> 
                            </p>
                        </div>
                        </div>
                    </div>
            <?php
                }  
                    } 
            ?>
    </main>

     <div class="row"></div>               
    <hr>

    <footer>
        <p>by Alex de Faria da Silva | 2021</p>
    </footer> 

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="./js/navbar.js"></script>
</body>
</html>