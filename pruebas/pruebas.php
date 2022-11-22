<?php
    $cons_usuario="root";
    $cons_contra="";
    $cons_base_datos="Yolo";
    $cons_equipo="localhost";
    
    $obj_conexion = 
    mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
    if(!$obj_conexion)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
        echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
    }
    
    /* ejemplo de una consulta */

    $var_consulta= "select * from users";
    $var_resultado = $obj_conexion->query($var_consulta);

    if($var_resultado->num_rows>0)
      {
        echo"<table border='1' align='center'>
         <tr bgcolor='#E6E6E6'>
            <th>firstname</th>
            <th>edad</th>
            <th>email</th>
            <th>mobilenumber</th>
            <th>password</th>
        </tr>";
    
    while ($var_fila=$var_resultado->fetch_array())
    {
        echo "<tr>
        <td>".$var_fila["firstname"]."</td>";
        echo "<td>".$var_fila["edad"]."</td>";
        echo "<td>".$var_fila["email"]."</td>";
        echo "<td>".$var_fila["mobilenumber"]."</td>";
        echo "<td>".$var_fila["password"]."</td></tr>";
     }
    }
    else
      {
        echo "No hay Registros";
      }

    ?>