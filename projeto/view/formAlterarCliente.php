<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<?php
require_once '../dao/ClienteDAO.php';
$idCliente = $_GET["id"];
$clienteDAO = new ClienteDAO();
$cliente = $clienteDAO->findById( $idCliente );
?>
    <fieldset>
        <legend>Alterar cliente</legend>
        <form action="../controller/alterarClienteController.php" method="post">
            <input type="hidden" name="idCliente" value="<?php echo $cliente["id"] ?>">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" value="<?php echo $cliente["nome"] ?>"></td>
                </tr>
                <tr>
                <td>E-mail:</td>
                    <td><input type="email" name="email" id="email" value="<?php echo $cliente["email"] ?>"></td>
                </tr>
                    <td>Cpf:</td>
                    <td><input type="text" name="cpf" id="cpf" value="<?php echo $cliente["cpf"] ?>"></td>
                </tr>
                <!-- <tr>
                    <td>Data de nascimento:</td>
                    <td><input type="date" name="dtnasc" value="<?php echo $cliente["datanascimento"] ?>"></td>
                </tr> -->
                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="tel" id=tel value="<?php echo $cliente["telefone"] ?>"></td>
                </tr>
                <td>Senha:</td>
                    <td><input type="password" name="password" id="password" value="<?php echo $cliente["password"] ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Alterar">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>