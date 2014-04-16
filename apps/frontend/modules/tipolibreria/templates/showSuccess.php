<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tipolibreria->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Tipolibreria->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipolibreria/edit?id='.$Tipolibreria->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipolibreria/index') ?>">List</a>
