<?php
$servername = "localhost";  // Cambia esto si tu base de datos está en otro servidor
$username = "root";
$password = "";
$dbname = "menu";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
<?php
// Incluir el archivo db.php para establecer la conexión
require_once 'menu.php';

// Consulta SQL para obtener los productos del catálogo
$sql = "SELECT id, plantilla, precio, clase FROM plantillas";
$result = $conn->query($sql);
?>

<!-- Aquí va el HTML para mostrar el catálogo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... Tu código para enlaces a CSS y otros metadatos ... -->
</head>
<body>
    <!-- ... Tu código HTML para el encabezado y otras secciones ... -->

    <!-- Sección de productos -->
    <section class="products" id="products">
        <h1 class="heading"> Nuestros <span>productos</span> </h1>

        <div class="box-container">
            <?php
            // Mostrar los productos obtenidos de la base de datos
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="box">';
                    echo '<div class="icons">';
                    // Aquí puedes agregar íconos para carrito, corazón, etc.
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="content">';
                    echo '<h3>' . $row["nombre"] . '</h3>';
                    echo '<div class="price">' . $row["precio"] . '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No se encontraron productos en el catálogo.";
            }
            ?>
        </div>
    </section>

    <!-- ... Tu código HTML para otras secciones ... -->

    <!-- ... Tu código para enlaces a archivos JavaScript y el cierre del cuerpo y la etiqueta HTML ... -->
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conn->close();
?>