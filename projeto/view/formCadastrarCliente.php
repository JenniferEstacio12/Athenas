<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script src="../js/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
</head>

<body>
    <fieldset>
        <legend>Cadastro de cliente</legend>
        <form id="formCadastroCliente" action="../controller/cadastrarClienteController.php" method="post">
            <table>
                <tr>
                    <td><label for="nome">Nome:</label></td>
                    <td><input type="text" name="nome"></td>
                </tr>
                <tr>
                    <td><label for="cpf">Cpf:</label></td>
                    <td><input type="text" name="cpf" id="cpf" ></td>
                </tr>
                <!-- <tr>
                    <td><label for="dtnasc">Data de nascimento:</label></td>
                    <td><input type="date" name="dtnasc" id="dtnasc"></td>
                </tr> -->
                <tr>
                    <td><label for="tel">Telefone:</label></td>
                    <td><input type="text" name="tel" id=tel></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Cadastrar">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <div style="text-align: center;">
        <?php
            if ( isset( $_GET["msg"] ) ) {
                echo $_GET["msg"];
            }
        ?>
    </div>
    <script>
        $(document).ready(function(){
            $('#cpf').mask('000.000.000-00');
            $('#tel').mask('(00) 00000-0000');
        });
    </script>
    <script>
        $( "#formCadastroCliente" ).validate({
            rules: {
                nome: {
                    required: true,
                },
                cpf: {
                    required: true,
                    minlength: 11
                }
            },
            messages: {
                cpf: {
                    required: "Campo obrigatório",
                    minlength: jQuery.validator.format("At least {0} characters required!"),
                },
                nome: {
                    required: "Campo obrigatório",
                }

            }
        });
    </script>
</body>

</html>