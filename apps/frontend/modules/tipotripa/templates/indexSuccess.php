<h1>Tipotripas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipotripas as $Tipotripa): ?>
    <tr>
      <td><a href="<?php echo url_for('tipotripa/show?id='.$Tipotripa->getId()) ?>"><?php echo $Tipotripa->getId() ?></a></td>
      <td><?php echo $Tipotripa->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipotripa/new') ?>">New</a>
