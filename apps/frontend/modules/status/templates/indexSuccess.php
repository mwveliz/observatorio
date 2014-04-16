<h1>Statuss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
      <th>Aprobacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Statuss as $Status): ?>
    <tr>
      <td><a href="<?php echo url_for('status/show?id='.$Status->getId()) ?>"><?php echo $Status->getId() ?></a></td>
      <td><?php echo $Status->getDescripcion() ?></td>
      <td><?php echo $Status->getAprobacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('status/new') ?>">New</a>
