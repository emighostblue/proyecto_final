<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos Persona</title>
    <link rel="stylesheet" href="../Styles/styles.css">
</head>
<body>
    <h1 class="titulo">Base de datos Persona</h1> <hr>
    <div>
         <a href="../index.html" class="boton">Regresar</a><br><br>
    </div>
    
    <?php
        require_once("../PHP/Persona.php");
        mostrarPersonas();
        echo "</br></br>";
        echo '<input type="button"  value="Agregar Persona" onclick="agregar()">';
        echo '<input type="button"  value="Actualizar Persona" onclick="actualizar()">';
        echo '<input type="button"  value="Eliminar Persona" onclick="eliminar()">';
        echo "<br><br>";
        if(isset($_POST["idValor"])){

            $idValor = $_POST["idValor"];
            switch($idValor){
                case 1:
                    verificarAgregar();
                break;
                    
                case 2:
                    verificarActualizar();
                break;

                case 3:
                    verificarDelete();
                break;
            }
        }
        
        
    ?>
    <br><br>
    <div>

    </div>
<br>

    <form action="AppWeb.php" method="POST" id="formulario_agregar" class="formulario">
        <h2>Agregar Persona a la Base de Datos</h2>
        <label for="idNombre">Nombre: </label><input type="text" id="idNombre" name="idNombre" placeholder="Escribe un nombre" required><br><br>
        <label for="idApellido">Apellido: </label><input type="text" id="idApellido" name="idApellido" placeholder="Escribe un apellido" required><br><br>
        <label for="idTelefono">Telefono: </label><input type="text" id="idTelefono" name="idTelefono" placeholder="Escribe un telefono" required><br><br>
        <label for="idEmail">Email: </label><input type="text" id="idEmail" name="idEmail" placeholder="Escribe un email" required><br><br>
        <input type="hidden" value="1" id="idValor" name="idValor">
        <input type="submit" value="Enviar">
    </form>

<form action="AppWeb.php" method="POST" id="formulario_actualizar" class="formulario">
        <h2>Actualizar Persona de la Base de Datos</h2>
        <label for="idPersona">ID Persona: </label><input type="text" id="idPersona" name="idPersona" placeholder="Escribe un ID Persona" required><br><br>
        <label for="idNombre">Nombre: </label><input type="text" id="idNombre" name="idNombre" placeholder="Escribe un nombre" required><br><br>
        <label for="idApellido">Apellido: </label><input type="text" id="idApellido" name="idApellido" placeholder="Escribe un apellido" required><br><br>
        <label for="idTelefono">Telefono: </label><input type="text" id="idTelefono" name="idTelefono" placeholder="Escribe un telefono" required><br><br>
        <label for="idEmail">Email: </label><input type="text" id="idEmail" name="idEmail" placeholder="Escribe un email" required><br><br>
        <input type="hidden" value="2" id="idValor" name="idValor">
        <input type="submit" value="Enviar">
    </form>


<form action="AppWeb.php" method="POST" id="formulario_eliminar" class="formulario">
        <h2>Eliminar Persona de la Base de Datos</h2>
        <label for="idPersona">ID Persona: </label><input type="text" id="idPersona" name="idPersona" placeholder="Escribe un ID Persona" required><br><br>
        <input type="hidden" value="3" id="idValor" name="idValor">
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <div>
         <a href="../index.html" class="boton">Regresar</a><br><br>
    </div>

<script src="../JS/App.js"></script>
</body>
</html>