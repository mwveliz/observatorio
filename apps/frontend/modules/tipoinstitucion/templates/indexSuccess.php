<h1>Tipoinstitucions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipoinstitucions as $Tipoinstitucion): ?>
    <tr>
      <td><a href="<?php echo url_for('tipoinstitucion/show?id='.$Tipoinstitucion->getId()) ?>"><?php echo $Tipoinstitucion->getId() ?></a></td>
      <td><?php echo $Tipoinstitucion->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipoinstitucion/new') ?>">New</a>
