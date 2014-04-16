<h1>Tipolibrerias List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipolibrerias as $Tipolibreria): ?>
    <tr>
      <td><a href="<?php echo url_for('tipolibreria/show?id='.$Tipolibreria->getId()) ?>"><?php echo $Tipolibreria->getId() ?></a></td>
      <td><?php echo $Tipolibreria->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipolibreria/new') ?>">New</a>
