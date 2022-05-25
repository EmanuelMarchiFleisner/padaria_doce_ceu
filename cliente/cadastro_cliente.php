<?php

if (isset($_POST['gravar'])) {
    $arquivo = fopen("texto.txt", "a+");
    fwrite($arquivo, $_POST['texto']."\n");
    fclose($arquivo);
}

?>


<form method="post">

    <input type="text" name="texto" placeholder="texto"/>
    <input type="submit" value="gravar" name="gravar">

</form>