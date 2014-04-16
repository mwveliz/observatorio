<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Impresion->getId() ?></td>
    </tr>
    <tr>
      <th>Volumen:</th>
      <td><?php echo $Impresion->getVolumen() ?></td>
    </tr>
    <tr>
      <th>Id edicion:</th>
      <td><?php echo $Impresion->getIdEdicion() ?></td>
    </tr>
    <tr>
      <th>Id tipocaratula:</th>
      <td><?php echo $Impresion->getIdTipocaratula() ?></td>
    </tr>
    <tr>
      <th>Id tipoimpresion:</th>
      <td><?php echo $Impresion->getIdTipoimpresion() ?></td>
    </tr>
    <tr>
      <th>Id tipoencuadernacion:</th>
      <td><?php echo $Impresion->getIdTipoencuadernacion() ?></td>
    </tr>
    <tr>
      <th>Costo:</th>
      <td><?php echo $Impresion->getCosto() ?></td>
    </tr>
    <tr>
      <th>Id tipotripa:</th>
      <td><?php echo $Impresion->getIdTipotripa() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('impresion/edit?id='.$Impresion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('impresion/index') ?>">List</a>
