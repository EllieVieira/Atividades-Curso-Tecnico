<?php
    require_once 'classe_cadastro.php';
    $p = new conexao( "fitdb", "localhost", "root", "" );
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <section id="left">
        <form action="controller/CadastrarClienteController.php" method="post">
            <h1>Cadastro de Produto</h1>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" autocomplete="off">
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.010">
            <label for="categ">Categoria:</label>
            <input type="text" name="categ" id="categ" autocomplete="off">
            <label for="forn">Fornecedor:</label>
            <input type="text" name="forn" id="forn" autocomplete="off">
            <input type="submit" value="Cadastrar">
        </form>
    </section>
    <section id="right">
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th>Fornecedor</th>
        </tr>
        <?php
            $dados = $p->buscarDados();
            if ( count( $dados ) > 0 ) {
                for ( $i = 0; $i < count( $dados ); $i++ ) {
                    echo "<tr>";
                    foreach ( $dados[$i] as $k => $v ) {
                        if ( $k != "id" ) {
                            echo "<td>" . $v . "</td>";
                        }
                    }
                    echo "</tr>";
                }
            } else {
            ?>
    </table>
        <div class="aviso">
            <h4>Ainda não há produtos cadastrados</h4>
        </div>
        <?php
            }
        ?>
    </section>
</body>
</html>