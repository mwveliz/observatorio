<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Clientesatendidos->getId() ?></td>
    </tr>
    <tr>
      <th>Cantidad:</th>
      <td><?php echo $Clientesatendidos->getCantidad() ?></td>
    </tr>
    <tr>
      <th>Fache:</th>
      <td><?php echo $Clientesatendidos->getFache() ?></td>
    </tr>
    <tr>
      <th>Id libreria:</th>
      <td><?php echo $Clientesatendidos->getIdLibreria() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('clientesatendidos/edit?id='.$Clientesatendidos->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('clientesatendidos/index') ?>">List</a>
