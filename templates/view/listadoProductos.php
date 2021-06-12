<?php
function CargarTablaProductos($datos)
{
?>
<thead>
  <tr>
    
    <th style="background: #0255a6	;color:#FFF;height: 35px;">Id</th>
    <th style="background: #0255a6;color:#FFF;height: 35px;">Nombre</th>
    <th style="background: #0255a6;color:#FFF;height: 35px;">Referencia</th>
    <th  style="background: #0255a6;color:#FFF;height: 35px;">Precio</th>
    <th  style="background: #0255a6;color:#FFF;height: 35px;">Peso</th>
    <th  style="background: #0255a6;color:#FFF;height: 35px;">Categoria</th>
    <th  style="background: #0255a6;color:#FFF;height: 35px;">Stock</th>
    <th  style="background: #0255a6;color:#FFF;height: 35px;">Fec. creación</th>
    <th  style="background: #0255a6;color:#FFF;height: 35px;">Fec. ult. venta</th>
    <th style="background: #0255a6;color:#FFF;height: 35px;">Acciones</th>
  </tr>
</thead>
<tbody>
  <?php
  if($datos==null){
  echo "<tr><td colspan='9'>No hay productos registrados</tr>";
}
else{
   echo $datos;
    }
    echo "</tbody>";

}
?>