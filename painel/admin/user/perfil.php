<?php include_once("sistema/restrito_all.php")?>
<?php include_once("sistema/validar_user.php")?>
<?php include_once("header.php")?>
    
    
   
    <div id="local">
   <div class="caminho">Onde Estou: trancoso Imóveis &raquo; Painel de Controle &raquo; Admin de perfil
   </div><!--caminho-->
   <div class="welcome">Olá <?php echo $clienteNome; ?>, bem vindo!! <?php echo date('d/m/Y H:i').'h'; ?> | <a href="deslogar.php">Deslogar</a></div>
</div>
    
    
         
    
    <div id="content">
    
      <?php include_once("menu.php")?>
    

	   <div id="content_conteudo">
       
          
<?php include_once("sistema/carregando.php");?>


<?php if(isset($_POST['executar'])){
$sendNome = strip_tags(trim($_POST['sendNome']));

$sendSenha = strip_tags(trim($_POST['sendSenha']));
if($sendSenha == ''){
	$sendSenha = $clienteSenha;
}else{
	$sendSenha = strip_tags(trim($_POST['sendSenha']));
}


$sql_atualizaPefil = 'UPDATE trancoso_clientes SET nome = :clienteNome, senha = :clienteSenha, telefone = :clienteTelefone
                      WHERE clienteId = :clienteId';
					  
	try{
		$query_atualizaPerfil = $conecta->prepare($sql_atualizaPefil);
		$query_atualizaPerfil->bindValue(':clienteNome',$sendNome,PDO::PARAM_STR);
		$query_atualizaPerfil->bindValue(':clienteSenha',$sendSenha,PDO::PARAM_STR);
		$query_atualizaPerfil->bindValue(':clienteId',$clienteId,PDO::PARAM_STR);
		$query_atualizaPerfil->execute();
		
		echo '<div class="ok">Perfil atualizado com sucesso!</div>';
		echo '<meta http-equiv="refresh" content="1, URL=painel.php?exe=user/perfil" />';
		
		}catch(PDOexception $error_atualizaPerfil){
			echo 'Erro ao atualizar perfil';
			}
}

?> 
 
   
      <h1>Aqui você pode atualizar suas informações</h1>
      
      
      <form name="perfil" action="" enctype="multipart/form-data" method="post">
         <label>
           <span>Seu Nome:</span>
           <input type="text" name="sendNome" size="50" value="<?php echo $clienteNome;?>" />
         </label>
                
         <label>
           <span>Senha:</span>
         <input type="password" name="sendSenha" />
         </label>
                  
         <input type="submit" name="executar" id="executar" value="Atualizar Dados" />
      
      
      
      </form>
      
            
   		</div>

	</div>
    
        <?php include_once("footer.php")?>