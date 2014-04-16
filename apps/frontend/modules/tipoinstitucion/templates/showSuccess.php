<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tipoinstitucion->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Tipoinstitucion->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipoinstitucion/edit?id='.$Tipoinstitucion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipoinstitucion/index') ?>">List</a>
