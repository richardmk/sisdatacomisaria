<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

require 'header.php';


?>
   
           <section class="content">
          <div class="card-body">   
            <div class="x_title">
                    <h2>Actualizacion de Contraseña</h2>
                  
                    <div class="clearfix"></div>
                  </div>
      <!-- Content Wrapper. Contains page content -->
   <div class="col-md-12"><br>
                 
                    
                    <!-- /.box-header -->
                    <!-- centro -->

                 
                   
                    <div class="panel-body" id="formularioregistros"  autocomplete="off">
                      
                          <form name="formulario" id="formulario" method="POST"  class="form-horizontal form-label-left" autocomplete="off">
                            <div class="row">
                              

                                 
                                    <div class="col-md-3">
                                      <div class="form-group">
                                            <label class="">Usuario:<span class="required">*</span>
                                    </label>
                                   
                                    
                                     <input  class="form-control" type="text" name="login" id="login" readonly="readonly" value="<?php echo $_SESSION['login']; ?>" >
                                      </div>
                                   
                                    </div>
                               

                                                             
                                   <div class="col-md-3">
                                     <div class="form-group">
                                        <label class="">Nueva Contraseña:<span class="required"> </span>
                                      </label> 
                                         <input  class="form-control "  type="password" name="newclave" id="newclave" autocomplete="off">
                                    </div>

                                

                                 
                                  </div>

                               
                                 
                               
                                      <div class=" col-md-3 ">
                                            
                                                <br>
                                              <button class="btn btn-dark" style="cursor: pointer;" onclick="validar();" type="submit" id="btnGuardar" ><i class="zmdi zmdi-collection-plus"></i> Guardar</button>

                                             <button class="btn btn-dark" style="cursor: pointer;" type="button"><i class="zmdi zmdi-close "></i>&nbsp;<a href="inicio.php" style="color: white;">Cancelar</a> </button>
                                             
                                              
                                    </div>
                               
                          
      
                            </div>
                    

                          
                              
                             
                                       
                           

                      
                       
                      </form>
                    </div>
                    <!--Fin centro -->
                  
              </div><!-- /.col -->

    </div><!-- /.content-wrapper -->
 </section>



  
<?php

  // require 'footer2.php';
require 'footer.php';
?>

<script type="text/javascript" src="scripts/cambiarclave.js"></script>
<script >
  
  $("#formularioregistros").show();

</script>

 
