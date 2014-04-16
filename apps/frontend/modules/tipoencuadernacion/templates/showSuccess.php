<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tipoencuadernacion->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Tipoencuadernacion->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipoencuadernacion/edit?id='.$Tipoencuadernacion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipoencuadernacion/index') ?>">List</a>
