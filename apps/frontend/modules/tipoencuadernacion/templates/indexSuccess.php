<h1>Tipoencuadernacions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipoencuadernacions as $Tipoencuadernacion): ?>
    <tr>
      <td><a href="<?php echo url_for('tipoencuadernacion/show?id='.$Tipoencuadernacion->getId()) ?>"><?php echo $Tipoencuadernacion->getId() ?></a></td>
      <td><?php echo $Tipoencuadernacion->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipoencuadernacion/new') ?>">New</a>
