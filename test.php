<?php
// Procesamiento del formulario
$mensajeEnviado = false;
$nombre = "";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);
    $mensajeEnviado = true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Introducción a AWS</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #232f3e;
      color: white;
      padding: 20px;
      text-align: center;
    }
    nav {
      background-color: #37475a;
      padding: 10px;
      text-align: center;
    }
    nav a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
    }
    main {
      padding: 20px;
    }
    section {
      margin-bottom: 30px;
    }
    .highlight {
      background-color: #ff9900;
      padding: 10px;
      border-radius: 5px;
      color: white;
    }
    footer {
      background-color: #232f3e;
      color: white;
      text-align: center;
      padding: 10px;
    }
    button {
      background-color: #ff9900;
      border: none;
      color: white;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
    }
    button:hover {
      background-color: #e68a00;
    }
    .mensaje-exito {
      background-color: #d4edda;
      color: #155724;
      padding: 10px;
      border-radius: 5px;
      margin-top: 15px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Bienvenido a AWS</h1>
    <p>Explora los servicios en la nube de Amazon Web Services</p>
  </header>

  <nav>
    <a href="#servicios">Servicios</a>
    <a href="#beneficios">Beneficios</a>
    <a href="#contacto">Contacto</a>
  </nav>

  <main>
    <section id="servicios">
      <h2>Servicios Principales</h2>
      <ul>
        <li>Amazon EC2 - Computación escalable</li>
        <li>Amazon S3 - Almacenamiento de objetos</li>
        <li>Amazon RDS - Bases de datos relacionales</li>
        <li>AWS Lambda - Funciones sin servidor</li>
      </ul>
      <button onclick="alert('Próximamente más servicios como CloudFront, DynamoDB y más.')">Ver más servicios</button>
    </section>

    <section id="beneficios">
      <h2>¿Por qué usar AWS?</h2>
      <div class="highlight">
        <p>Alta disponibilidad, escalabilidad, seguridad y pago por uso.</p>
      </div>
    </section>

    <section id="contacto">
      <h2>Contáctanos</h2>
      <?php if ($mensajeEnviado): ?>
        <div class="mensaje-exito">
          <p>Gracias por tu mensaje, <strong><?php echo $nombre; ?></strong>. Nos pondremos en contacto pronto.</p>
        </div>
      <?php endif; ?>
      <form method="post" action="">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>
        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 AWS Info. Todos los derechos reservados.</p>
  </footer>
</body>
</html>