<h1>Parroquias List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
      <th>Id municipio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Parroquias as $Parroquia): ?>
    <tr>
      <td><a href="<?php echo url_for('parroquia/show?id='.$Parroquia->getId()) ?>"><?php echo $Parroquia->getId() ?></a></td>
      <td><?php echo $Parroquia->getDescripcion() ?></td>
      <td><?php echo $Parroquia->getIdMunicipio() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('parroquia/new') ?>">New</a>
