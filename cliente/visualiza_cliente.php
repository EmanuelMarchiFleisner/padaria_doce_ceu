<?php

$arquivo = fopen("texto.txt", "r");
if (filesize("texto.txt") > 0) {
    echo fread($arquivo,    filesize("texto.txt"));



}
fclose($arquivo);