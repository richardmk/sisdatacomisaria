<?php 
  require_once 'header.php';
  require '../conexion/Conexion.php';

  $query = "SELECT  iddepartamentos,nombre from departamentos order by nombre ASC";
  $resultado = $conexion->query($query);
 ?>

      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  
  
</div> -->

    				

        <div class="content">


        	    <div class="row">

		        <div class="col-md-12">

		            <div class="card cardd">
		            	<div class="dataTables_buttons hidden-sm-down actions"><span class="actions__item zmdi zmdi-print" data-table-action="print"></span><span class="actions__item zmdi zmdi-fullscreen" data-table-action="fullscreen"></span><div class="dropdown actions__item"><i data-toggle="dropdown" class="zmdi zmdi-download"></i><ul class="dropdown-menu dropdown-menu-right"><a href="" class="dropdown-item" data-table-action="excel">Excel (.xlsx)</a><a href="" class="dropdown-item" data-table-action="csv">CSV (.csv)</a></ul></div></div>
	

			                  				<div class="card-body table-responsive" id="listadoregistros">
			                  					<h4>Listado de Personal de la Comisaria</h4>
						                        <table id="datatable"  class="table data ">
							                          <thead>
							                          	<tr>
							                          		<th>Opciones</th>
								                            <th>GRADO</th>
								                            <th>Ap. Paterno</th>
								                            <th>Ap. Materno</th>
								                            <th>Nombres</th>
								                            <th>DNI</th>
								                            <th>Especialidad</th>
							                        	</tr>
							                            
							                          </thead>
							                          <tbody>
							                          <tr>
							                          	
							                          </tr>                         
							                          </tbody>
							                         </th>
							                          
						                        </table>
						                    </div>
                  					

										<div class="card-body"   id="formularioregistros">
											<form name="formulario" id="formulario" method="POST">
													
												<input type="hidden" id="iddatos_principales" name="iddatos_principales">
										        <div class="row">
										          <div class="col-md-5" >
										            <div class="card card-user ">
										              <div class="image-user">
										             
										              </div>
										              <div class="card-body">
										                <div class="author">
										                  <a href="#">
										                     <div class="text-center">
								                                <img src="../public/demo/img/contacts/3.jpg" class="widget-profile__img" alt="">
								                                <h2 class="card-title" style="font-size: 16px;" id="nombre_completo" name="nombre_completo"></h2>
								                            </div>
										                   <input type="text" id="grado" name="grado" class="form-control text-center">
										                  </a>
										                  <p class="description">
										                   
										                  </p>
										                </div>
														
														  <div class="form-inline ">
										                	<i class="zmdi zmdi-view-web"></i> &nbsp;DNI:&nbsp;&nbsp; <input style="border-bottom: none;" type="text" class="form-control" id="dni" name="dni">
										                	
										                </div>

										                <div class="form-inline ">
										                	<i class="zmdi zmdi-phone"></i> &nbsp;Nro. Contacto :&nbsp;&nbsp; <input style="border-bottom: none;" type="text" class="form-control" id="nro_contacto" name="nro_contacto">
										                	
										                </div>
												                
															

															<div class="form-inline ">
																
												                	<i class="zmdi zmdi-calendar "> </i> &nbsp;Fecha Nac :&nbsp;&nbsp;<input style="width: 150px; border-bottom: none;" type="text" class="form-control " id="fecha_nacimiento" name="fecha_nacimiento">
												               
															</div>

															<div class="form-inline ">
														
										                	<i class="zmdi zmdi-account-circle "> </i> &nbsp;Estado Civil :&nbsp;&nbsp;<input style="width: 150px; border-bottom: none;" type="text" class="form-control " id="estado_civil" name="estado_civil">
												               
															</div>

															<div class="form-inline ">
														
										                	<i class="zmdi zmdi-invert-colors "> </i> &nbsp;Grupo Sanguíneo:&nbsp;&nbsp;<input style="width: 120px; border-bottom: none;" type="text" class="form-control " id="grupo_sanguineo" name="grupo_sanguineo">
												               
															</div>
															<div class="form-inline ">
																
												                	<i class="zmdi zmdi-google-maps "> </i> &nbsp;Domicilio Actual :&nbsp;&nbsp;<input style="width: 210px; border-bottom: none;" type="text" class="form-control " id="domicilio" name="domicilio">
												               
															</div>

															<div class="form-inline ">
																
												                	<i class="zmdi zmdi-view-dashboard "> </i> &nbsp;Departamento(Nac.) :&nbsp;&nbsp;<input style="border-bottom: none;" type="text" class="form-control " id="cbodepartamentos" name="cbodepartamentos">
												               
															</div>
															<div class="form-inline ">
																
												                	<i class="zmdi zmdi-view-dashboard "> </i> &nbsp;Provincia(Nac.) :&nbsp;&nbsp;<input style="border-bottom: none;" type="text" class="form-control " id="cboprovincias" name="cboprovincias">
												               
															</div>
															<div class="form-inline ">
																
												                	<i class="zmdi zmdi-view-dashboard "> </i> &nbsp;Distrito(Nac.) :&nbsp;&nbsp;<input style="border-bottom: none;" type="text" class="form-control " id="cbodistritos" name="cbodistritos">
												               
															</div>
										                
										              </div>
										            
										            </div>
										            
										          </div>
										          <div class="col-md-7">
										            <div class="card card-user" >
										              <div class="card-header">
										                <h5 class="card-title">Editar datos de Perfíl</h5>
										              </div>
										              <div class="card-body">
										               

											              	<div class="row">
																<div class="col-md-6">
										                      		<div class="form-group">
										                      			<label>Departamento Labor</label>
										                      			<input type="text" class="form-control" id="departamento_labor" name="departamento_labor">
										                      		</div>
										                      		
										                      	</div>
										                      	
										                      	<div class="col-md-6 ">
										                      		<div class="form-group">
										                      			<label>Area Labor</label>

										                      			<input type="text"  name="area_labor" id="area_labor" class="form-control">
										                      			
										                      			
										                      		</div>
										                      		
										                      	</div>
										                      
															</div>


										                
										                <div class="row">
										                    <div class="col-md-5">
										                      <div class="form-group">
										                        <label>Especialidad</label>
										                        <input type="text" class="form-control" id="especialidad" name="especialidad">
										                      </div>
										                    </div>
										                      	<div class="col-md-5 ">
										                      		<div class="form-group">
										                      			<label>Cargo</label>
										                      			<input type="text" class="form-control"  name="cargo_labor" id="cargo_labor">
										                      			
										                      		</div>
										                      		
										                      	</div>
										                     <div class="col-md-2">
										                      <div class="form-group">
										                        <label>T. servicio</label>
										                        <input type="number" class="form-control text-center" id="tiempo_servicio_general" name="tiempo_servicio_general">
										                      </div>
										                    </div>
										                </div>

										                <div class="row">
										                  	<div class="col-md-4 ">
										                      		<div class="form-group">
										                      			<label>Fecha de Incorporación</label>
										                      			<input type="text" class="form-control" name="fecha_incorporacion_unidad" id="fecha_incorporacion_unidad">
										                      		</div>
										                      	</div>
										                      	<div class="col-md-3 ">
										                      		<div class="form-group">
										                      			<label>Nro. Oficio</label>
										                      			<input type="text" class="form-control " name="oficio" id="oficio">
										                      		</div>
										                      	</div>

										                      	<div class="col-md-5 ">
										                      		<div class="form-group">
										                      			<label>Unidad de Procedencia</label>
										                      			<input type="text" class="form-control" name="unidad_procedencia" id="unidad_procedencia">
										                      		</div>
										                      	</div>
										                </div>

										                    <div class="row">
										                      	<div class="col-md-4 ">
										                      		<div class="form-group">
										                      			<label>Fecha Ingreso PNP</label>
										                      			<input type="text" class="form-control" name="fecha_ingreso_pnp" id="fecha_ingreso_pnp">
										                      		</div>
										                      	</div>
										                      	<div class="col-md-4 ">
										                      		<div class="form-group">
										                      			<label>Fecha Egreso Escuela</label>
										                      			<input type="text" class="form-control" name="fecha_egreso_escuela" id="fecha_egreso_escuela">
										                      		</div>

										                      	</div>

										                      	<div class="col-md-4">
										                      		<div class="form-group">
										                      			<label>Fecha Ultimo Ascenso</label>
										                      			<input type="text" class="form-control" name="fecha_ultimo_ascenso" id="fecha_ultimo_ascenso">
										                      		</div>
										                      		
										                      	</div>
										                    </div>

															

										                <div class="row">
										                    <div class="col-md-4">
										                      <div class="form-group">
										                        <label>CIP</label>
										                        <input type="text" class="form-control" id="cip" name="cip">
										                      </div>
										                    </div>

										                    <div class="col-md-4">
										                      <div class="form-group">
										                        <label>CODOFIN</label>
										                        <input type="text" class="form-control" id="codofin" name="codofin">
										                      </div>
										                    </div>

										                    <div class="col-md-4">
										                      <div class="form-group">
										                        <label>CAF Nro.</label>
										                        <input type="text" class="form-control" id="caf_nro" name="caf_nro">
										                      </div>
										                    </div>
										                   
										                </div>

										                <div class="row">
										                    <div class="col-md-4 ">
										                      		<div class="form-group">
										                      			<label>Arma Clase</label>
										                      			<input type="text" class="form-control" name="clase_arma" id="clase_arma">
										                      		</div>
										                      		
										                      	</div>
										                      		<div class="col-md-4 ">
										                      		<div class="form-group">
										                      			<label>Arma Marca</label>
										                      			<input type="text" class="form-control" name="marca_arma" id="marca_arma">
										                      		</div>
										                      		
										                      	</div>
										                      		<div class="col-md-4 ">
										                      		<div class="form-group">
										                      			<label>Arma Serie</label>
										                      			<input type="text" class="form-control" name="serie_arma" id="serie_arma">
										                      		</div>
										                      		
										                      	</div>
										                      		

										                </div>
										                 

										                   <div class="row">
							                        	<div class="col-md-7">
							                        		
							                        	</div>
							                        	
							                        	  <div class=" col-md-5 ">
						                                    
						                                        <div class="form-group float-right">
						                                        	<button class="btn btn-dark" type="submit" id="btnGuardar" style="cursor: pointer;
						                                     " ><i class="zmdi zmdi-collection-plus"></i> &nbsp;Guardar</button>

						                                      <button class="btn btn-dark" onclick="cancelarform()" style="cursor: pointer;" type="button"><i class="zmdi zmdi-close "></i>&nbsp; Cancelar</button>

						                                     
						                                     
						                                      
						                                    </div>
							                        </div><br>
										               
										              </div>
										            </div>
										          </div>
										        </div>
										    </form>
										</div>
						                    
						              
						           
					</div>
       			</div>
       			</div>
       	</div>
     
<?php 
  
  require 'footer.php';
  
?>

<script src="scripts/datos_principales2.js"></script>