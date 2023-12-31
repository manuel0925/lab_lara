<?php include('inc/admin/head.php');


?>


<style>
    .MY_user-img {
        width: 2.25rem !important;
        height: 2.25rem;
        /*        margin: .625rem .625rem .625rem 0 !important;*/
        -webkit-border-radius: 120px !important;
        border-radius: 120px !important;
    }
</style>

<body>





    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->

    <!-- begin #page-container -->
    <div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar-default">


            <!-- end navbar-header -->
            <div id="header" class="header navbar-inverse">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <a href="inicio" class="navbar-brand"><img src="data/img/corporativo/logo_lara.jpeg" style="margin-right:10px;width:150;height:100px"></img> </a>
                    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- end navbar-header -->

                <!-- begin header-nav -->
                <ul class="navbar-nav navbar-right">


                    <li class="dropdown navbar-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="data/img/sistema/no_imagen.png" alt="" />
                            <span class="d-none d-md-inline"><?php echo $user[0]["nombre"] ?></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" id="cerrar_sesion" class="dropdown-item">Cerrar Sesion</a>
                        </div>
                    </li>
                </ul>
                <!-- end header-nav -->
            </div>
            <!-- end #header -->


        </div>
        <!-- end #header -->

        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            <!-- begin sidebar scrollbar -->
            <div data-scrollbar="true" data-height="100%">
                <!-- begin sidebar user -->

                <!-- end sidebar user -->
                <!-- begin sidebar nav -->
                <ul class="nav">
                    <li class="nav-header">Navigation</li>

                   
                    <?php
                    krsort($menus);
                    foreach ($menus as $value_gruop) { ?>
                    
                        <?php if ($value_gruop["SUBMENU"]) { ?>
                            <?php foreach ($value_gruop[0] as $value_menu) { ?>

                                <li class="has-sub">
                                    <a href="javascript:;">
                                        <b class="caret"></b>
                                        <?php echo $value_menu["ICONO"] ?>
                                        <span><?php echo $value_menu["MENU_PADRE"] ?></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <?php foreach ($value_menu["SUBMENU"] as  $value_submenu) { ?>


                                            <li><a href="<?php echo $value_submenu["URL"] ?>" data-toggle="ajax">
                                                    <?php echo $value_submenu["ICONO"] ?>
                                                    <span><?php echo $value_submenu["NOMBRE"] ?></span>
                                                </a>
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </li>
                            <?php }  ?>
                        <?php } else { ?>

                            <?php foreach ($value_gruop[0] as $value_menu) { ?>

                                <li><a href="<?php echo $value_menu["URL"] ?>" data-toggle="ajax">
                                        <?php echo $value_menu["ICONO"] ?>
                                        <span><?php echo $value_menu["NOMBRE"] ?></span>
                                    </a>
                                </li>

                            <?php } ?>
                        <?php } ?>
                    <?php } ?>

                    <!-- <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fa fa-flask" aria-hidden="true"></i>
                            <span>Mantenimiento Aanalsis</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="area_analitica/areas" data-toggle="ajax">
                                    <i class="fa fa-flask" aria-hidden="true"></i>
                                    <span>Area analitica</span>
                                </a>
                            </li>

                            <li>
                                <a href="analisis/analisis" data-toggle="ajax">
                                    <i class="fas fa-syringe"></i>
                                    <span>Analisis</span>
                                </a>
                            </li>
                            <li>
                                <a href="parametros/listaParametros" data-toggle="ajax">
                                    <i class="fas fa-poll"></i>
                                    <span>parametros</span>
                                </a>
                            </li>
                            <li>
                                <a href="configuracion_analisis/configuracion" data-toggle="ajax">
                                    <i class="fas fa-poll"></i>
                                    <span>configuracion analisis</span>
                                </a>
                            </li>


                        </ul>

                    </li>
                    <li>
                        <a href="ordenes/ordenes" data-toggle="ajax">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span>Ordenes</span>
                        </a>
                    </li>
                    <li>
                        <a href="Pacientes" data-toggle="ajax">
                            <i class="fab fa-accessible-icon" aria-hidden="true"></i>
                            <span>Pacientes</span>
                        </a>
                    </li>

                    <li>
                        <a href="reporte_resultado" data-toggle="ajax">
                            <i class="fas fa-poll"></i>
                            <span>Reporte resultado</span>
                        </a>
                    </li>
                    <li>
                        <a href="redes_sociales" data-toggle="ajax">
                            <i class="fas fa-thumbs-up"></i>
                            <span>Redes sociales</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            <i class="fas fa-users"></i>
                            <span>Mantenimiento Usuarios</span>
                        </a>

                        <ul class="sub-menu">
                            <li> <a href="usuarios" data-toggle="ajax">
                                    <i class="fas fa-users"></i>
                                    <span> Usuarios</span>
                                </a>
                            </li>
                        </ul>
                    </li>



                    <!-- begin sidebar minify button -->

                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content"></div>
        <!-- end #content -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->

    <?php include('inc/admin/footer.php'); ?>