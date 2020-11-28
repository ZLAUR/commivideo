<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="../foto/<?php echo $_SESSION['foto']?>" width="30" height="30" class="d-inline-block align-top" alt=""
        loading="lazy">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="">Chat</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">subir un documeto</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="">Subir un nuevo video</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"
                    href="../configuracion/configuracion.php?id=<?php echo $_SESSION['id']?>=<?php echo $_SESSION['email']?>">Configuración</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../php/cerra.php">Salir</a>
            </li>

        </ul>
    </div>
</nav>