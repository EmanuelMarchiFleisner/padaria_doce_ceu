<?php

$conn = new PDO(
    'mysql:host=localhost;dbname=padaria_doce_ceu',
    'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare(
    'SELECT *
           FROM cliente ');

$stmt->execute();
$resultado = $stmt->fetchAll();
foreach($resultado as $linha)
    print_r($linha);

?>


<form method="post">

    <input type="text" name="texto" placeholder="texto"/>
    <input type="submit" value="gravar" name="gravar">

</form>