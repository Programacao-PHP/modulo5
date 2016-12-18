<?php
    // Fazer refresh do browser para atualizar o contador.
    $filename = "contador.txt";
    if(file_exists($filename))
    {
        $pont1 = fopen($filename, "r");
        $conta_a = fgets($pont1, 10);
        $conta_a++;
        echo "Nº de acesso: " . $conta_a;
        fclose($pont1);

        // apaga o conteúdo do ficheiro e grava depois informação.
        $pont2 = fopen($filename, "w");
        fputs($pont2, $conta_a);    // podemos gravar vários valores fputs($pont2, $val1, $val2, $val3, ...);
        fclose($pont2);
    }
    else {fputs($pont2, $val1, $val2, $val3, ...);
        // O ficheiro não existe. então cria um ficheiro e inícia o ficheiro com o valor 1
        $pont = fopen($filename, "w");
        fputs($pont, "1");
        fclose($pont);
    }
 ?>
