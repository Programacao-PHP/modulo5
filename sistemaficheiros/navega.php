<!--
    Funções:
    dir(nomeficheiro) - verifica se o nome do ficheiro corresponde a um diretório
    is_file(nomeficheiro) - verifica se nomeficheiro é um ficheiro
    is_link(nomeficheiro) - verifica se nomeficheiro correspo de a um link simbólico
    is_executable(nomeficheiro) - verifica se nomeficheiro é um ficheiro executável
    is_readable(nomeficheiro) - verifica se é um ficheiro legível
    is_upload(nomeficheiro) - verifica se o ficheiro é uploaded via HTTP POST

    file_exists(nomeficheiro) - verifica se o ficheiro existe ou não.
    filesize(nomeficheiro) - determina o tamanho do ficheiro.
    fileowner(nomeficheiro) - identifica o dono do ficheiro.

    filetype(nomeficheiro) - identifica o tipo do ficheiro.
    Tipos de ficheiros: FIFO, CHAR, DIR, BLOCK, LINK, FILE, UNKNOW

    Posicionamento no ficheiro
    ewind(ponteiro) - coloca o ponteiro no início do ficheiro
    fseek(ponteiro, posição) - coloca o ponteiro na posição indicada
    ftell(ponteiro) - indica a posição atual do ponteiro
    feof(ponteiro) - indica se o ponteiro está no fim do ficheiro.
-->
<?php

    if($ponteiro = fopen("texto.txt", "r"))
    {
        while(!feof($ponteiro))
        {
            echo fgetc($ponteiro);
        }
    }
    else {
        echo "Erro na abertura do ficheiro";
    }
    fclose($ponteiro);
?>
