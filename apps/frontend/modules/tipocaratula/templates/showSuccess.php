<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tipocaratula->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Tipocaratula->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipocaratula/edit?id='.$Tipocaratula->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipocaratula/index') ?>">List</a>
