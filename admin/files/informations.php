<?php
ini_set("display_errors", 0);
error_reporting(0);
$file_parameters="files/parameters.txt";
$fopen_parameters=fopen($file_parameters,"r");
$explode=fread($fopen_parameters, filesize($file_parameters));
$parameters=explode("|", $explode);
$diretorio="informations"; 
$pasta_raiz=opendir($diretorio);
	while($name_itens=readdir($pasta_raiz)){
		$itens[]=$name_itens;
	}
	sort($itens);
	foreach($itens as $listagem){
		if($listagem!="." && $listagem!=".."){ 
			if(is_dir($listagem)){ 
				$pastas[]=$listagem; 
			}
			else{ 
				$files[]=$listagem;
			}
		}
	}
	if($files != ""){
		foreach($files as $listagem){
			$informacao=explode(".", $listagem);
			print"$informacao[0] <a href=$parameters[0]informations/".$listagem."$parameters[0] target=$parameters[0]_blank$parameters[0]>[ABRIR]</a>\n<br>\n";
		}
	}
?>