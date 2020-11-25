<header>
  <a href="../configuracion/configuracion.php?id=<?php echo $_SESSION['id']?>"><img class="foto_perfil" src="../foto/<?php echo $_SESSION['foto'] ?>" alt=""></a>
  <input type="checkbox" name="btn-menu" id="btn-menu">
  <label for="btn-menu"><span class="fa fa-bars menus"></span></label>
  <nav class="menu">
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="">Vídeos</a></li>
      <li><a href="">Subir</a></li>
      <li><a href="../configuracion/configuracion.php?id=<?php echo $_SESSION['id']?>"> Perfil</a></li>
      <li><a href="../php/cerra.php"> Salir</a></li>
    </ul>
  </nav>
</header>
