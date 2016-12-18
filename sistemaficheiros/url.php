<?php
    /*
        mostra o conteúdo de um site sem imagens ou vídeos.
        Pode servir para verificar se o site existe.
    */
    $informa = "";
    $p = fopen("http://www.esenviseu.net", "r");
    fpassthru($p);
    /*
    while(!feof($p))
    {
        $informa .= fgets($p, 1024);
    }

    echo $informa; */
    fclose($p);
 ?>
