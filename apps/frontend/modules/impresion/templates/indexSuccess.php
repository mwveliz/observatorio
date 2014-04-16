<h1>Impresions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Volumen</th>
      <th>Id edicion</th>
      <th>Id tipocaratula</th>
      <th>Id tipoimpresion</th>
      <th>Id tipoencuadernacion</th>
      <th>Costo</th>
      <th>Id tipotripa</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Impresions as $Impresion): ?>
    <tr>
      <td><a href="<?php echo url_for('impresion/show?id='.$Impresion->getId()) ?>"><?php echo $Impresion->getId() ?></a></td>
      <td><?php echo $Impresion->getVolumen() ?></td>
      <td><?php echo $Impresion->getIdEdicion() ?></td>
      <td><?php echo $Impresion->getIdTipocaratula() ?></td>
      <td><?php echo $Impresion->getIdTipoimpresion() ?></td>
      <td><?php echo $Impresion->getIdTipoencuadernacion() ?></td>
      <td><?php echo $Impresion->getCosto() ?></td>
      <td><?php echo $Impresion->getIdTipotripa() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('impresion/new') ?>">New</a>
