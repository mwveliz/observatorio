<h1>Tipocaratulas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipocaratulas as $Tipocaratula): ?>
    <tr>
      <td><a href="<?php echo url_for('tipocaratula/show?id='.$Tipocaratula->getId()) ?>"><?php echo $Tipocaratula->getId() ?></a></td>
      <td><?php echo $Tipocaratula->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipocaratula/new') ?>">New</a>
