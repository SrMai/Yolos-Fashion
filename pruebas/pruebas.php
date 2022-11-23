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
    
    /* ejemplo de una consulta */

    $var_consulta= "select * from compras";
    $var_resultado = $obj_conexion->query($var_consulta);

    if($var_resultado->num_rows>0)
      {
        echo"<table border='1' align='center'>
         <tr bgcolor='#E6E6E6'>
            <th>Producto</th>
            <th>Precio</th>
            <th>Direccion</th>
            <th>Total</th>
        </tr>";
    
    while ($var_fila=$var_resultado->fetch_array())
    {
        echo "<tr>
        <td>".$var_fila["Producto"]."</td>";
        echo "<td>".$var_fila["Precio"]."</td>";
        echo "<td>".$var_fila["Direccion"]."</td>";
        echo "<td>".$var_fila["Total"]."</td></tr>";
     }
    }
    else
      {
        echo "No hay Registros";
      }

    ?>