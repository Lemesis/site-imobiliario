
<?php 
      if($clienteNivel == 'admin'){ ?>
		  
		  <div id="content_menu">
         <ul>
           <li><a href="painel.php?exe=home/home">&raquo; Inicio</a></li>
           <li class="titulo">Área de Anúncios:</li>
           <li><a href="painel.php?exe=imoveis-cadastro/cadastro">&raquo; Criar anúncio</a></li>
           <li><a href="painel.php?exe=imoveis-nav/ativos">&raquo; Anúncios ativos</a></li>
           <li><a href="painel.php?exe=admin-imoveis/ativos">&raquo; Edição de Ativos</a></li>
           <li><a href="painel.php?exe=imoveis-nav/pendentes">&raquo; Anúncios pendentes</a></li>
           <li><a href="painel.php?exe=imoveis-nav/finalizados">&raquo; Anúncios finalizados</a></li>
         </ul>
      </div>
	  
	  
		  
		<?php  
	  }elseif($clienteNivel == 'cliente'){?>
		  
		  <div id="content_menu">
         <ul>
           <li><a href="painel.php?exe=home/home">&raquo; Inicio</a></li>
           <li class="titulo">Anunciantes:</li>
           <li><a href="painel.php?exe=admin-imoveis/pendentes">&raquo; Anúncios pendentes</a></li>
           <li><a href="painel.php?exe=admin-imoveis/ativos">&raquo; Edição de Ativos</a></li>
           <li><a href="painel.php?exe=admin-imoveis/finalizados">&raquo; Listar Finalizados</a></li>
           <li><a href="painel.php?exe=clientes/clientes">&raquo; Edição de Clientes</a></li>
           <li><a href="painel.php?exe=admin/perfil">&raquo; Alterar dados</a></li>
         </ul>
      </div>
		
		
        
        
		<?php   }else{
		  include_once("deslogar.php"); 
	  }
?>

