<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Estado->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Estado->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('estado/edit?id='.$Estado->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('estado/index') ?>">List</a>
