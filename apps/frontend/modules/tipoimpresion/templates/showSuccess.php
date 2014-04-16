<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tipoimpresion->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Tipoimpresion->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipoimpresion/edit?id='.$Tipoimpresion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipoimpresion/index') ?>">List</a>
