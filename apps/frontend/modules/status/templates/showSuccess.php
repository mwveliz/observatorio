<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Status->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Status->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Aprobacion:</th>
      <td><?php echo $Status->getAprobacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('status/edit?id='.$Status->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('status/index') ?>">List</a>
