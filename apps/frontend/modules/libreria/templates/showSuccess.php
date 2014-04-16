<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Libreria->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Libreria->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Id tipolibreria:</th>
      <td><?php echo $Libreria->getIdTipolibreria() ?></td>
    </tr>
    <tr>
      <th>Id municipio:</th>
      <td><?php echo $Libreria->getIdMunicipio() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('libreria/edit?id='.$Libreria->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('libreria/index') ?>">List</a>
