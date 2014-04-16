<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tipoautor->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Tipoautor->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipoautor/edit?id='.$Tipoautor->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipoautor/index') ?>">List</a>
