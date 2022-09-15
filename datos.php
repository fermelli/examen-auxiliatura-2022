<?php

$con = new mysqli('localhost', 'root', '', 'bd_academica');

$nro = $_GET['nro'];
$materia = $_GET['materia'];


$query = "SELECT * FROM alumnos where materia = '$materia';";

$result =  $con->query($query, MYSQLI_ASSOC);

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
?>
    <tr>
        <td><?= $row['fotografia']; ?></td>
        <td><?= $row['nombres_apellidos']; ?></td>
    </tr>
<?php
}
