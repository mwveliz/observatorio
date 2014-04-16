<h1>Tematicas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tematicas as $Tematica): ?>
    <tr>
      <td><a href="<?php echo url_for('tematica/show?id='.$Tematica->getId()) ?>"><?php echo $Tematica->getId() ?></a></td>
      <td><?php echo $Tematica->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tematica/new') ?>">New</a>
