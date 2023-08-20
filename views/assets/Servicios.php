<!DOCTYPE html>
<html>

<head>
  <title>Servicios</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/Servicio.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!-- Pull test -->

<body>

  <!-- SIDEBAR -->
  <div class="Navegador w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="miSidebar">
    <button class="BotonCerrar w3-bar-item w3-button w3-large" onclick="Cerrar_Nav()">Cerrar &times;</button>
    <a href="Index.html" class="OpcionNav w3-button w3-bar-item"><br>Inicio</a>
    <a href="Login.html" class="OpcionNav w3-button w3-bar-item"><br>Ingresar a sistema</a>
    <a href="TiendaVirtual.html" class="OpcionNav w3-button w3-bar-item"><br>Tienda Virtual</a>
    <a href="Servicios.html" class="OpcionNav w3-button w3-bar-item"><br>Servicios</a>
    <a href="Citas.html" class="OpcionNav w3-button w3-bar-item"><br>Reservacion de Cita</a>
    <a href="Nosotros.html" class="OpcionNav w3-button w3-bar-item"><br>Nosotros</a>
  </div>

  <div id="main">
    <div class="contenedorNav">
      <button id="AbrirNav" class="BotonNav" onclick="Abrir_Nav()" > <i class="fa-solid fa-house fa-beat-fade fa-2xl" style="color: #faa0fc;"></i> </button> <!-- lineas horizonrales  &#9776-->
    </div>
  </div>

  <h1 class="titulo">Servicios<br></h1>

  <?php
$servidor = "localhost:3306";
$usuario = "root";
$contrasena = "";
$dbnombre = "SC502_2C2023_G2";

$conn = mysqli_connect($servidor, $usuario, $contrasena, $dbnombre);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener datos de la tabla Servicios
$query = "SELECT Nombre_Servicio, descripcion, ImagenSer FROM Servicios";
$result = mysqli_query($conn, $query);
?>

<!-- Mostrar servicios -->
<div class="servicios">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="servicio">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['ImagenSer']) . '" alt="' . $row['Nombre_Servicio'] . ' '. $row['descripcion'] .'">';
        echo '<h2>' . $row['Nombre_Servicio'] . '</h2>';
        echo '<p>' . $row['descripcion'] . '</p>';
        echo '</div>';
    }
    ?>
</div>

  <!-- FOOTER -->
  <footer class="footerNosotros text-light">
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Nancy's Salon
            </h6>
            <p>
              Salon de belleza con una gran variedad de servicios para brindar. Ademas vendemos productos
              de alta
              gama para el cuidado de tu cabello, uñas y piel. <br> ¡Agenda tu cita con nosotros!

            </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
              Navegar
            </h6>
            <p>
              <a href="Index.html" class="link-light">Inicio</a>
            </p>
            <p>
              <a href="Login.html" class="link-light">Login</a>
            </p>
            <p>
              <a href="TiendaVirtual.html" class="link-light">Tienda Virtual</a>
            </p>
            <p>
              <a href="Citas.html" class="link-light">Reservar Cita</a>
            </p>
            <p>
              <a href="Nosotros.html" class="link-light">Nosotros</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> San José, Costa Rica</p>
            <p>
              <i class="fas fa-envelope me-3"></i>

              Centrodebellezanancyssalon@gmail.com

            </p>
            <p><i class="fas fa-phone me-3"></i> +506 8990-2392</p>
            <p><i class="fas fa-phone me-3"></i> +506 2229 1726</p>
          </div>
        </div>
      </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold">Nancy Salon</a>
    </div>
  </footer>

  <script src="js/Servicios.js"></script>

</body>

</html>