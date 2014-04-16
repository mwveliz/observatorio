<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tipotripa->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Tipotripa->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipotripa/edit?id='.$Tipotripa->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipotripa/index') ?>">List</a>
