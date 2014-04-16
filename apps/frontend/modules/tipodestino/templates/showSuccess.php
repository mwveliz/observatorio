<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Tipodestino->getId() ?></td>
    </tr>
    <tr>
      <th>Ente publico:</th>
      <td><?php echo $Tipodestino->getEntePublico() ?></td>
    </tr>
    <tr>
      <th>Donacion:</th>
      <td><?php echo $Tipodestino->getDonacion() ?></td>
    </tr>
    <tr>
      <th>Gratuita:</th>
      <td><?php echo $Tipodestino->getGratuita() ?></td>
    </tr>
    <tr>
      <th>Importacion:</th>
      <td><?php echo $Tipodestino->getImportacion() ?></td>
    </tr>
    <tr>
      <th>Exportacion:</th>
      <td><?php echo $Tipodestino->getExportacion() ?></td>
    </tr>
    <tr>
      <th>Otro:</th>
      <td><?php echo $Tipodestino->getOtro() ?></td>
    </tr>
    <tr>
      <th>Id feria:</th>
      <td><?php echo $Tipodestino->getIdFeria() ?></td>
    </tr>
    <tr>
      <th>Id pais:</th>
      <td><?php echo $Tipodestino->getIdPais() ?></td>
    </tr>
    <tr>
      <th>Id estado:</th>
      <td><?php echo $Tipodestino->getIdEstado() ?></td>
    </tr>
    <tr>
      <th>Id libreria:</th>
      <td><?php echo $Tipodestino->getIdLibreria() ?></td>
    </tr>
    <tr>
      <th>Id municipio:</th>
      <td><?php echo $Tipodestino->getIdMunicipio() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tipodestino/edit?id='.$Tipodestino->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tipodestino/index') ?>">List</a>
