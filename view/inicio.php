<?php 
    require 'header.php';

    require '../conexion/Conexion.php';
?>
       

           <section class="content">
               
                    <h2>Reportes Estadísticos </h2><br>
    
         

                       
                             <div class="row quick-stats">

                              <div class="col-sm-6 col-md-4">
                                <div class="quick-stats__item">
                                <div class="quick-stats__info">
                                     <?php foreach ($conexion->query('
                                            SELECT COUNT(iddenuncias) as denuncias FROM denuncias WHERE DAY(fecha_registro) = DAY(NOW())') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
        
                                        <h2><?php echo $row['denuncias'].' &nbsp '.'  Denuncias' // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></h2>

                                    <?php
                                        }
                                    ?>
           
                                    <small>Nro. de Registros de Hoy (
                                    <script>
                                    var dias = new Array ("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                                    var f=new Date();
                                    document.write( dias[f.getDay()] );
                                </script>

                                ).</small>
                                </div>

                                <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
                            </div>
                              </div>
                                 <div class="col-sm-6 col-md-4">
                                     <div class="quick-stats__item">
                                          <div class="quick-stats__info">
                                               <?php foreach ($conexion->query('
                                               SELECT COUNT(iddenuncias) as denuncias 
                                               FROM denuncias 
                                               WHERE MONTH(fecha_registro) = MONTH(NOW())
                                               ') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
                  
                                                  <h2><?php echo $row['denuncias'].' &nbsp '.'  Denuncias' // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></h2>

                                              <?php
                                                  }
                                              ?>
                     
                                              <small>Nro. de Registros del mes (
                                              <script>
                                                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                                var f=new Date();
                                                document.write( meses[f.getMonth()] );
                                            </script>

                                         ).</small>
                                          </div>

                                          <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
                                      </div>
                                </div>



                                

                                  <div class="col-sm-6 col-md-4">
                                  <div class="quick-stats__item">
                                      <div class="quick-stats__info">
                                           <?php foreach ($conexion->query('SELECT COUNT(tipo_denuncia) as num from denuncias ') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
              
                                              <h2><?php echo $row['num'].' &nbsp '.'  Denuncias' // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></h2>

                                          <?php
                                              }
                                          ?>
                 
                                          <small>Nro. Total de Registros hasta la fecha.</small>
                                      </div>

                                      <div class="quick-stats__chart peity-bar">6,4,8,6,5,6,7,8,3,5,9</div>
                                  </div>
                                  </div>
                            
                             </div>   


                                 <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Cantidad de denuncias mensuales hasta la fecha</h4>
                                                <h6 class="card-subtitle">Grafico Estadístico de valores que muestran la cantidad de denuncias</h6>

                                                <div class="flot-chart flot-curved-line"></div>
                                                <div class="flot-chart-legends flot-chart-legends--curved"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        
                              <div class="card">
                                 <div class="card-body">
                                <h4 class="card-title">Delitos con mayor cantidad de incidencias </h4>
                                 <h6 class="card-subtitle">Gráfico con estadisticas mensuales segun el tipo de delito</h6>

                                <div class="flot-chart flot-pie"></div>
                                <div class="flot-chart-legends flot-chart-legend--pie"></div>
                            </div>
                              </div>
                                    </div>
                                </div>

                          


                        
                   

             
                            <div class="row quick-stats">
                        



                                       <div class="col-md-6">
                                            <div class="quick-stats__item">
                                                <div class="quick-stats__info col-sm-12">
                                                     <h5>Lugares con mayor Nro. Denuncias (Top5)</h5><br>
                                                     <?php foreach ($conexion->query('SELECT ubicacion, count(ubicacion) as num from denuncias group by ubicacion order by num DESC LIMIT 5') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
                                                     <table class=" table  table-sm mb-0  "  >
                                                        
                                                           <td><h5><?php echo $row['ubicacion'] ?></h5></td>
                                                            <td class="text-right"><h5><?php echo $row['num'] ?></h5></td>
                                                        
                                                        
                                                     </table>
                                                         


                                                    <?php
                                                        }
                                                    ?>
                                                   
                                                </div>

                                               
                                            </div>
                                        </div>

                                     
                                        <div class=" col-md-6">
                                            <div class="quick-stats__item">
                                                <div class="quick-stats__info col-sm-12">
                                                     <h5>Delitos con mayor Nro. Denuncias (Top5)</h5><br>
                                                     <?php foreach ($conexion->query('SELECT COUNT(tipo_denuncia) as num, tipo_denuncia from denuncias GROUP by tipo_denuncia ORDER by num desc LIMIT 5') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
                                                     <table class="table  table-sm mb-0" >
                                                        
                                                           <td><h5><?php echo $row['tipo_denuncia'] ?></h5></td> 
                                                           <td class="text-right"><h5><?php echo $row['num'] ?></h5></td>
                                                        
                                                        
                                                     </table>
                                                         


                                                    <?php
                                                        }
                                                    ?>
                                                   
                                                </div>

                                               
                                            </div>
                                        </div>

                              
                            </div>
                        
              
               
                  
                    


        
                      
               


                

             
            </section>

<?php 

    require 'footer.php';

?>