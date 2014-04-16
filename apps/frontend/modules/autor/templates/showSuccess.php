<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Autor->getId() ?></td>
    </tr>
    <tr>
      <th>Ficha autor:</th>
      <td><?php echo $Autor->getFichaAutor() ?></td>
    </tr>
    <tr>
      <th>Inedito:</th>
      <td><?php echo $Autor->getInedito() ?></td>
    </tr>
    <tr>
      <th>Sexo:</th>
      <td><?php echo $Autor->getSexo() ?></td>
    </tr>
    <tr>
      <th>Nacionalidad:</th>
      <td><?php echo $Autor->getNacionalidad() ?></td>
    </tr>
    <tr>
      <th>Fecha nacimiento:</th>
      <td><?php echo $Autor->getFechaNacimiento() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $Autor->getNombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $Autor->getApellido() ?></td>
    </tr>
    <tr>
      <th>Vive:</th>
      <td><?php echo $Autor->getVive() ?></td>
    </tr>
    <tr>
      <th>Tipoautor:</th>
      <td><?php echo $Autor->getTipoautor() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('autor/edit?id='.$Autor->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('autor/index') ?>">List</a>
