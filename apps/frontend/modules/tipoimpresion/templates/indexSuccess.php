<h1>Tipoimpresions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipoimpresions as $Tipoimpresion): ?>
    <tr>
      <td><a href="<?php echo url_for('tipoimpresion/show?id='.$Tipoimpresion->getId()) ?>"><?php echo $Tipoimpresion->getId() ?></a></td>
      <td><?php echo $Tipoimpresion->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipoimpresion/new') ?>">New</a>
