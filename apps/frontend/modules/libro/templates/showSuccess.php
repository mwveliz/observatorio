<table>
  <tbody>
    <tr>
      <th>Titulo:</th>
      <td><?php echo $Libro->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Subtitulo:</th>
      <td><?php echo $Libro->getSubtitulo() ?></td>
    </tr>
    <tr>
      <th>Id genero:</th>
      <td><?php echo $Libro->getIdGenero() ?></td>
    </tr>
    <tr>
      <th>Id tematica:</th>
      <td><?php echo $Libro->getIdTematica() ?></td>
    </tr>
    <tr>
      <th>Id autor:</th>
      <td><?php echo $Libro->getIdAutor() ?></td>
    </tr>
    <tr>
      <th>Id materia:</th>
      <td><?php echo $Libro->getIdMateria() ?></td>
    </tr>
    <tr>
      <th>Id tipopublicacion:</th>
      <td><?php echo $Libro->getIdTipopublicacion() ?></td>
    </tr>
    <tr>
      <th>Sinopsis:</th>
      <td><?php echo $Libro->getSinopsis() ?></td>
    </tr>
    <tr>
      <th>Cantidad libro:</th>
      <td><?php echo $Libro->getCantidadLibro() ?></td>
    </tr>
    <tr>
      <th>Compilador:</th>
      <td><?php echo $Libro->getCompilador() ?></td>
    </tr>
    <tr>
      <th>Id:</th>
      <td><?php echo $Libro->getId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('libro/edit?id='.$Libro->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('libro/index') ?>">List</a>
