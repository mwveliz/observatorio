<h1>Autor</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Ficha autor</th>
      <th>Inedito</th>
      <th>Sexo</th>
      <th>Nacionalidad</th>
      <th>Fecha nacimiento</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Vive</th>
      <th>Tipoautor</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Autors as $Autor): ?>
    <tr>
      <td><a href="<?php echo url_for('autor/show?id='.$Autor->getId()) ?>"><?php echo $Autor->getId() ?></a></td>
      <td><?php echo $Autor->getFichaAutor() ?></td>
      <td><?php echo $Autor->getInedito() ?></td>
      <td><?php echo $Autor->getSexo() ?></td>
      <td><?php echo $Autor->getNacionalidad() ?></td>
      <td><?php echo $Autor->getFechaNacimiento() ?></td>
      <td><?php echo $Autor->getNombre() ?></td>
      <td><?php echo $Autor->getApellido() ?></td>
      <td><?php echo $Autor->getVive() ?></td>
      <td><?php echo $Autor->getTipoautor() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('autor/new') ?>">New</a>
