<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
        require_once "class/carro.class.php";
        require_once "class/tabela.class.php";

        if (isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];
        } else {
            $pagina = 1;
        }

        $carro1 = new Carro('Fiat', 'Argo');
        $carro2 = new Carro('Fiat', 'Marea');
        $carro3 = new Carro('Fiat', 'Toro');
        $carro4 = new Carro('Ford', 'F1000');
        $carro5 = new Carro('Ford', 'Mustang');
        $carros = Array($carro1, $carro2, $carro3, $carro4, $carro5);
        $linhas = count($carros);
        

        $tabela = new Tabela($carros, $pagina);
        echo $tabela;

     

    ?>
    <div class="paginacao">
        <?php 
            $qtdLinhas = 2;
            for($i = 1;$i <= ceil($linhas/$qtdLinhas); $i++) {
                echo '<a href="?&pagina=' .$i.'   " >' . $i . '</a>';
                echo ' ';
            }
        ?>
    </div>
</body>
</html>

