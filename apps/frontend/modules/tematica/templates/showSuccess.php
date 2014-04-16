<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tematica->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Tematica->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tematica/edit?id='.$Tematica->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tematica/index') ?>">List</a>
