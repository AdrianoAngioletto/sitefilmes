<?php



// Conteúdo a ser adicionado ao arquivo
$conteudo = "Este é um exemplo de conteúdo." . "\n" . "Esta é outra linha";
echo nl2br($conteudo);


// // Nome do arquivo
// $nomeArquivo = "exemplo.txt";

// // Abre o arquivo para escrita
// $arquivo = fopen($nomeArquivo, "a");

// // Verifica se o arquivo foi aberto corretamente
// if ($arquivo) {
//     // Escreve o conteúdo no arquivo
//     fwrite($arquivo, $conteudo);

//     // Fecha o arquivo
//     fclose($arquivo);

//     echo "O conteúdo foi adicionado ao arquivo com sucesso.";
// } else {
//     echo "Não foi possível abrir o arquivo.";
// }

