<h1>Estados List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Estados as $Estado): ?>
    <tr>
      <td><a href="<?php echo url_for('estado/show?id='.$Estado->getId()) ?>"><?php echo $Estado->getId() ?></a></td>
      <td><?php echo $Estado->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('estado/new') ?>">New</a>
