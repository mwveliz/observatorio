<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Historico->getId() ?></td>
    </tr>
    <tr>
      <th>Id edicion:</th>
      <td><?php echo $Historico->getIdEdicion() ?></td>
    </tr>
    <tr>
      <th>Id status:</th>
      <td><?php echo $Historico->getIdStatus() ?></td>
    </tr>
    <tr>
      <th>Id institucion:</th>
      <td><?php echo $Historico->getIdInstitucion() ?></td>
    </tr>
    <tr>
      <th>Fecha inicio:</th>
      <td><?php echo $Historico->getFechaInicio() ?></td>
    </tr>
    <tr>
      <th>Fecha fin:</th>
      <td><?php echo $Historico->getFechaFin() ?></td>
    </tr>
    <tr>
      <th>Status actual:</th>
      <td><?php echo $Historico->getStatusActual() ?></td>
    </tr>
    <tr>
      <th>Id impresion:</th>
      <td><?php echo $Historico->getIdImpresion() ?></td>
    </tr>
    <tr>
      <th>Id distribucion:</th>
      <td><?php echo $Historico->getIdDistribucion() ?></td>
    </tr>
    <tr>
      <th>Id venta:</th>
      <td><?php echo $Historico->getIdVenta() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('historico/edit?id='.$Historico->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('historico/index') ?>">List</a>
