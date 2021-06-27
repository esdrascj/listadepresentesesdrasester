<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$aspiradordepo = $_POST['aspiradordepo'];
$aparelhojantar1 = $_POST['aparelhojantar1'];
$bandejainox = $_POST['bandejainox'];
$batedeira = $_POST['batedeira'];
$conjpanelas1 = $_POST['conjpanelas1'];
$geladeira = $_POST['geladeira'];
$faqueiro1 = $_POST['faqueiro1'];
$faqueiro2 = $_POST['faqueiro2'];
$ferrodepassar = $_POST['ferrodepassar'];
$fogao = $_POST['fogao'];
$airfryier = $_POST['airfryier'];
$jogodefacas = $_POST['jogodefacas'];
$sanduicheira = $_POST['sanduicheira'];
$ventilador = $_POST['ventilador'];
$microondas = $_POST['microondas'];
$mixer = $_POST['mixer'];
$maquinadelavar = $_POST['maquinadelavar'];
$panelapressao1 = $_POST['panelapressao1'];
$tabuadepassarroupa = $_POST['tabuadepassarroupa'];
$varaldechao = $_POST['varaldechao'];
$escada = $_POST['escada'];
$toalhadebanho1 = $_POST['toalhadebanho1'];
$tapetesala = $_POST['tapetesala'];
$jogodecama = $_POST['jogodecama'];
$edredom = $_POST['edredom'];
$conjpanelas2 = $_POST['conjpanelas2'];
$toalhadebanho2 = $_POST['toalhadebanho2'];
$assadeiras1 = $_POST['assadeiras1'];
$assadeiras2 = $_POST['assadeiras2'];
$escorredor = $_POST['escorredor'];
$jarra1 = $_POST['jarra1'];
$jarra2 = $_POST['jarra2'];
$kitbanheiro = $_POST['kitbanheiro'];
$conjtoalharosto1 = $_POST['conjtoalharosto1'];
$kittapetes = $_POST['kittapetes'];
$toalhadebanho3 = $_POST['toalhadebanho3'];
$lixeira1 = $_POST['lixeira1'];
$mop = $_POST['mop'];
$conjtoalharosto2 = $_POST['conjtoalharosto2'];
$cestoderoupa = $_POST['cestoderoupa'];
$cortina = $_POST['cortina'];
$jogodecama2 = $_POST['jogodecama2'];
$travesseiros = $_POST['travesseiros'];
$guardaroupa = $_POST['guardaroupa'];
$cabeceira = $_POST['cabeceira'];
$kitleito = $_POST['kitleito'];
$persiana = $_POST['persiana'];
$varaldeteto = $_POST['varaldeteto'];
$baldes = $_POST['baldes'];
$cestodelixo = $_POST['cestodelixo'];
$assadeiras3 = $_POST['assadeiras3'];
$conjpotesvidro = $_POST['conjpotesvidro'];
$frigideiras = $_POST['frigideiras'];
$tupperware = $_POST['tupperware'];
$panelapressao2 = $_POST['panelapressao2'];
$colcha = $_POST['colcha'];
$mesadecentro = $_POST['mesadecentro'];
$puff = $_POST['puff'];
$televisao = $_POST['televisao'];
$conjtoalharosto3 = $_POST['conjtoalharosto3'];
$edredom2 = $_POST['edredom2'];
$quadro = $_POST['quadro'];
$pote1 = $_POST['pote1'];
$conjfacas = $_POST['conjfacas'];
$mensagem = $_POST['mensagem'];

$sql = 'insert into lista (nome,aspiradordepo,aparelhojantar1,bandejainox,batedeira,conjpanelas1,geladeira,faqueiro1,faqueiro2,ferrodepassar,fogao,airfryier,jogodefacas,sanduicheira,ventilador,microondas,mixer,maquinadelavar,panelapressao1,tabuadepassarroupa,varaldechao,escada,toalhadebanho1,tapetesala,jogodecama,edredom,conjpanelas2,toalhadebanho2,assadeiras1,assadeiras2,escorredor,jarra1,jarra2,kitbanheiro,conjtoalharosto1,kittapetes,toalhadebanho3,lixeira1,mop,conjtoalharosto2,cestoderoupa,cortina,jogodecama2,travesseiros,guardaroupa,cabeceira,kitleito,persiana,varaldeteto,baldes,cestodelixo,assadeiras3,conjpotesvidro,frigideiras,tupperware,panelapressao2,colcha,mesadecentro,puff,televisao,conjtoalharosto3,edredom2,quadro,pote1,conjfacas,kitferramentas,tacas,conjsobremesa,torneira,luminaria,toalhamesa,sofa,abajur,mensagem) 
		values ("'.$nome.'","'.$aspiradordepo.'","'.$aparelhojantar1.'","'.$bandejainox.'","'.$batedeira.'","'.$conjpanelas1.'","'.$geladeira.'","'.$faqueiro1.'","'.$faqueiro2.'","'.$ferrodepassar.'","'.$fogao.'","'.$airfryier.'","'.$jogodefacas.'","'.$sanduicheira.'","'.$ventilador.'","'.$microondas.'","'.$mixer.'","'.$maquinadelavar.'","'.$panelapressao1.'","'.$tabuadepassarroupa.'","'.$varaldechao.'","'.$escada.'","'.$toalhadebanho1.'","'.$tapetesala.'","'.$jogodecama.'","'.$edredom.'","'.$conjpanelas2.'","'.$toalhadebanho2.'","'.$assadeiras1.'","'.$assadeiras2.'","'.$escorredor.'","'.$jarra1.'","'.$jarra2.'","'.$kitbanheiro.'","'.$conjtoalharosto1.'","'.$kittapetes.'","'.$toalhadebanho3.'","'.$lixeira1.'","'.$mop.'","'.$conjtoalharosto2.'","'.$cestoderoupa.'","'.$cortina.'","'.$jogodecama2.'","'.$travesseiros.'","'.$guardaroupa.'","'.$cabeceira.'","'.$kitleito.'","'.$persiana.'","'.$varaldeteto.'","'.$baldes.'","'.$cestodelixo.'","'.$assadeiras3.'","'.$conjpotesvidro.'","'.$frigideiras.'","'.$tupperware.'","'.$panelapressao2.'","'.$colcha.'","'.$mesadecentro.'","'.$puff.'","'.$televisao.'","'.$conjtoalharosto3.'","'.$edredom2.'","'.$quadro.'","'.$pote1.'","'.$conjfacas.'","'.$kitferramentas.'","'.$tacas.'","'.$conjsobremesa.'","'.$torneira.'","'.$luminaria.'","'.$toalhamesa.'","'.$sofa.'","'.$abajur.'","'.$mensagem.'")';                                                         
$salvar = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));

if($salvar)
	echo "<script>alert('presente escolhido com sucesso!'); window.location = 'index.php';</script>";
else
	echo "<h1>Falha ao salvar</h1>";

mysqli_close($conexao);
?>
