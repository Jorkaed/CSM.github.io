<?php
    echo '<header class="banner">
    <a id="logo" href="csm.php"><h1>CSM</h1></a>

    <nav class="navbar" aria-label="Navegación principal">
      <ul id = "menu">
        <li><a href="csm.php">Inicio</a></li>
        <li class="dropdown">
          <a>Temas</a>
          <ul class="submenu">
            <li><a href="tema.php?teme=0">Sistemas Operativos</a></li>
            <li><a href="tema.php?teme=1">Gestión de Procesos</a></li>
            <li><a href="tema.php?teme=2">Gestión de Memoria</a></li>
            <li><a href="tema.php?teme=3">Sistemas RAID</a></li>
            <li><a href="tema.php?teme=4">Virtualización</a></li>
            <li><a href="tema.php?teme=5">Sistemas E/S</a></li>
          </ul>
        </li>
        <li><a href="nosotros.php">Nosotros</a></li>
      </ul>
    </nav>
  </header>';
?>
