<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tipopublicacion->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Tipopublicacion->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipopublicacion/edit?id='.$Tipopublicacion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipopublicacion/index') ?>">List</a>
