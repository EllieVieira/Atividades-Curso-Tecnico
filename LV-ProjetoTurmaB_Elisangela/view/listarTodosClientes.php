<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <link rel="stylesheet" href="../lib/icons/css/all.css">
    <link rel="stylesheet" href="../lib/icons/js/all.js">
    <link rel="stylesheet" href="../view/style.css">
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00")
            $("#dataNascimento").mask("dd/mm/Y")
            $("#telefone").mask("(00) 0000-00009")
            $("#telefone").blur(function(event) {
                if ($(this).val().length == 15) {
                    $("#telefone").mask("(00) 00000-0009")
                } else {
                    $("#telefone").mask("(00) 0000-00009")
                }
            })
        })
    </script>
</head>

<body>
    <section id="left">
        <form action="../controller/cadastrarClienteController.php" method="post">
            <h1>Cadastro de Produto</h1>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" autocomplete="off" required>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" required>
            <label for="datanascimento">Data de Nascimento:</label>
            <input type="date" name="datanascimento" id="datanascimento" required>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" autocomplete="off" required>
            <input type="submit" value="Cadastrar">
        </form>
    </section>

    <section id="right">
        <table>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Telefone</th>
                <th>Excluir</th>
                <th>Editar</th>
            </tr>

            <?php
                require_once '../dao/ClienteDAO.php';
                $clienteDAO = new ClienteDAO();
                $clientes   = $clienteDAO->findAll();
                foreach ( $clientes as $cliente ) {
                    $novaData = date( 'd/m/Y', strtotime( $cliente["datanascimento"] ) );
                    echo "<tr><td>$cliente[nome]</td>";
                    echo "<td id='cpf'>$cliente[cpf]</td>";
                    echo "<td id='datanascimento'>$novaData</td>";
                    echo "<td id='telefone'>$cliente[telefone]</td>";
                    echo "<td><i class='fa-solid fa-trash-can'></i></td>";
                    echo "<td><i class='fa-solid fa-pen-to-square'></i></td></tr>";
                }
            ?>
        </table>
    </section>
</body>

</html>