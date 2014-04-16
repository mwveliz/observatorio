<h1>Generos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Generos as $Genero): ?>
    <tr>
      <td><a href="<?php echo url_for('genero/show?id='.$Genero->getId()) ?>"><?php echo $Genero->getId() ?></a></td>
      <td><?php echo $Genero->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('genero/new') ?>">New</a>
