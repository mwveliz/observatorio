<h1>Clientesatendidoss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Cantidad</th>
      <th>Fache</th>
      <th>Id libreria</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Clientesatendidoss as $Clientesatendidos): ?>
    <tr>
      <td><a href="<?php echo url_for('clientesatendidos/show?id='.$Clientesatendidos->getId()) ?>"><?php echo $Clientesatendidos->getId() ?></a></td>
      <td><?php echo $Clientesatendidos->getCantidad() ?></td>
      <td><?php echo $Clientesatendidos->getFache() ?></td>
      <td><?php echo $Clientesatendidos->getIdLibreria() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('clientesatendidos/new') ?>">New</a>
