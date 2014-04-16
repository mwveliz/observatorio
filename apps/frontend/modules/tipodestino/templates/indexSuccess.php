<h1>Tipodestinos List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Ente publico</th>
      <th>Donacion</th>
      <th>Gratuita</th>
      <th>Importacion</th>
      <th>Exportacion</th>
      <th>Otro</th>
      <th>Id feria</th>
      <th>Id pais</th>
      <th>Id estado</th>
      <th>Id libreria</th>
      <th>Id municipio</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipodestinos as $Tipodestino): ?>
    <tr>
      <td><a href="<?php echo url_for('tipodestino/show?id='.$Tipodestino->getId()) ?>"><?php echo $Tipodestino->getId() ?></a></td>
      <td><?php echo $Tipodestino->getEntePublico() ?></td>
      <td><?php echo $Tipodestino->getDonacion() ?></td>
      <td><?php echo $Tipodestino->getGratuita() ?></td>
      <td><?php echo $Tipodestino->getImportacion() ?></td>
      <td><?php echo $Tipodestino->getExportacion() ?></td>
      <td><?php echo $Tipodestino->getOtro() ?></td>
      <td><?php echo $Tipodestino->getIdFeria() ?></td>
      <td><?php echo $Tipodestino->getIdPais() ?></td>
      <td><?php echo $Tipodestino->getIdEstado() ?></td>
      <td><?php echo $Tipodestino->getIdLibreria() ?></td>
      <td><?php echo $Tipodestino->getIdMunicipio() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tipodestino/new') ?>">New</a>
