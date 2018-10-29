<?php

require_once 'header.php';


?>

<section class="content">
  <!--Contenido-->
  <div class="card">
    <div class="card-body" role="main">
       <div class="dataTables_buttons hidden-sm-down actions"><span class="actions__item zmdi zmdi-print" data-table-action="print"></span><span class="actions__item zmdi zmdi-fullscreen" data-table-action="fullscreen"></span><div class="dropdown actions__item"><i data-toggle="dropdown" class="zmdi zmdi-download"></i><ul class="dropdown-menu dropdown-menu-right"><a href="" class="dropdown-item" data-table-action="excel">Excel (.xlsx)</a><a href="" class="dropdown-item" data-table-action="csv">CSV (.csv)</a></ul></div></div>
          <div class="">   
      <!-- Content Wrapper. Contains page content -->
   <div class="col-md-12">
                 
                    <div class="box-header with-border">
                      
                          <h1 class="box-title">Usuario <button class="btn btn-dark" id="btnagregar" style="cursor: pointer;" onclick="mostrarform(true)"><i class="zmdi zmdi-plus-circle"></i> Agregar</button></h1>
                          
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="x_content" id="listadoregistros">
                        <table id="datatable" class="data table table-striped ">
                          <thead>
                            <th>Opciones</th>
                            <th>Grado</th>
                            <th>Nombre</th>
                            <th>Login</th>
                           <th >Estado</th>
                          
                          </thead>
                          <tbody >                            
                          </tbody>
                      
                        </table>
                    </div>
                    <div class="panel-body" id="formularioregistros">
                      
                          <form name="formulario" id="formulario" method="POST"  class="form-horizontal form-label-left">
                          

                          
                            <div class="row">
                                  <div class="col-md-6">
                                    <input type="hidden" id="idusuario" name="idusuario">
                                     
                                      <div class="form-group">
                                        <label class="control-label ">Nombre<span class="required">*</span>
                                        </label>
                                        
                                          <select class="form-control " name="nombre" id="nombre" >
                                            
                                          </select>
                                        
                                      </div>
                                      <div class="row">
                                         <div class="col-md-6"> 
                                          <div class="form-group">  
                                            <label class="control-label">Usuario<span class="required">*</span>
                                            </label>
                                            
                                             <input  class="form-control " type="text" name="login" id="login" required="required">
                                            
                                            </div>
                                        
                                      </div>

                                   <div class="col-md-6">
                                        <div class="form-group">   
                                          <label class="control-label ">Contraseña<span class="required">*</span>
                                          </label>
                                          
                                             <input  class="form-control " type="password" name="clave" id="clave" required="required">
                                          </div>
                                      </div>
                                      </div>


                                        
                                  </div>


                                  <div class="col-md-4">
                                         <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                           
                                        
                                         
                                        <label>Permisos:</label>

                               
                                        <ul style="list-style: none; "  id="permisos" name="permisos" style="width:200px;"  >
                                               
                                          </ul>
                                        
                                           
                                  
                                      </div>
                                  </div>
                              
                           
                          
                          </div>
                            
                         
                          

                         
                          
                            
                          
                        
                

                         <div class="row">
                            <div class="col-md-9">
                              
                            </div>
                            <div class=" col-md-3 ">
                              <div class="form-group float-right">
                                
                              <button class="btn btn-dark" style="cursor:pointer;" type="submit" id="btnGuardar"><i class="zmdi zmdi-collection-plus"></i> Guardar</button>

                             <button class="btn btn-dark" onclick="cancelarform()" style="cursor: pointer;" type="button"><i class="zmdi zmdi-close "></i>&nbsp; Cancelar</button>
                              </div>
                              
                            </div>
                                     
                          </div>

                    
                     
                    </form>
                    </div>
                    <!--Fin centro -->
                  
              </div><!-- /.col -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
</div>

  </div>
    
</section>




  
<?php

  // require 'footer2.php';
require 'footer.php';
?>

<script type="text/javascript" src="scripts/usuario.js"></script>
 