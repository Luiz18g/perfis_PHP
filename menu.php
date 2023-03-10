<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="img/perfil.gif" height="60" class="rounded-circle" />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="perfil-painel.php">Painel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil-novo.php">Adicionar novo</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Avatar -->
            <a href="logout.php">
                <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/robert.jpg" class="rounded-circle" height="30" alt="Black and White Portrait of a Man" loading="lazy" />
                <?php echo $_SESSION["usuario"]; ?> [ Sair ]
            </a>
        </div>
    </div>
    <!-- Right elements -->
</nav>
<!-- Navbar -->