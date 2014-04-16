<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Parroquia->getId() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Parroquia->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Id municipio:</th>
      <td><?php echo $Parroquia->getIdMunicipio() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('parroquia/edit?id='.$Parroquia->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('parroquia/index') ?>">List</a>
