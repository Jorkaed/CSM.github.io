<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nosotros</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./images/shotcut/nosotros.ico"/>
  <style>
    /*estilos nosotros*/
    .main-nosotros {
      flex: 1;
      display: flex;
      flex-direction: column; 
      align-items: center;
      justify-content: center;
      width: 100%;
      margin-top: 1rem;
      margin-bottom: 1rem;
    }

    .nosotros-container{
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(2, 1fr);
      grid-template-areas:
        "image-1 nosotros"
        "objetivo image-2";
      width: 80%;
      grid-row-gap: 20px;
      padding: 1rem;
    }

    .image-1 {
      grid-area: image-1;
      background-image: url("./images/img_nosotros/nosotros.webp");
      border-radius: 8px 0px 0px 8px;
    } 

    .image-2 {
      grid-area: image-2;
      background-image: url("./images/img_nosotros/objetivo.webp");
      border-radius: 0px 8px 8px 0px;
    }

    .image-1,
    .image-2{
      background-position: center;
      background-size: cover;
    }

    .nosotros {
      grid-area: nosotros;
      background-color: #6c757d;
      border-radius: 0px 8px 8px 0px;
    }

    .objetivo {
      grid-area: objetivo;
      background-color: #adb5bd;
      border-radius: 8px 0px 0px 8px;
    }

    .nosotros,
    .objetivo{
      text-align: center;
      padding: 1rem;
    }

    #video{
      width: 70%;
      height: 25rem;
    }

    #video iframe{
      width: 100%;
      height: 100%;
    }

    @media (max-width: 768px) {
      .nosotros-container {
        grid-template-columns: 1fr;
        grid-template-areas:
        "nosotros"
        "objetivo";
      }
      .nosotros, .objetivo, .image-1, .image-2{
        border-radius: 8px;
      }
      .nosotros, .objetivo{
        background: none;
      }
      .image-1{
        grid-area: nosotros;
      }

      .image-2{
        grid-area: objetivo;
      }

      .image-1, .image-2{
        opacity: 0.2;
      }

      #video{
        width: 100%;
        height: 25rem;
      }
    }
  </style>
</head>
<body>
<?php
  include 'banner.php';
?>
<main class="main-nosotros">
    <div class="nosotros-container">
        <div class="image-1">
        </div>
        <div class="nosotros">
            <h2>Nosotros</h2>
            <p>Somos <strong>CSM</strong>, un grupo de estudiantes de la Universidad de Pamplona. Este sitio forma parte del proyecto final para la asignatura de Plataformas Tecnológicas.</p>  
            <p>El equipo lo integran Stevenson Jorkaed Arias Sanabria, Michael Enrique Vejar Jiménez y César Alejandro Contreras Duarte.</p>
        </div>
        <div class="image-2">
            </div>
            <div class="objetivo">
                <h2>Objetivo del Sitio</h2>
                <p>Este proyecto, <strong>CSM</strong>, es nuestra forma de poner en práctica lo que hemos aprendido sobre sistemas operativos y plataformas tecnológicas. Queremos explicar estos temas de forma simple y con ejemplos prácticos, no solo para cumplir con la asignatura, sino también para afianzar lo que sabemos y compartirlo de manera accesible. Es un esfuerzo conjunto para entender mejor y ayudar a otros a hacerlo también.</p>
            </div>
    </div>
    <div id="video">
    <iframe src="https://www.youtube.com/embed/rjgIdRdF1aQ?si=ee9JNYCdcLrfPaka" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</main>
</body>
<?php
  include 'footer.php';
?>
</html>