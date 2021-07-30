<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>
<body>

<?php
require_once("Datos.php");

function mostrarPersonas(){
    echo "<table border=1px>";
    echo "<tr>";
        echo "<th>ID Persona</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Telefono</th>";
        echo  "<th>Correo</th>";
    echo "</tr>";

$bdPersonas = new mysqli(SERVIDOR, USUARIO, CLAVE, BD);
if(!$bdPersonas->connect_error){
    $registro = $bdPersonas->query("SELECT * FROM personas");
    if($registro){
        while($i = $registro->fetch_array(MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>" . "$i[id_persona]" . "</td>";
            echo "<td>" . "$i[nombre]" . "</td>";
            echo "<td>" . "$i[apellido]" . "</td>";
            echo "<td>" . "$i[telefono]" . "</td>";
            echo "<td>" . "$i[email]" . "</td>";
            echo "</tr>";
        }
    }
    $bdPersonas->close();
}
else{
    echo "Ocurrio un error: $bdPersonas->connect_error";
}

echo "</table>";
}

function agregarPersona($nombre, $apellido, $telefono,$email){

    $bdPersonas = new mysqli(SERVIDOR, USUARIO, CLAVE, BD);
    if(!$bdPersonas->connect_error){
        $registro = $bdPersonas->query("INSERT INTO personas (nombre, apellido, telefono, email) VALUES('$nombre', '$apellido', '$telefono', '$email')");
        if($registro){
            echo "<p class='caja'>Se añadio correctamente la persona</p>";
        }
        else{
            echo "Ocurrio un error: $bdPersonas->error";
        }
        $bdPersonas->close();
    }
    else{
        echo "Ocurrio un error: $bdPersonas->connect_error";
    }
    
    echo "</table>";
    }

    function actualizarPersona($idPersona, $nombre, $apellido, $telefono, $email){
    
        $bdPersonas = new mysqli(SERVIDOR, USUARIO, CLAVE, BD);
        if(!$bdPersonas->connect_error){
            $registro = $bdPersonas->query("UPDATE personas SET nombre='$nombre', apellido='$apellido', telefono='$telefono', email='$email'  WHERE id_persona=$idPersona");
            if($registro){
                echo "<p class='caja'>Se ha actualizado la persona correctamente donde el ID Persona es: $idPersona <class='caja'>";
            }
            else{
                echo "Ocurrio un error: $bdPersonas->error";
            }
            $bdPersonas->close();
        }
        else{
            echo "Ocurrio un error: $bdPersonas->connect_error";
        }
        
        echo "</table>";
        }
        
?>


<?php
function eliminarPersona($idPersona){
      
    $bdPersonas = new mysqli(SERVIDOR, USUARIO, CLAVE, BD);
    if(!$bdPersonas->connect_error){
        $registro = $bdPersonas->query("DELETE FROM personas WHERE id_persona=$idPersona");
        if($registro){
            echo "<p class='caja'>Se ha eliminado la persona correctamente con el ID PERSONA: $idPersona </p>";
        }
        else{
            echo "Ocurrio un error: $bdPersonas->error";
        }
        $bdPersonas->close();
    }
    else{
        echo "Ocurrio un error: $bdPersonas->connect_error";
    }
    
    echo "</table>";
    }

    function verificarAgregar(){
        if(isset($_POST["idNombre"]) && isset($_POST["idApellido"]) && isset($_POST["idTelefono"]) && isset($_POST["idEmail"])){
            $nombre = $_POST["idNombre"];
            $apellido = $_POST["idApellido"];
            $telefono = $_POST["idTelefono"];
            $email = $_POST["idEmail"];
            agregarPersona($nombre, $apellido, $telefono, $email);
        }
        else{
            echo "No funciona";
        }
    }
    function verificarActualizar(){
        if(isset($_POST["idPersona"])  && isset($_POST["idNombre"]) && isset($_POST["idApellido"]) && isset($_POST["idTelefono"]) && isset($_POST["idEmail"])){
            $idPersona = $_POST["idPersona"];
            $nombre = $_POST["idNombre"];
            $apellido = $_POST["idApellido"];
            $telefono = $_POST["idTelefono"];
            $email = $_POST["idEmail"];
            actualizarPersona($idPersona, $nombre, $apellido, $telefono, $email);
        }
        else{
            echo "No funciona";
        }
    }

    function verificarDelete(){
        if(isset($_POST["idPersona"])){
            $idPersona = $_POST["idPersona"];
            eliminarPersona($idPersona);
        }
        else{
            echo "No funciona";
        } 
    }
?>

</body>
</html>
