<?php 
  if (strlen(session_id()) < 1) {
    session_start();
  }

 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sistema de Gestión de Datos PNP - ICA </title>

              <link rel="icon" type="image/png" href="../public/img/escudo.ico" />

        <!-- Vendor styles -->
      
        <link rel="stylesheet" href="../public/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="../public/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <!--<link rel="stylesheet" href="../public/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">-->
        <!-- Vendor styles -->
        <link rel="stylesheet" href="../public/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="../public/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="../public/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="../public/vendors/bower_components/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="../public/vendors/bower_components/dropzone/dist/dropzone.css">
        <link rel="stylesheet" href="../public/vendors/bower_components/flatpickr/dist/flatpickr.min.css" />
        <link rel="stylesheet" href="../public/vendors/bower_components/nouislider/distribute/nouislider.min.css">
        <link rel="stylesheet" href="../public/vendors/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css">
        <link rel="stylesheet" href="../public/vendors/bower_components/trumbowyg/dist/ui/trumbowyg.min.css">
        <link rel="stylesheet" href="../public/vendors/bower_components/rateYo/min/jquery.rateyo.min.css">


      <!--  <link rel="stylesheet" href="../public/css/bootstrap-select.min.css">-->

        <!-- App styles -->
        <link rel="stylesheet" href="../public/css/app.min.css">    
        <link rel="stylesheet" href="../public/personalizado/styles.css">

        
    </head>

    <body data-sa-theme="3">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="inicio.php">Sis. de Gestión de Datos</a></h1>
                </div>

                <form class="search">
                    <div class="search__inner">
                        <input type="text" class="search__text" placeholder="">
                        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
                    </div>
                </form>

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

              

                 

                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-cast-connected"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="dropdown-header">Aplicaciones Externas</div>

                            <div class="listview listview--hover">
                                <a href="https://denuncias.pnp.gob.pe/denuncias/" target="blank" class="listview__item">
                                    <div class="listview__content text-center">
                                        <div class="listview__heading" >
                                            Denuncias Policiales - SIDPOL
                                        </div>

                                       
                                    </div>
                                </a>

                            
                            </div>

                             <div class="listview listview--hover">
                                <a href="http://www2.osiptel.gob.pe/SIGEM/" target="blank" class="listview__item">
                                    <div class="listview__content text-center">
                                        <div class="listview__heading" >
                                            Verificación de Celular OSIPTEL - IMEI
                                        </div>

                                       
                                    </div>
                                </a>

                            
                            </div>

                              <div class="listview listview--hover">
                                <a href="https://www.cerberusapp.com/" target="blank" class="listview__item">
                                    <div class="listview__content text-center">
                                        <div class="listview__heading" >
                                            Rastreo de Equipos Móviles - CERBERUS
                                        </div>

                                       
                                    </div>
                                </a>

                            
                            </div>
                        </div>
                    </li>

                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                
                                <a style="padding: 5px;" class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-file-text"></i>
                                    <small class="">Documentos Word, Excel, PDF</small>
                                </a>
                                <a style="padding: 5px;" class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-folder"></i>
                                    <small class="">Software, Herramientas de Apoyo</small>
                                </a>
                                <a style="padding: 5px;" class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-collection-pdf"></i>
                                    <small class=""> Manual de Usuario</small>
                                </a>
                               
                            </div>
                        </div>
                    </li>

                   <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-settings"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                         
                            <a href="#" class="dropdown-item"></a>
                           
                        </div>
                    </li>

                    

                      <li class="dropdown hidden-xs-down">
                       
                             <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="../public/imagenes/user.jpg" alt="">@<?php echo $_SESSION['login']; ?>
                                <span class=" fa fa-angle-down"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right">
                                  
                                <a href="cambiarclave.php" class="dropdown-item">Cambiar Contraseña</a>
                              
                                <a href="../manual/manual.pdf" class="dropdown-item">Ayuda</a>
                              <a href="../controllers/usuario.php?op=salir"  class="dropdown-item">Cerrar Sesión <i class="zmdi zmdi-sign-in pull-right"></i></a>
                              
                              </div>

                              
                            <!--<a href="../controllers/usuario.php?op=salir" ><i class="zmdi zmdi-power"></i></a>-->
                   

                    </li>
                </ul>

             
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">

                   
                          <div class="">
                            <div class="text-center">
                                <img src="../public/img/policia.png" height="150px;" class="" alt=""><br><br>
                                <p><?php echo $_SESSION['grado']; ?></p>
                                <h6><?php echo $_SESSION['nombre']; ?></h6>
                                
                            </div>

                         
                        </div>

                  

                    <ul class="navigation">
                        <li class=""><a href="inicio.php"><i class="zmdi zmdi-home"></i>INICIO</a></li>
                        
                            
               <?php 
                if ($_SESSION['registro_denuncias']==1) {
                  echo '<li class="navigation__sub @@variantsactive">
                            <a href=""><i class="zmdi zmdi-view-week"></i>REGISTRO DE DENUNCIAS</a>

                            <ul>
                                <li class="@@sidebaractive"><a href="registro_denuncias.php">Registro de  Denuncias</a></li>
                                <li class="@@sidebaractive"><a href="listado_denuncias.php">Listado de  Denuncias</a></li>
                               
                            </ul>
                        </li>';
                }
                ?>



                <li class="navigation__sub @@variantsactive">
                            <a href=""><i class="zmdi zmdi-directions"></i>SECCION TRANSITO</a>

                            <ul>
                                <li class="@@sidebaractive"><a href="registro_transito.php">Registro Casos</a></li>
                                <li class="@@sidebaractive"><a href="listado_transito.php">Listado Casos</a></li>
                               
                            </ul>
                        </li>


                                    
               <?php 
                if ($_SESSION['personal_comisaria']==1) {
                  echo '   <li class="navigation__sub @@variantsactive">
                            <a href=""><i class="zmdi zmdi-accounts"></i>PERSONAL COMISARIA</a>

                            <ul>
                                <li class="@@sidebaractive"><a href="registro_personal.php">Registro de  Personal</a></li>
                               
                                <li class="@@hiddensidebarboxedactive"><a href="listado_personal.php">Lista de Personal</a></li>
                            </ul>
                        </li>';
                }
                ?>


                      
                        
                          <?php 
                if ($_SESSION['usuarios']==1) {
                  echo ' <li class="@@widgetactive"><a href="usuarios.php"><i class="zmdi zmdi-accounts-list"></i>USUARIOS</a></li>';
                }
                ?>


                    

                    </ul>
                </div>
            </aside>

            <div class="themes">
    <div class="scrollbar-inner">
        <a href="" class="themes__item active" data-sa-value="1"><img src="../public/img/bg/3.jpg" alt=""></a>
        
    </div>
</div>
 