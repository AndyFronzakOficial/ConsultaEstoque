<!DOCTYPE html>
<html>
<head>
    <title>Busca de Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    *{
        margin-top: 10px;
    }
    body{
        background: #252525;
        color: #fff;
        padding:2vw 10vw;
    }
.container{
    display: flex;
    justify-content: center;
}
.logo{
    width: 20vw;
}
th, td{
    color: #fff;
}

</style>
<body>
<div class="imagem-logo">

    <div class="container">
    <img class="logo" src="./código.png" alt="" srcset="">

    </div>
    <h1  style="text-align: center;">Busca de Produtos em Estoque</h1>
        <input type="text" id="search" class="form-control" placeholder="Digite para buscar">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Valor Revenda</th>
                    <th>Valor Venda</th>
                </tr>
            </thead>
            <tbody id="result">
                <?php
                    $file = fopen('produtos.csv', 'r');
                    while (($line = fgetcsv($file)) !== false) {
                        echo '<tr>';
                        echo '<td>' . $line[0] . '</td>';
                        echo '<td>' . $line[1] . '</td>';
                        echo '<td>' . $line[2] . '</td>';
                        echo '<td>' . $line[3] . '</td>';
                        echo '</tr>';
                    }
                    fclose($file);
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
