<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Institucion->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $Institucion->getNombre() ?></td>
    </tr>
    <tr>
      <th>Correo:</th>
      <td><?php echo $Institucion->getCorreo() ?></td>
    </tr>
    <tr>
      <th>Rif:</th>
      <td><?php echo $Institucion->getRif() ?></td>
    </tr>
    <tr>
      <th>Ubicacion:</th>
      <td><?php echo $Institucion->getUbicacion() ?></td>
    </tr>
    <tr>
      <th>Id tipoinstitucion:</th>
      <td><?php echo $Institucion->getIdTipoinstitucion() ?></td>
    </tr>
    <tr>
      <th>Sector:</th>
      <td><?php echo $Institucion->getSector() ?></td>
    </tr>
    <tr>
      <th>Responsable:</th>
      <td><?php echo $Institucion->getResponsable() ?></td>
    </tr>
    <tr>
      <th>Publica:</th>
      <td><?php echo $Institucion->getPublica() ?></td>
    </tr>
    <tr>
      <th>Id pais:</th>
      <td><?php echo $Institucion->getIdPais() ?></td>
    </tr>
    <tr>
      <th>Id municipio:</th>
      <td><?php echo $Institucion->getIdMunicipio() ?></td>
    </tr>
    <tr>
      <th>Id parroquia:</th>
      <td><?php echo $Institucion->getIdParroquia() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('institucion/edit?id='.$Institucion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('institucion/index') ?>">List</a>
