<!--
    fopen() - abre o ficheiro para
    r       leitura , aponta para o início do ficheiro
    r+      leitura e escrita, aponta para o início do ficheiro
    w       escrita, aponta para o início do ficheiro (cria o ficheiro se este não existir)
    w+      leitura e escrita, aponta para o início do ficheiro (cria o ficheiro se este não existir)
    a       escrita, aponta para o fim do ficheiro (cria o ficheiro se este não existir)
    a+      leitura e escrita, aponta para o fim do ficheiro (cria o ficheiro se este não existir)

    Se abrir o ficheiro então deve fechá-lo, a função a utilizar é fclose()

    Funções que manipulam o conteúdo
    fputs(ponteiro, conteudo)
    fwrite(ponteiro, conteudo)
    fgets(ponteiro, num caracteres)
    fgetc(ponteiro)
    fread(ponteiro, num caracteres)
-->

<?php
    $filename = "texto.txt";
    $mode = "r";
    if($ponteiro = fopen($filename, $mode))
    {
        // Lê 35 caracteres a prtir do início do ficheiro
        $texto = fread($ponteiro, 35);
        echo $texto;
        fclose($ponteiro);
    }
    else { echo "Erro na abertura do ficheiro"; }

    // elimina o ficheio fisicamente
    // unlink("texto.txt");


 ?>
