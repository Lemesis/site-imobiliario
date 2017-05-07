<?php

include"../Connections/config.php";

$usuarioSistema = $_SESSION['MM_Username'];
$sqlSistema_usuarioSistema = 'SELECT * FROM trancoso_corretores WHERE email = :usuarioSistema';

try{
	$querySistema_usuarioSistema = $conecta->prepare($sqlSistema_usuarioSistema);
	$querySistema_usuarioSistema->bindValue(':usuarioSistema',$usuarioSistema,PDO::PARAM_STR);
	$querySistema_usuarioSistema->execute();
	
	$resultado_querySistema = $querySistema_usuarioSistema->fetchAll(PDO::FETCH_ASSOC);
	
	}catch(PDOexception $error_usuarioSistema){
		echo 'erro ao selecionar o usuario';
		echo '<meta http-equiv="refresh" content="2, deslogar.php" />';
		}
		
    foreach($resultado_querySistema as $res_usuarioSistema);
	  $clienteId = $res_usuarioSistema['CorretorID'];
	  $clienteCriado = $res_usuarioSistema['criado em'];
	  $clienteModificado = $res_usuarioSistema['modificado em'];
	  $clienteStatus = $res_usuarioSistema['clientestatus'];
	  $clienteNivel = $res_usuarioSistema['usuarioNivel'];
	  $clienteNome = $res_usuarioSistema['Nome'];
	  $clienteEmail = $res_usuarioSistema['email'];
	  $clienteSenha = $res_usuarioSistema['senha'];

?>