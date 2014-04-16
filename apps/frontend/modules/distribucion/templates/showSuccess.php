<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Distribucion->getId() ?></td>
    </tr>
    <tr>
      <th>Id edicion:</th>
      <td><?php echo $Distribucion->getIdEdicion() ?></td>
    </tr>
    <tr>
      <th>Cantidad ejemplar:</th>
      <td><?php echo $Distribucion->getCantidadEjemplar() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $Distribucion->getFecha() ?></td>
    </tr>
    <tr>
      <th>Id tipodestino:</th>
      <td><?php echo $Distribucion->getIdTipodestino() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('distribucion/edit?id='.$Distribucion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('distribucion/index') ?>">List</a>
