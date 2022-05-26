<html lang="PT-BR">
<form method="post">
    <table>
        <tr>
            <td><input type="submit" value="cadastrar" name="tela"></td>
            <td><input type="submit" value="alterar" name="tela"></td>
            <td><input type="submit" value="excluir" name="tela"></td>
            <td><input type="submit" value="visualizar" name="tela"></td>
        </tr>
    </table>

    <hr/>
</form>
</html>

<?php
if (isset($_POST['tela'])) {
    $_SESSION['tela'] = $_POST['tela'];
    if ($_SESSION['tela'] == 'cadastrar') {
        include 'cadastro_cliente.php';
    }
    if ($_SESSION['tela'] == 'alterar') {
        include 'alterar_cliente.php';
    }
    if ($_SESSION['tela'] == 'excluir') {
        include 'excluir_cliente.php';
    }

    if ($_SESSION['tela'] == 'visualizar') {
        include 'visualiza_cliente.php';
    }
}




?>