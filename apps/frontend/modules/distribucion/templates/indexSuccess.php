<h1>Distribucions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Id edicion</th>
      <th>Cantidad ejemplar</th>
      <th>Fecha</th>
      <th>Id tipodestino</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Distribucions as $Distribucion): ?>
    <tr>
      <td><a href="<?php echo url_for('distribucion/show?id='.$Distribucion->getId()) ?>"><?php echo $Distribucion->getId() ?></a></td>
      <td><?php echo $Distribucion->getIdEdicion() ?></td>
      <td><?php echo $Distribucion->getCantidadEjemplar() ?></td>
      <td><?php echo $Distribucion->getFecha() ?></td>
      <td><?php echo $Distribucion->getIdTipodestino() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('distribucion/new') ?>">New</a>
