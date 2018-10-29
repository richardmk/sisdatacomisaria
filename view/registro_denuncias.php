<?php

require 'header.php';
?>


        
              <section class="content">

           
                <div class="box ">  

                <div class="card">


                  <div class="card-body">
                     <div class="box-header with-border" >
                          <h2 class="box-title prov-tit1">Registro de Denuncias </h2><br>
                       


                        
                       
                    </div>

                
               
                 <div class="panel-body" id="formularioregistros">
                  
                  
                        <form name="formulario" id="formulario" method="POST" autocomplete="off">
                            
                            <input type="hidden" name="iddenuncia" id="iddenuncia">
                            <input type="hidden" name="usuario_registro" id="usuario_registro" value="<?php echo $_SESSION['nombre']; ?>" >
                            <input type="hidden" name="fecha_registro" id="fecha_registro">
                            <input type="hidden" name="hora_registro" id="hora_registro">

                                      <script>
                                        n =  new Date();
                                          //Año
                                          y = n.getFullYear();
                                          //Mes
                                          m = n.getMonth() + 1;
                                          //Día
                                          d = n.getDate();

                                          //Lo ordenas a gusto.
                                          document.getElementById("fecha_registro").value = y + "-" + m + "-" + d;
                                      </script> 
                                   

                                      <script>
                                        
                                        function addZero(i) {
                                            if (i < 10) {
                                                i = "0" + i;
                                            }
                                            return i;
                                        }

                                       
                                          momentoActual =  new Date();
                                         var hora = addZero( momentoActual.getHours());
                                          var minuto =addZero( momentoActual.getMinutes());
                                         var segundo = addZero(momentoActual.getSeconds());
                                          var horaImprimible = hora + ":" + minuto + ":" +segundo ;
                                          //salida
                                          document.getElementById('hora_registro').value=horaImprimible;
                                        
                                      </script>

                            <div class="row">

                              <div class="col-md-4 "><br>
                                 <div class="form-group">
                                  <label for="">Tipo de Denuncias</label>
                                  <select class="form-control select2" id="tipo_denuncia" name="tipo_denuncia" required="required">
                                        <option value="">-- SELECCIONAR --</option>
                                        <option value ="DELITO CONTRA EL PATRIMONIO" >  DELITO CONTRA EL PATRIMONIO</option>
                                        <option value ="HURTO SIMPLE" >  HURTO SIMPLE</option>
                                        <option value ="HURTO AGRAVADO EN CASA HABITADA" >  HURTO AGRAVADO EN CASA HABITADA</option>
                                        <option value ="HURTO AGRAVADO DURANTE LA NOCHE" >  HURTO AGRAVADO DURANTE LA NOCHE</option>
                                        <option value ="HURTO DE USO" >  HURTO DE USO</option>
                                        <option value ="HURTO AGRAVADO" >  HURTO AGRAVADO</option>
                                        <option value ="HURTO FAMELICO" >  HURTO FAMELICO</option>
                                        <option value ="TENTATIVA DE HURTO " >  TENTATIVA DE HURTO  </option>
                                        <option value ="ESTAFA SIMPLE" >  ESTAFA SIMPLE</option>
                                        <option value ="ESTAFA AGRAVADA" >  ESTAFA AGRAVADA </option>
                                        <option value ="ROBO SIMPLE" >  ROBO SIMPLE </option>
                                        <option value ="ROBO AGRAVADO DURANTE LA NOCHE " >  ROBO AGRAVADO DURANTE LA NOCHE  </option>
                                        <option value ="ROBO AGRAVADO A MANO ARMADA " >  ROBO AGRAVADO A MANO ARMADA </option>
                                        <option value ="ROBO AGRAVADO EN BANDA" >  ROBO AGRAVADO EN BANDA</option>
                                        <option value ="ROBO FRUSTRADO" >  ROBO FRUSTRADO</option>
                                        <option value ="ROBO DE CELULAR" >  ROBO DE CELULAR</option>
                                        <option value ="TENTATIVA DE ROBO" >  TENTATIVA DE ROBO</option>
                                        <option value ="ASALTO Y ROBO DE VEHICULOS" >  ASALTO Y ROBO DE VEHICULOS</option>
                                        <option value ="ROBO DE GANADO" >  ROBO DE GANADO</option>
                                        <option value ="ROBO FRUSTRADO DE GANADO" >  ROBO FRUSTRADO DE GANADO</option>
                                        <option value ="RECEPTACION" >  RECEPTACION</option>
                                        <option value ="DENUNCIAS ESPECIALES" >  DENUNCIAS ESPECIALES</option>
                                        <option value ="PERDIDA DE DOCUMENTO" >  PERDIDA DE DOCUMENTO</option>
                                        <option value ="FALSO TAXI / COLECTIVO" >  FALSO TAXI / COLECTIVO</option>
                                        <option value ="PERDIDA DE PLACA ROBADA" >  PERDIDA DE PLACA ROBADA</option>
                                        <option value ="PERDIDA DE CELULAR" >  PERDIDA DE CELULAR</option>
                                        <option value ="PERDIDA DE CIP" >  PERDIDA DE CIP</option>
                                        <option value ="PERDIDA DE ARMA" >  PERDIDA DE ARMA</option>
                                        <option value ="MORDEDURA CANINA" >  MORDEDURA CANINA</option>
                                        <option value ="DELITO CONTRA LA LIBERTAD" >  DELITO CONTRA LA LIBERTAD</option>
                                        <option value ="TRAFICO ILEGAL DE DATOS PERSONALES" >  TRAFICO ILEGAL DE DATOS PERSONALES</option>
                                        <option value ="COACCION SIMPLE" >  COACCION SIMPLE</option>
                                        <option value ="COACCION GRAVE" >  COACCION GRAVE</option>
                                        <option value ="CHANTAJE SEXUAL" >  CHANTAJE SEXUAL</option>
                                        <option value ="CHANTAJE SIMPLE" >  CHANTAJE SIMPLE</option>
                                        <option value ="EXTORSION SIMPLE" >  EXTORSION SIMPLE  </option>
                                        <option value ="EXTORSION AGRAVADA" >  EXTORSION AGRAVADA</option>
                                        <option value ="AMENAZA SIMPLE" >  AMENAZA SIMPLE  </option>
                                        <option value ="AMENAZA GRAVE" >  AMENAZA GRAVE </option>
                                        <option value ="VIOLACION A LA INTIMIDAD SEXUAL" >  VIOLACION A LA INTIMIDAD SEXUAL </option>
                                        <option value ="VIOLACION SEXUAL" >  VIOLACION SEXUAL</option>
                                        <option value ="VIOLACION EN ESTADO DE INCONSCIENCIA" >  VIOLACION EN ESTADO DE INCONSCIENCIA </option>
                                        <option value ="VIOLACION SEXUAL DE MENOR DE 14 AÑOS" >  VIOLACION SEXUAL DE MENOR DE 14 AÑOS </option>
                                        <option value ="TENTATIVA DE VIOLACION SEXUAL" >  TENTATIVA DE VIOLACION SEXUAL </option>
                                        <option value ="VIOLACION DE MENOR DE EDAD" >  VIOLACION DE MENOR DE EDAD</option>
                                        <option value ="DELITOS CONTRA LA SEGURIDAD PUBLICA" >  DELITOS CONTRA LA SEGURIDAD PUBLICA</option>
                                        <option value ="TRAFICO DE PRODUCTOS PIROTECNICOS" >  TRAFICO DE PRODUCTOS PIROTECNICOS</option> 
                                        <option value ="TRAFICO ILICITO DE DROGAS" >  TRAFICO ILICITO DE DROGAS</option>
                                        <option value ="TRAFICO DE INSUMOS QUIMICOS Y PRODUCTOS" >  TRAFICO DE INSUMOS QUIMICOS Y PRODUCTOS </option>
                                        <option value ="TRAFICO DE INGLUENCIAS" >  TRAFICO DE INGLUENCIAS</option>
                                        <option value ="TRAFICO DE MIGRANTES" >  TRAFICO DE MIGRANTES </option>
                                        <option value ="TRAFICO DE FLORA Y FAUNA" >  TRAFICO DE FLORA Y FAUNA</option>
                                        <option value ="COACCION AL CONSUMO DE DROGAS" >  COACCION AL CONSUMO DE DROGAS</option>
                                        <option value ="DELITO DE ORDEN FINANCIERO Y MONETARIO" >  DELITO DE ORDEN FINANCIERO Y MONETARIO  </option>
                                        <option value ="TRAFICO DE MONEDA FALSA" >  TRAFICO DE MONEDA FALSA</option>
                                        <option value ="DELITO CONTRA LA VIDA, EL CUERPO Y LA SALUD" >  DELITO CONTRA LA VIDA, EL CUERPO Y LA SALUD </option>
                                        <option value ="LESION GRAVE" >  LESION GRAVE</option>
                                        <option value ="LESION SIMPLE" >  LESION SIMPLE</option>
                                        <option value ="LESION GRAVE POR VIOLENCIA" >  LESION GRAVE POR VIOLENCIA  </option>
                                        <option value ="LESION CULPOSA" >  LESION CULPOSA </option>
                                        <option value ="CHOQUE CON DAÑOS MATERIALES Y LESIONES" >  CHOQUE CON DAÑOS MATERIALES Y LESIONES </option>
                                        <option value ="LESIONES GRAVES SEGUIDAS DE MUERTE" >  LESIONES GRAVES SEGUIDAS DE MUERTE</option>
                                        <option value ="TENTATIVA DE FEMINICIDIO" >  TENTATIVA DE FEMINICIDIO</option>
                                        <option value ="TENTATIVA DE SECUESTRO " >  TENTATIVA DE SECUESTRO  </option>
                                        <option value ="TENTATIVA DE ROBO" >  TENTATIVA DE ROBO</option>
                                        <option value ="AGRESION FISICA " >  AGRESION FISICA         </option>
                                        <option value ="AGRESION PSICOLOGICA  " >  AGRESION PSICOLOGICA        </option>
                                        <option value ="AGRESION VERBAL" >  AGRESION VERBAL</option>
                                        <option value ="AMENAZA" >  AMENAZA</option>
                                        <option value ="HOMICIDIO" >  HOMICIDIO</option>
                                        <option value ="DECESO" >  DECESO</option>
                                        <option value ="DELITO CONTRA LA ADMINISTRACION PUBLICA" >  DELITO CONTRA LA ADMINISTRACION PUBLICA</option>
                                        <option value ="VIOLENCIA CONTRA LA AUTORIDAD" >  VIOLENCIA CONTRA LA AUTORIDAD </option>
                                        <option value ="EVASION MEDIANTE VIOLENCIA" >  EVASION MEDIANTE VIOLENCIA</option>
                                        <option value ="VIOLENCIA FAMILIAR" >  VIOLENCIA FAMILIAR</option>
                                        <option value ="VIOLENCIA FISICA" >  VIOLENCIA FISICA</option>
                                        <option value ="VIOLENCIA PSICOLOGICA " >  VIOLENCIA PSICOLOGICA </option>
                                        <option value ="VIOLENCIA FISICA Y PSICOLOGICA" >  VIOLENCIA FISICA Y PSICOLOGICA</option>
                                        <option value ="VIOLENCIA ECONOMICA O PATRIMONIAL" >  VIOLENCIA ECONOMICA O PATRIMONIAL</option>
                                        <option value ="VIOLENCIA SEXUAL" >  VIOLENCIA SEXUAL</option>
                                        <option value ="INDUCCION A LA FUGA DE MENOR" >  INDUCCION A LA FUGA DE MENOR</option>
                                        <option value ="INDUCCION A LA FUGA" >  INDUCCION A LA FUGA</option>
                                        <option value ="DELITO INFORMATICO" >  DELITO INFORMATICO </option>
                                        <option value ="FRAUDE INFORMATICO" >  FRAUDE INFORMATICO</option>
                                        <option value ="FRAUDE INFORMATICO AGRAVADO" >  FRAUDE INFORMATICO AGRAVADO</option> 
                                        <option value ="ACOSO Y HOSTIGAMIENTO DIFUSION DE IMAGENES" >  ACOSO Y HOSTIGAMIENTO DIFUSION DE IMAGENES</option>
                                        <option value ="INTERVENCION POLICIAL" >  INTERVENCION POLICIAL</option>
                                        <option value ="PERSONA REQUISITORIADA" >  PERSONA REQUISITORIADA  </option>
                                        <option value ="CONTROL DE IDENTIDAD" >  CONTROL DE IDENTIDAD  </option>
                                        <option value="CONSTATACION POLICIAL">CONSTATACION POLICIAL</option>
                                        <option value="IDENTIFICACION DE RN (EQUIVOCADO)">IDENTIFICACION DE RN (EQUIVOCADO)</option>
                                        <option value="VIOLACION DE DOMICILIO">VIOLACION DE DOMICILIO</option>
                                        <option value="DAÑOS MATERIALES">DAÑOS MATERIALES</option>
                                        <option value="DESOBEDIENCIA Y/O RESISTENCIA A LA AUTORIDAD">DESOBEDIENCIA Y/o RESISTENCIA A LA AUTORIDAD</option>
                                        <option value="APROPIACION ILICITA">APROPACION ILICITA</option>
                                        <option value="INTENTO DE SUICIDIO">INTENTO DE SUICIDIO</option>
                                        <option value="TOCAMIENTOS INDEBIDOS">TOCAMIENTOS IDENBIDOS</option>
                                        <option value="ACOSO MEDIANTE REDES SOCIALES">ACOSO MEDIANTE REDES SOCIALES</option>



                                    
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="">Denunciante</label>
                                  <input type="text" class=" s-text form-control" id="denunciante" name="denunciante" required="required">
                                </div>
                                <div class="form-group">
                                  <label for="">Denunciado</label>
                                  <input type="text" class=" s-text form-control" id="denunciado" name="denunciado" required="required" >
                                </div>

                                
                              </div>

                                <div class="col-md-8 card " ><br>
                                 <div class="form-group ">
                                          <label for="">Contenido</label>
                                          <textarea class="s-text form-control " rows="8" placeholder="Escriba aquí el contenido que desee ingresar..." id="contenido" name="contenido"></textarea>
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
                                  <label for="">Zona del Hecho</label>
                                 
                                  <select name="ubicacion" class="form-control select2" id="ubicacion
                                  " required="required">
                                  <option value=" (NO ESPECIFICA / NO CONOCE)  " > (NO ESPECIFICA / NO CONOCE)  <option>
                                    <option value=" Cachiche  " > Cachiche  <option>
                                  <option value=" La angostura  " > La angostura  <option>
                                  <option value=" Pueblo Joven Señor de Luren " > Pueblo Joven Señor de Luren <option>
                                  <option value=" Sector El Mirador " > Sector El Mirador <option>
                                  <option value=" Urbanizacion El Remanso " > Urbanizacion El Remanso <option>
                                  <option value=" Residencial San Carlos  " > Residencial San Carlos  <option>
                                  <option value=" Urbanizacion Villa Los Educadores " > Urbanizacion Villa Los Educadores <option>
                                  <option value=" PP.JJ. Santa Rosa de Lima " > PP.JJ. Santa Rosa de Lima <option>
                                  <option value=" Urbanizacin Las Palmeras  " > Urbanizacion Las Palmeras  <option>
                                  <option value=" Urbanizacion Rinconada de Huacachina  " > Urbanizacion Rinconada de Huacachina  <option>
                                  <option value=" Urbanizacion La Palma " > Urbanizacion La Palma <option>
                                  <option value=" Urbanizacion Santa Rosa del Palmar  " > Urbanizacion Santa Rosa del Palmar  <option>
                                  <option value=" San Isidro  " > San Isidro  <option>
                                  <option value=" Urbanizacion La Morales " > Urbanizacion La Morales <option>
                                  <option value=" Urbanizacion Santa Anita  " > Urbanizacion Santa Anita  <option>
                                  <option value=" Divino Maestro  " > Divino Maestro  <option>
                                  <option value=" Los Patos " > Los Patos <option>
                                  <option value=" Casuarinas  " > Casuarinas  <option>
                                  <option value=" Urbanizacion San Joaquin Viejo  " > Urbanizacion San Joaquin Viejo  <option>
                                  <option value=" Urbanizacion San Joaquin Nuevo  " > Urbanizacion San Joaquin Nuevo  <option>
                                  <option value=" Urbanizacion Villas del Sol " > Urbanizacion Villas del Sol <option>
                                  <option value=" Urbanizacion El Carmen  " > Urbanizacion El Carmen  <option>
                                  <option value=" Urbanizacion Campo Alegre " > Urbanizacion Campo Alegre <option>
                                  <option value=" Los Portales  " > Los Portales  <option>
                                  <option value=" Urbanizacion Sol de Ica " > Urbanizacion Sol de Ica <option>
                                  <option value=" Urbanizacin Puente Blanco " > Urbanizacin Puente Blanco <option>
                                  <option value=" Las Arenas de Santa Maria " > Las Arenas de Santa Maria <option>
                                  <option value=" Comatrana " > Comatrana <option>
                                  <option value=" Tierra Prometida  " > Tierra Prometida  <option>
                                  <option value=" Cercado de Ica  " > Cercado de Ica  <option>
                                  <option value=" Ciudad Universitaria(UNICA) " > Ciudad Universitaria(UNICA) <option>


                                  </select>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label for="ubicacion_detalle">Ubicación Específica</label>
                                <input type="text" class="s-text form-control" id="ubicacion_detalle" name="ubicacion_detalle" required="required"><br>
                              </div>

                               <div class="col-md-4">
                                <div class="form-group">
                                  <label for="">Personal a Cargo</label>
                                  <input type="text" class=" s-text form-control" id="personal_acargo" name="personal_acargo" required="required">
                                </div>
                              </div>
                            </div>
                          

                              
                                         
                   

                                        

                            <div class="row">
                              <div class="col-md-9">
                                
                              </div>
                              <div class=" col-md-3   ">
                                <div class="form-group float-right ">
                                  
                                <button class="btn btn-dark ml-auto" style="cursor: pointer;" type="submit" id="btnGuardar"><i class="zmdi zmdi-collection-plus"></i> Guardar</button>

                               <button class="btn btn-dark" style="cursor: pointer;" type="button"><i class="zmdi zmdi-close "></i>&nbsp;<a href="inicio.php" style="color: white;"> Cancelar</a> </button>
                                                    </div>
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

<script type="text/javascript" src="scripts/denuncias.js"></script>

