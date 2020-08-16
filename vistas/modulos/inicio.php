<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Tablero
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Tablero</li>
    
    </ol>

  </section>

  <section class="content">
    <!-- Info boxes -->
    <div class="row">

      <?php

    if($_SESSION["perfil"] =="Administrador"){

      include "inicio/tablero.php";

    }

    ?>
      
    <div class="row">
      

      <div class="col-lg-12">
         
        <?php

        if($_SESSION["perfil"] =="Especial" || $_SESSION["perfil"] =="Vendedor"){

         
         echo '<div class="box box-success">

         <div class="box-header">

         <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>
         
         </div>'; 

         include "inicio/especial.php";       

          
        }

        ?>

      </div>

    </div>

  </section>
 
</div>
