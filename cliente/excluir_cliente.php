<?php

if (isset($_POST['gravar'])) {
    $textoArquivo = file("texto.txt");
    $arquivo = fopen("texto.txt", "w");
    foreach($textoArquivo as $linha) {
        if (!strstr($linha, $_POST['texto']))
            fputs($arquivo, $linha);
    }
    fclose($arquivo);
}

?>

<form method="post">

    <input type="text" name="texto" placeholder="texto"/>
    <input type="submit" value="gravar" name="gravar">

</form>