<h1>Tipopublicacions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipopublicacions as $Tipopublicacion): ?>
    <tr>
      <td><a href="<?php echo url_for('tipopublicacion/show?id='.$Tipopublicacion->getId()) ?>"><?php echo $Tipopublicacion->getId() ?></a></td>
      <td><?php echo $Tipopublicacion->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipopublicacion/new') ?>">New</a>
