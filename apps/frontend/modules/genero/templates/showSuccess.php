<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Genero->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Genero->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('genero/edit?id='.$Genero->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('genero/index') ?>">List</a>
