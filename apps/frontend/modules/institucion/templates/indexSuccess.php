<h1>Institucions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Rif</th>
      <th>Ubicacion</th>
      <th>Id tipoinstitucion</th>
      <th>Sector</th>
      <th>Responsable</th>
      <th>Publica</th>
      <th>Id pais</th>
      <th>Id municipio</th>
      <th>Id parroquia</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Institucions as $Institucion): ?>
    <tr>
      <td><a href="<?php echo url_for('institucion/show?id='.$Institucion->getId()) ?>"><?php echo $Institucion->getId() ?></a></td>
      <td><?php echo $Institucion->getNombre() ?></td>
      <td><?php echo $Institucion->getCorreo() ?></td>
      <td><?php echo $Institucion->getRif() ?></td>
      <td><?php echo $Institucion->getUbicacion() ?></td>
      <td><?php echo $Institucion->getIdTipoinstitucion() ?></td>
      <td><?php echo $Institucion->getSector() ?></td>
      <td><?php echo $Institucion->getResponsable() ?></td>
      <td><?php echo $Institucion->getPublica() ?></td>
      <td><?php echo $Institucion->getIdPais() ?></td>
      <td><?php echo $Institucion->getIdMunicipio() ?></td>
      <td><?php echo $Institucion->getIdParroquia() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('institucion/new') ?>">New</a>
