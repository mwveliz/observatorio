<h1>Historicos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Id edicion</th>
      <th>Id status</th>
      <th>Id institucion</th>
      <th>Fecha inicio</th>
      <th>Fecha fin</th>
      <th>Status actual</th>
      <th>Id impresion</th>
      <th>Id distribucion</th>
      <th>Id venta</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Historicos as $Historico): ?>
    <tr>
      <td><a href="<?php echo url_for('historico/show?id='.$Historico->getId()) ?>"><?php echo $Historico->getId() ?></a></td>
      <td><?php echo $Historico->getIdEdicion() ?></td>
      <td><?php echo $Historico->getIdStatus() ?></td>
      <td><?php echo $Historico->getIdInstitucion() ?></td>
      <td><?php echo $Historico->getFechaInicio() ?></td>
      <td><?php echo $Historico->getFechaFin() ?></td>
      <td><?php echo $Historico->getStatusActual() ?></td>
      <td><?php echo $Historico->getIdImpresion() ?></td>
      <td><?php echo $Historico->getIdDistribucion() ?></td>
      <td><?php echo $Historico->getIdVenta() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('historico/new') ?>">New</a>
