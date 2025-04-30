<?php
  include 'temas.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temas</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./images/shotcut/libro.ico"/>
  <style>
    
    /* Main */
    .main-content {
      flex: 1;
      display: grid;
      grid-template-areas:
        "sidebar content-top"
        "sidebar content-bot";
      grid-template-columns: 1fr 3fr;
      gap: 20px;
      padding: 1rem;
    }

    .sidebar {
      grid-area: sidebar;
      width: 100%;
    }

    .sidebar.hidden {
      display: none;
    }

    .sidebar a {
      color: black;
      text-decoration: none;
    }

    .sidebar-content {
      background-color: #6c757d;
      border-radius: 8px;
      max-width: 100%;
      padding: 1rem;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .content-top, .content-bot {
      background: #adb5bd;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-height: 100%;
    }

    .content-top {
      grid-area: content-top;
      display: inline-flex;
      padding: 1.5rem;
      gap: 10px;
    }

    .content-top h1{
      margin: 0;
      padding: 0;
    }

    .content-bot {
      grid-area: content-bot;
      padding: 2rem;
    }

    .content-bot a{
      text-decoration: none;
      color: black;
      transition: color 0.3s ease;
    }

    .content-bot a:hover{
      color: #F0F5F9;
    }

    /* Botón Contenido */
    .toggle-btn {
      background: none;
      border: none;
      padding: 0;
      cursor: pointer;
      display: inline-block;
      transition: transform 0.3s ease;
    }

    .toggle-btn img {
      width: 100%;
      height: auto;
      display: block;
      max-width: 30px;
    }

    .toggle-btn img:hover{
      transform: scale(1.2);
    }

    @media (max-width: 768px) {
      .main-content {
        grid-template-areas:
          "content-top"
          "sidebar"
          "content-bot";
        grid-template-columns: 1fr;
      }
    }


    
  </style>
</head>
<body>
<?php
  include 'banner.php';
?>
<main class="main-content">
  <section class="content-top" id="contenido">
    <button class="toggle-btn" aria-label="Toggle Sidebar" aria-expanded="true" onclick="toggleSidebar()">
      <img src="./images/img_tema/contenido.png" alt="Toggle Sidebar">
    </button>
    <h1><?php echo $temas[$_GET['teme']][0];?></h1>
  </section>

  <section class="sidebar">
    <div class="sidebar-content">
      <h2><strong>Tabla de Contenido</strong></h2>
      <?php
        echo $temas[$_GET['teme']][1];
      ?>
    </div>
  </section>

  <section class="content-bot">
    <?php
      echo $temas[$_GET['teme']][2];
    ?>
  </section>
</main>

<?php
  include 'footer.php';
?>

<script>
  const sidebar = document.querySelector('.sidebar');
  const btn = document.querySelector('.toggle-btn');
  const mainContent = document.querySelector('.main-content');

  function adjustLayout() {
    const isSmallScreen = window.innerWidth <= 768;
    const isHidden = sidebar.classList.contains('hidden');

    if (isSmallScreen) {
      // Para pantallas pequeñas, ajustar rowGap y eliminar grid layout
      mainContent.style.gridTemplateColumns = '';  // Elimina cualquier valor previo de gridTemplateColumns
      mainContent.style.gridTemplateAreas = '';  // Elimina cualquier valor previo de gridTemplateAreas
      mainContent.style.rowGap = isHidden ? '10px' : '20px';
      mainContent.style.columnGap = ''; // Ajustar columna gap a un valor vacío
    } else {
      // Para pantallas grandes, usar gridTemplateColumns y gridTemplateAreas
      mainContent.style.gridTemplateColumns = isHidden ? '1fr' : '1fr 3fr';
      mainContent.style.gridTemplateAreas = isHidden 
        ? '"content-top" "content-bot"' 
        : '"sidebar content-top" "sidebar content-bot"';
      mainContent.style.columnGap = isHidden ? '0px' : '20px';
      mainContent.style.rowGap = '';  // Elimina rowGap en pantallas grandes
    }
  }

  function toggleSidebar() {
    const isHidden = sidebar.classList.toggle('hidden');
    btn.setAttribute('aria-expanded', !isHidden);
    adjustLayout();
  }

  // Ajusta el evento resize
  window.addEventListener('resize', adjustLayout);

  // Llamamos a resize al cargar la página para ajustarlo al tamaño inicial
  window.dispatchEvent(new Event('resize'));
</script>

</body>
</html>
