<h1>Tipoautors List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipoautors as $Tipoautor): ?>
    <tr>
      <td><a href="<?php echo url_for('tipoautor/show?id='.$Tipoautor->getId()) ?>"><?php echo $Tipoautor->getId() ?></a></td>
      <td><?php echo $Tipoautor->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipoautor/new') ?>">New</a>
