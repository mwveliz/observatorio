<h1>Librerias List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
      <th>Id tipolibreria</th>
      <th>Id municipio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Librerias as $Libreria): ?>
    <tr>
      <td><a href="<?php echo url_for('libreria/show?id='.$Libreria->getId()) ?>"><?php echo $Libreria->getId() ?></a></td>
      <td><?php echo $Libreria->getDescripcion() ?></td>
      <td><?php echo $Libreria->getIdTipolibreria() ?></td>
      <td><?php echo $Libreria->getIdMunicipio() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('libreria/new') ?>">New</a>
