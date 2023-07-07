<?php $current_page = $_SERVER['PHP_SELF'];?>
<!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="./index.php" class="nav-item nav-link <?php if($current_page == '/CarWashApp/Home/index.php') echo 'active'; ?>">Inicio</a>
                            <a href="./about.php" class="nav-item nav-link <?php if($current_page == '/CarWashApp/Home/about.php') echo 'active'; ?>">Acerca de Nosotros</a>
                            <a href="./service.php" class="nav-item nav-link <?php if($current_page == '/CarWashApp/Home/service.php') echo 'active'; ?>">Servicio</a>
                            <a href="./location.php" class="nav-item nav-link <?php if($current_page == '/CarWashApp/Home/location.php') echo 'active'; ?>">Punto de lavado</a>
                         
                        </div>
                        <div class="ml-auto">
                            <a class="btn btn-custom" href="../Admin/services">Acceso</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->