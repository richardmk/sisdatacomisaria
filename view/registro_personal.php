<?php 
  require 'header.php';
  require '../conexion/Conexion.php';

  $query = "SELECT  iddepartamentos,nombre from departamentos order by nombre ASC";
  $resultado = $conexion->query($query);
 ?>

      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  
  
</div> -->
<script src="../public/js/jquery-3.3.1.js"></script>

       <script language="javascript">
      $(document).ready(function(){
        $("#cbodepartamentos").change(function () {
         //	$('#cboprovincias').find('option').remove().end().append('<option value="whatever"></option>').val('whatever'); 
          $("#cbodepartamentos option:selected").each(function () {
            iddepartamentos = $(this).val();
            $.post("includes/getprovincias.php", { iddepartamentos: iddepartamentos }, function(data){
              $("#cboprovincias").html(data);
            });            
          });
        })
      });
      
      $(document).ready(function(){
        $("#cboprovincias").change(function () {
          $("#cboprovincias option:selected").each(function () {
            idprovincias = $(this).val();
            $.post("includes/getdistritos.php", { idprovincias: idprovincias }, function(data){
              $("#cbodistritos").html(data);
            });            
          });
        })
      });
    </script>

        <section class="content">


        	    <div class="row">
		          <div class="col-md-12">
		             <div class="card">
		             	
                    <!-- /.box-header -->
                    
			              
			              <div class="card-body " id="formularioregistros">
			              	<form  name="formulario" id="formulario" method="POST">

			              		<input type="hidden" id="iddatos_principales" name="iddatos_principales">
			              		
			              		 
				              	<div class="">
			                        <h2 class="">Datos Generales</h2><br>
			                      </div>	
				              		 <div class="row">
					                  	<div class="col-md-2 ">
						                   
						                    	<div class="form-group ">
						                    		<label>Apellido Paterno</label>
						                    		<input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno">
						                    	</div>
						                    
					                	</div>
					                	<div class="col-md-2 ">
						                   
						                    	<div class="form-group">
						                    		<label>Apellido Materno</label>
						                    		<input type="text" class="form-control" name="apellido_materno" id="apellido_materno">
						                    	</div>
						                    
						           		 </div>
						           		 <div class="col-md-4 ">
							                   
							                    	<div class="form-group">
							                    		<label>Nombres</label>
							                    		<input type="text" class="form-control" name="nombres" id="nombres">
							                    	</div>
							                    
						           		 </div>

						           		 

				              		 </div>


				              		  <div class="row">

					                	<div class="col-md-3">
		                                    <label>Fecha Nacimiento</label>

		                                    <div class="input-group">
		                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
		                                        <div class="form-group">
		                                            <input type="text" class="form-control date-picker" placeholder="Seleccione la fecha" name="fecha_nacimiento" id="fecha_nacimiento">
		                                            <i class="form-group__bar"></i>
		                                        </div>
		                                    </div><br>
		                                </div>

				              		 	
					                	<div class="col-md-2 ">
						                   
						                    	<div class="form-group ">
						                    		<label>Nro. Contacto</label>
						                    		<input type="text" class="form-control" name="nro_contacto" id="nro_contacto">
						                    	</div>

						                    
						                    
					                	</div>


					                	<div class="col-md-2 ">
					                			<div class="form-group ">
						                    		<label>Estado Civil</label>
						                    		<select name="estado_civil" id="estado_civil" class="form-control select2" >
						                    			<option value="0"> Seleccionar </option>
						                    			<option value="Soltero(a)">Soltero(a)</option>
						                    			<option value="Casado(a)">Casado(a)</option>
						                    			<option value="Viudo(a)">Viudo(a)</option>
						                    			<option value="Divorciado(a)">Divorciado(a)</option>
						                    		</select>
						                    	</div>
					                	</div>

					                	<div class="col-md-2 ">
					                			<div class="form-group ">
						                    		<label>Grupo Sanguíneo</label>
						                    		<select name="grupo_sanguineo" id="grupo_sanguineo" class="form-control select2">
						                    			<option value="0"> Seleccionar </option>
						                    			<option value="O Negativo">O Negativo</option>
						                    			<option value="O Positivo">O Positivo</option>
						                    			<option value="A Negativo">A Negativo</option>
						                    			<option value="A Positivo">A Positivo</option>
						                    			<option value="B Negativo">B Negativo</option>
						                    			<option value="B Positivo">B Positivo</option>
						                    			<option value="AB Negativo">AB Negativo</option>
						                    			<option value="AB Positivo">AB Positivo</option>
						                    		</select>
						                    	</div>
					                	</div>

					                	
					                	
				              		 </div>


				              		   <div class="row">
				              		 	<div class="col-md-2 ">
				              		 	
						                   
						                    	<div class="form-group ">
						                    		<label>Departamento(Nac.)</label>
						                    		<select class="form-control select2" id="cbodepartamentos" name="cbodepartamentos" required="required">
						                    			<option value="0" > Seleccionar  </option>
						                    			<?php while($row = $resultado->fetch_assoc()) { ?>
						                    				<option value="<?php echo $row['iddepartamentos'] ?>" >
						                    					<?php echo $row['nombre']; ?>
						                    						
						                    					</option>
						                    			<?php } ?>
						                    			
						                    		</select>
						                    	</div>
						                    
					                	</div>
					                	<div class="col-md-3 ">
						                   <div class="form-group ">
						                    		<label>Provincia(Nac.)</label>
						                    		<select class="form-control select2" id="cboprovincias" name="cboprovincias" required="required">
						                    					
															<option value="0"> Seleccionar  </option>
						                    				

						                    		</select>
						                    	</div>

						                    
						                    
					                	</div>
					                	<div class="col-md-3 ">
					                		<div class="form-group ">
						                    		<label>Distrito(Nac.)</label>
						                    		<select class="form-control select2" id="cbodistritos" name="cbodistritos" required="required" required="">
						                    			<option value="0"> Seleccionar  </option>
						                    		</select>
						                    	</div>
					                	</div>

					                	<div class="col-md-4 ">
					                		<label>Domicilio Actual (Referencia)</label>
					                		<input type="text" class="form-control" style="height:  calc(2.25rem + 2px);" name="domicilio" id="domicilio">
					                	</div>

					                	
					                	
				              		 </div>



				              		 <div class="row">
				              		 	
					                	<div class="col-md-3 ">
						                   
						                    	<div class="form-group ">
						                    		<label>Grado</label>
						                    		<select class="form-control select2" id="grado" name="grado" required="required">
						                    			<option value="0"> Seleccionar </option>
						                    			<option value="GENERAL">GENERAL</option>
						                    			<option value="CORONEL">CORONEL</option>
						                    			<option value="COMANDANTE">COMANDANTE</option>
						                    			<option value="MAYOR">MAYOR</option>
						                    			<option value="CAPITÁN">CAPITÁN</option>
						                    			<option value="TENIENTE">TENIENTE</option>
						                    			<option value="ALFÉREZ">ALFÉREZ</option>
						                    			<option value="SUBOFICIAL SUPERIOR">SUBOFICIAL SUPERIOR</option>
						                    			<option value="SUBOFICIAL BRIGADIER">SUBOFICIAL BRIGADIER</option>
						                    			<option value="SUBOFICIAL TÉCNICO DE PRIMERA">SUBOFICIAL TÉCNICO DE PRIMERA</option>
						                    			<option value="SUBOFICIAL TÉCNICO DE SEGUNDA">SUBOFICIAL TÉCNICO DE SEGUNDA</option>
						                    			<option value="SUBOFICIAL TÉCNICO DE TERCERA">SUBOFICIAL TÉCNICO DE TERCERA</option>
						                    			<option value="SUBOFICIAL DE PRIMERA">SUBOFICIAL  DE PRIMERA</option>
						                    			<option value="SUBOFICIAL DE SEGUNDA">SUBOFICIAL DE SEGUNDA</option>
						                    			<option value="SUBOFICIALDE TERCERA">SUBOFICIAL DE TERCERA</option>
						                    			
						                    			
						                    		</select>
						                    	</div>

						                    
						                    
					                	</div>
					                	<div class="col-md-3 ">
					                			<div class="form-group ">
						                    		<label>Especialidad</label>
						                    		<input type="text" class="form-control" name="especialidad" id="especialidad">
						                    	</div>
					                	</div>

					                	<div class="col-md-2 ">
					                			<div class="form-group ">
						                    		<label>CIP. NRO.</label>
						                    		<input type="text" class="form-control" name="cip" id="cip">
						                    	</div>
					                	</div>

					                	<div class="col-md-2 ">
					                			<div class="form-group ">
						                    		<label>CODOFIN</label>
						                    		<input type="text" class="form-control" name="codofin" id="codofin">
						                    	</div>
					                	</div>
					                	 <div class="col-md-2 col-md-offset-2 ">
							                   
							                    	<div class="form-group">
							                    		<label>DNI</label>
							                    		<input type="text" class="form-control" name="dni" id="dni">
							                    	</div>
							                    
						           		 </div>
				              		 </div>

				              		 
			                        <h2 >Datos Policiales</h2><br>
			                      

			                      <div class="row">
			                      	<div class="col-sm-4">
	                                    <label>Fecha Incorporacion a la Unidad</label>

	                                    <div class="input-group">
	                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
	                                        <div class="form-group">
	                                            <input type="text" class="form-control date-picker" placeholder="Seleccione la fecha" name="fecha_incorporacion_unidad" id="fecha_incorporacion_unidad">
	                                            <i class="form-group__bar"></i>
	                                        </div>
	                                    </div><br>
                                  </div>
			                      
			                      	<div class="col-md-2 ">
			                      		<div class="form-group">
			                      			<label>Nro. Oficio</label>
			                      			<input type="text" class="form-control" name="oficio" id="oficio">
			                      		</div>
			                      	</div>
			                      	<div class="col-md-4 ">
			                      		<div class="form-group">
			                      			<label>Unidad de Procedencia</label>
			                      			<input type="text" class="form-control" name="unidad_procedencia" id="unidad_procedencia">
			                      		</div>
			                      	</div>
			                      	<div class="col-md-2 ">
			                      		<div class="form-group">
			                      			<label>T. Servicio(Años)</label>
			                      			<input type="number" class="form-control" name="tiempo_servicio_general" id="tiempo_servicio_general">
			                      		</div>
			                      	</div>
			                      </div>
			                      <div class="row">
			                      	<div class="col-sm-4">
	                                    <label>Fecha Ingreso PNP</label>

	                                    <div class="input-group">
	                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
	                                        <div class="form-group">
	                                            <input type="text" class="form-control date-picker" placeholder="Seleccione la fecha" name="fecha_ingreso_pnp" id="fecha_ingreso_pnp">
	                                            <i class="form-group__bar"></i>
	                                        </div>
	                                    </div><br>
	                                </div>

	                                <div class="col-sm-4">
	                                    <label>Fecha Egreso PNP</label>

	                                    <div class="input-group">
	                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
	                                        <div class="form-group">
	                                            <input type="text" class="form-control date-picker" placeholder="Seleccione la fecha"  name="fecha_egreso_escuela" id="fecha_egreso_escuela">
	                                            <i class="form-group__bar"></i>
	                                        </div>
	                                    </div><br>
	                                </div>

									<div class="col-sm-4">
                                    <label>Fecha Ultimo ascenso</label>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="form-group">
                                            <input type="text" class="form-control date-picker" placeholder="Seleccione la fecha" name="fecha_ultimo_ascenso" id="fecha_ultimo_ascenso">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                </div>
			                     
			                      
			                     
			                      </div><br>

			                      <div class="row">
			                      		<div class="col-md-3 ">
			                      		<div class="form-group">
			                      			<label>Departamento Labor</label>
			                      			<select name="departamento_labor" id="departamento_labor" class="form-control select2">
			                      				<option value="0"> Seleccionar </option>
			                      				<option value="JEFATURA GENERAL"> JEFATURA GENERAL</option>
			                      				<option value="SECRETARIA">SECRETARIA</option>
			                      				<option value="ADMINISTRACION">ADMINISTRACION</option>
			                      				<option value="INVESTIGACION">INVESTIGACION</option>
			                      				<option value="ORDEN Y SEGURIDAD POLICIAL">ORDEN Y SEGURIDAD POLICIAL</option>
			                      			</select>
			                      		</div>
			                      		
			                      	</div>
			                      	
			                      	<div class="col-md-3 ">
			                      		<div class="form-group">
			                      			<label>Area Labor</label>
			                      			<select name="area_labor" id="area_labor" class="form-control select2">
			                      				<option value="0"> Seleccionar </option>
			                      				<option value="JEFATURA"> JEFATURA</option>
			                      				
			                      				<option value="RECURSOS HUMANOS">RECURSOS HUMANOS</option>
			                      				<option value="TRAMITE DOCUMENTARIO">TRÁMITE DOCUMENTARIO</option>
			                      				<option value="LOGISTICA">LOGISTICA</option>
			                      				<option value="COPIAS CERTIFICADAS">COPIAS CERTIFICADAS</option>
			                      				<option value="ESTADÍSTICA">ESTADISTICA</option>
			                      				<option value="SEGURIDAD INTERNA">SEGURIDAD INTERNA</option>
			                      				<option value="PATRULLAJE MOTORIZADO"> PATRULLAJE MOTORIZADO</option>
			                      				<option value="PATRULLAJE A PIE">PATRULLAJE A PIE</option>
			                      				<option value="DELITOS Y FALTAS">DELITOS Y FALTAS</option>
			                      				<option value="TRANSITO"> TRANSITO</option>
			                      				<option value="OTRAS">OTRAS</option>

			                      			</select>
			                      			
			                      		</div>
			                      		
			                      	</div>
			                      	<div class="col-md-3 ">
			                      		<div class="form-group">
			                      			<label>Cargo</label>
			                      			<select  class="form-control select2" name="cargo_labor" id="cargo_labor">
			                      				<option value="0"> Seleccionar </option>
			                      				<option value="COMISARIO">COMISARIO</option>
			                      				<option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
			                      				<option value="ESTADISTICO">ESTADÍSTICO</option>
			                      				<option value="JEFE DE PREVENCION">JEFE DE PREVENCIÓN</option>
			                      				<option value="SERVICIO DE ARMERIA">SERVICIO DE ARMERIA</option>
			                      				<option value="CLASE DE DIA">CLASE DE DIA</option>
			                      				<option value="SEGURIDAD DE INSTALACIONES">SEGURIDAD DE INSTALACIONES</option>
			                      				<option value="JEFE DE SECCION"> JEFE DE SECCION</option>
			                      				<option value="RECEPCION DE DENUNCIAS">RECEPCION DE DENUNCIAS</option>
			                      				<option value="CHOFER">CHOFER</option>
			                      				<option value="OPERADOR">OPERADOR</option>
			                      				<option value="CHOFER MOTO LINEAL">CHOFER MOTO LINEAL</option>
			                      				<option value="PATRULLAJE A PIE">PATRULLAJE A PIE</option>
			                      				<option value="PROMOTOR">PROMOTOR</option>
			                      				<option value="JEFE DE SEINCRI">JEFE DE SEINCRI</option>
			                      				<option value="INVESTIGADOR"> INVESTIGADOR</option>
			                      				<option value="OTROS">OTROS</option>
			                      			</select>
			                      		</div>
			                      		
			                      	</div>
			                      </div>


			                      <div class="row">
			                      		<div class="col-md-3 ">
			                      		<div class="form-group">
			                      			<label>Arma Clase</label>
			                      			<select class="form-control select2" name="clase_arma" id="clase_arma">
			                      				<option value="PISTOLA">PISTOLA</option>
			                      				<option value="REVOLVER">REVOLVER</option>
			                      			</select>
			                      		</div>
			                      		
			                      	</div>
			                      		<div class="col-md-3 ">
			                      		<div class="form-group">
			                      			<label>Arma Marca</label>
			                      			<input type="text" class="form-control" name="marca_arma" id="marca_arma">
			                      		</div>
			                      		
			                      	</div>
			                      		<div class="col-md-2 ">
			                      		<div class="form-group">
			                      			<label>Arma Serie</label>
			                      			<input type="text" class="form-control" name="serie_arma" id="serie_arma">
			                      		</div>
			                      		
			                      	</div>
			                      		<div class="col-md-2 ">
			                      		<div class="form-group">
			                      			<label>CAF Nro.</label>
			                      			<input type="text" class="form-control" name="caf_nro" id="caf_nro">
			                      		</div>
			                      		
			                      	</div>
			                      </div><br>


			                      <div class="row">
			                        	<div class="col-md-8">
			                        		
			                        	</div>
			                        	
			                        	  <div class=" col-md-4 ">
		                                    
		                                        <div class="form-group float-right">
		                                        	 <button class="btn btn-dark" type="submit" id="btnGuardar" style="cursor: pointer;
		                                     " ><i class="zmdi zmdi-collection-plus"></i> &nbsp;Guardar</button>

		                                     <button class="btn btn-dark"  type="button"><i class="zmdi zmdi-close "></i>&nbsp;<a href="inicio.php" style="color: white;"> Cancelar</a> </button>
		                                        </div>
		                                    
		                                     
		                                      
		                                    </div>
			                        </div><br>

				     			 </div>
			     			</form>
			  	   </div>
		  		</div>      
       </section>
     
<?php 
  
  require 'footer.php';
  
?>

<script src="scripts/datos_principales.js"></script>
