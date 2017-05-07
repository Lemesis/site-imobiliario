<?php include_once("sistema/restrito_all.php")?>
<?php include_once("sistema/validar_user.php")?>
<?php include_once("header.php")?>
    
    
   
    <div id="local">
   <div class="caminho">Onde Estou: Trancoso Imóveis &raquo; Painel de Controle &raquo; Admin de perfil
   </div><!--caminho-->
   <div class="welcome">Olá <?php echo $clienteNome; ?>, bem vindo!! <?php echo date('d/m/Y H:i').'h'; ?> | <a href="deslogar.php">Deslogar</a></div>
</div>
    
    
         
    
    <div id="content">
    
      <?php include_once("menu.php")?>
    

	   <div id="content_conteudo">
   
<?php include_once("sistema/carregando.php");?>
            
   		</div>

	</div>
    
        <?php include_once("footer.php")?>