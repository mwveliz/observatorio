<h1>Materias List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Materias as $Materia): ?>
    <tr>
      <td><a href="<?php echo url_for('materia/show?id='.$Materia->getId()) ?>"><?php echo $Materia->getId() ?></a></td>
      <td><?php echo $Materia->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('materia/new') ?>">New</a>
