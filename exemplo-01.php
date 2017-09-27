<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);

if (!is_dir($dir2))	mkdir($dir2);

$filename = "README.txt";

if(!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)){

	$file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");

	fwrite($file, date("d/m/Y H:i:s"));

	fclose($file);
}

rename($dir1.DIRECTORY_SEPARATOR.$filename, $dir2.DIRECTORY_SEPARATOR.$filename); //voce pode renomear o arquivo ou renomear o arquivo (mover o arquivo).. nesse exemplo ele move esse arquivo para a pasta folder_02 rename(diretorio\arq atual, diretorio/arq destino) 

echo "Arquivo movido com sucesso!";

?>