<?php include_once("sistema/restrito_all.php");?>
<?php include_once("sistema/validar_user.php");?>
<?php include_once("header.php");?>
<div id="local">
   <div class="caminho">Onde Estou: UpImóveis &raquo; Painel de Controle & Cadastrar Imóvel</div><!--caminho-->
   <div class="welcome">Olá <?php echo $clienteNome;?>| Hoje <?php echo date('d/m/Y H:i').'h';?> | <a href="deslogar.php">Deslogar</a></div><!--welcome-->
</div><!--local-->
   
<div id="content">

<?php include_once("menu.php");?>     

   <div id="content_conteudo">
   
   <h2>O cadastro esta como <strong>PENDENTE</strong>. Entenda abaixo os próximos passos!</h2>

   <p><strong>&raquo; PENDENTE:</strong> o imóvel foi cadastrado e esta aguardando Conferencia. Ou seja, Você deve conferir as informações do anuncio!</p><p>
   Assim que conferido se estiver tudo certo seu status será alterado para <strong>ATIVO</strong>!</p>
 
     <p><strong>&raquo; ATIVO:</strong> O anuncio foi aprovado e agora está amostra no site. O anuncio será exibido no seu menu de Anúncios Ativos.</p><p>

      Você terá controle para renovar o anúncio e ou tirar do ar caso venda ou alugue seu imóvel!</p>

     <p><strong>Seu anúncio pode ser visto na página Anúncios pendentes!</strong></p>
      
   </div><!--conteudo-->

</div><!--contet-->
     
<?php include_once("footer.php");?>