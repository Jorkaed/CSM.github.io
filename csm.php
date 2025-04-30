<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSM</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./images/shotcut/house.ico"/>
<style>
/* General */

/* Contenedor de los cuadros con los temas */
.main-home {
  flex: 1;
  padding: 2rem;
  background-color: #dee2e6;
}

/* Cuadros con los temas */
.topics-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
  gap: 2rem;
  width: 100%;
}

/* Cuadro de tema */
.topic-card {
  display: grid;
  grid-template-rows: repeat(3, 1fr);
  grid-template-areas:
    "image"
    "image"
    "description";
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  overflow: hidden; 
}

.topic-card h2 {
  font-size: 1.5rem;
  margin-bottom: 1rem;
  color: #212529;
}

.description {
  grid-area: description;
  text-align: center;
  padding: 1rem;
  background-color: #adb5bd;
}

.description h2{
  margin: 0;
  padding: 0;
}

.image {
  grid-area: image;
  background-position: center;
  background-size: cover;
}

/* Imagenes */
#image1 {
  background-image: url("./images/img_home/sistemas_operativos.webp");
}

#image2 {
  background-image: url("./images/img_home/gestion_procesos.webp");
}

#image3 {
  background-image: url("./images/img_home/gestion_memoria.webp");
}

#image4 {
  background-image: url("./images/img_home/raid.webp");
}

#image5 {
  background-image: url("./images/img_home/virtualizacion.webp");
}

#image6 {
  background-image: url("./images/img_home/es.webp");
}

/* Botón de "Ver más" */
.btn {
  display: inline-block;
  padding: 0.7rem 1.5rem;
  font-size: 1rem;
  color: #fff;
  background-color: #343a40;
  border: none;
  border-radius: 4px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #0056b3; 
}

/* Efecto hover en los cuadros */
.topic-card:hover {
  transform: translateY(-5px); 
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15); 
}

</style>
</head>
<body>
<?php include 'banner.php'; ?>
<main class="main-home">
    <!-- Cuadros con los temas -->
    <section class="topics-container">
        <div class="topic-card">
          <div class="image" id="image1"></div>
          <div class="description">
            <h2>Sistemas Operativos</h2>
            <a href="tema.php?teme=0" class="btn">Ver más</a>
          </div>
        </div>
        <div class="topic-card">
          <div class="image" id="image2"></div>
          <div class="description">
            <h2>Gestión de Procesos</h2>
            <a href="tema.php?teme=1" class="btn">Ver más</a>
          </div>
        </div>
        <div class="topic-card">
          <div class="image" id="image3"></div>
          <div class="description">
            <h2>Gestión de Memoria</h2>
            <a href="tema.php?teme=2" class="btn">Ver más</a>
          </div>
        </div>
        <div class="topic-card">
          <div class="image" id="image4"></div>
          <div class="description">
            <h2>Sistemas RAID</h2>
            <a href="tema.php?teme=3" class="btn">Ver más</a>
          </div>
        </div>
        <div class="topic-card">
          <div class="image" id="image5"></div>
          <div class="description">
            <h2>Virtualización</h2>
            <a href="tema.php?teme=4" class="btn">Ver más</a>
          </div>
        </div>
        <div class="topic-card">
          <div class="image" id="image6"></div>
          <div class="description">
            <h2>Sistemas E/S</h2>
            <a href="tema.php?teme=5" class="btn">Ver más</a>
          </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?> 
</body>
</html>