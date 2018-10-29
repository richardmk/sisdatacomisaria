<?php

require 'header.php';
?>


        
              <section class="content">

           
                <div class="box ">  

                <div class="card">
<div class="dataTables_buttons hidden-md-down actions"><span class="actions__item zmdi zmdi-print" data-table-action="print"></span><span class="actions__item zmdi zmdi-fullscreen" data-table-action="fullscreen"></span><div class="dropdown actions__item"><i data-toggle="dropdown" class="zmdi zmdi-download"></i><ul class="dropdown-menu dropdown-menu-right"><a href="" class="dropdown-item" data-table-action="excel">Excel (.xlsx)</a><a href="" class="dropdown-item" data-table-action="csv">CSV (.csv)</a></ul></div></div>

                  <div class="card-body">
                     <div class="box-header with-border" >
                          <h2 class="box-title prov-tit1">Listado de Denuncias </h2><br>
                       


                        
                        <div class="box-tools pull-right">
                        </div>
                    </div>

                     <div class=" table-responsive" id="listadoregistros">
                      
                      
                         <table id="datatable" class=" table table-striped table-condensed ">

                                <thead>
                                    <tr>
                                      <th>Opciones</th>
                                     
                                      <th>Usuario de Registro</th>
                                        <th>Fecha de Registro</th>
                                        <th>Hora de Registro</th>
                                        <th>Personal a Cargo </th>                                   
                                        <th>Tipo de Denuncia</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                    </tr>
                                    
                                     
                                  </tbody>
                               
                            </table>                  
                    </div>
               
                 <div class="panel-body" id="formularioregistros">
                  
                  
                        <form name="formulario" id="formulario" method="POST" autocomplete="off">
                            
                            <input type="hidden" name="iddenuncia" id="iddenuncia">
                            
                            <div class="row">
                              <div class="col-md-3">
                                      <label>Fecha de Registro</label>

                                      <div class="input-group">
                                          <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                          <div class="form-group">
                                              <input type="text" class="form-control "  name="fecha_registro" id="fecha_registro" readonly="readonly" disabled="disabled">
                                              <i class="form-group__bar"></i>
                                          </div>
                                      </div><br>
                                  </div>

                                  <div class="col-md-2"> 
                                      <label>Hora de Registro</label>
                                      <div class="input-group">
                                          <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                          <div class="form-group">
                                              <input type="text" class="form-control "  name="hora_registro" id="hora_registro" readonly="readonly" disabled="disabled">
                                              <i class="form-group__bar"></i>
                                          </div>
                                      </div><br>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="">Usuario de Registro</label>
                                    <input type="text" name="usuario_registro" id="usuario_registro"  class="s-text form-control" disabled="disabled">
                                    </div>
                                  </div>

                                   <div class="col-md-4">

                                    <div class="form-group">
                                      <label for="">Tipo de Denuncias</label>
                                      <input type="text" id="tipo_denuncia" name="tipo_denuncia" class="form-control">
                                    
                                    </div>
                                    
                                  </div>
                            </div>


                          

                                      <script>
                                        n =  new Date();
                                          //Año
                                          y = n.getFullYear();
                                          //Mes
                                          m = n.getMonth() + 1;
                                          //Día
                                          d = n.getDate();

                                          //Lo ordenas a gusto.
                                          document.getElementById("fecha_registro").value = d + "/" + m + "/" + y;
                                      </script> 
                                   

                                      <script>
                                        
                                       
                                          momentoActual =  new Date();
                                          hora =  momentoActual.getHours();
                                          minuto = momentoActual.getMinutes();
                                          horaImprimible = hora + " : " + minuto ;
                                          //salida
                                          document.getElementById('hora_registro').value=horaImprimible;
                                        
                                      </script>

                            <div class="row">
                              <div class="col-md-4"><br>
                                 
                                <div class="form-group">
                                  <label for="">Denunciante</label>
                                  <input type="text" class="form-control s-text " id="denunciante" name="denunciante">
                                </div>
                                   <div class="form-group">
                                  <label for="">Denunciado</label>
                                  <input type="text" class="form-control s-text " id="denunciado" name="denunciado">
                                </div>
                              </div>

                                <div class="col-md-8 card " ><br>
                                 <div class="form-group ">
                                          <label for="">Contenido</label>
                                          <textarea class="form-control s-text" rows="6" placeholder="Escriba aquí el contenido que desee ingresar..." id="contenido" name="contenido"></textarea>
                                                  <i class="form-group__bar"></i>
                                </div>
                               </div>

                                <!--<div class="col-md-6">
                                 <div class="form-group">
                                  <label for="">Personal a Cargo</label>
                                  <input type="text" class="form-control" id="personal_acargo" name="personal_acargo">
                                </div>
                              </div>-->
                            </div>

                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                      <label for="">Ubicacion del hecho</label>
                                      <input type="text" class="s-text form-control" name="ubicacion" id="ubicacion">
                                    </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Ubicación Específica</label>
                                  <input type="text" class="s-text form-control" id="ubicacion_detalle" name="ubicacion_detalle">
                                </div>
                              </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Personal a Cargo</label>
                                  <input type="text" class="s-text form-control" id="personal_acargo" name="personal_acargo">
                                </div>
                              </div>
                            </div>
                          
                         
                                         
                   

                                        

                            <div class="row">
                              <div class="col-md-9">
                                
                              </div>
                              <div class=" col-md-3 ">
                                <div class="form-group float-right">
                                  
                                <button class="btn btn-dark" style="cursor: pointer;" type="submit" id="btnGuardar"><i class="zmdi zmdi-collection-plus"></i> Editar</button>

                               <button class="btn btn-dark" style="cursor: pointer;" onclick="cancelarform()" type="button"><i class="zmdi zmdi-close "></i>&nbsp; Cancelar</button>
                                </div>
                                
                              </div>
                                       
                            </div>

                          



                       


                          



                         
                         
                        
                        </form>
                </div>

                  </div>
                   

                    
                </div>                          

                                         
             
              
              </div>
            

               
      </section>
     

<?php
    require 'footer.php';
?>

<script type="text/javascript" src="scripts/denuncias2.js"></script>

