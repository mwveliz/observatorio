<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Venta->getId() ?></td>
    </tr>
    <tr>
      <th>Cantidad ejemplares:</th>
      <td><?php echo $Venta->getCantidadEjemplares() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $Venta->getFecha() ?></td>
    </tr>
    <tr>
      <th>Id libreria:</th>
      <td><?php echo $Venta->getIdLibreria() ?></td>
    </tr>
    <tr>
      <th>Id edicion:</th>
      <td><?php echo $Venta->getIdEdicion() ?></td>
    </tr>
    <tr>
      <th>Id tipodestino:</th>
      <td><?php echo $Venta->getIdTipodestino() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('venta/edit?id='.$Venta->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('venta/index') ?>">List</a>
