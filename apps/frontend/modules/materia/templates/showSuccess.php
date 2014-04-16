<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Materia->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Materia->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('materia/edit?id='.$Materia->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('materia/index') ?>">List</a>
