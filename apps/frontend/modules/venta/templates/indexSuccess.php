<h1>Ventas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Cantidad ejemplares</th>
      <th>Fecha</th>
      <th>Id libreria</th>
      <th>Id edicion</th>
      <th>Id tipodestino</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Ventas as $Venta): ?>
    <tr>
      <td><a href="<?php echo url_for('venta/show?id='.$Venta->getId()) ?>"><?php echo $Venta->getId() ?></a></td>
      <td><?php echo $Venta->getCantidadEjemplares() ?></td>
      <td><?php echo $Venta->getFecha() ?></td>
      <td><?php echo $Venta->getIdLibreria() ?></td>
      <td><?php echo $Venta->getIdEdicion() ?></td>
      <td><?php echo $Venta->getIdTipodestino() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('venta/new') ?>">New</a>
