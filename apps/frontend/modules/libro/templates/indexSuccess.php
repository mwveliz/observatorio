<h1>Libros List</h1>

<table>
  <thead>
    <tr>
      <th>Titulo</th>
      <th>Subtitulo</th>
      <th>Id genero</th>
      <th>Id tematica</th>
      <th>Id autor</th>
      <th>Id materia</th>
      <th>Id tipopublicacion</th>
      <th>Sinopsis</th>
      <th>Cantidad libro</th>
      <th>Compilador</th>
      <th>Id</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Libros as $Libro): ?>
    <tr>
      <td><?php echo $Libro->getTitulo() ?></td>
      <td><?php echo $Libro->getSubtitulo() ?></td>
      <td><?php echo $Libro->getIdGenero() ?></td>
      <td><?php echo $Libro->getIdTematica() ?></td>
      <td><?php echo $Libro->getIdAutor() ?></td>
      <td><?php echo $Libro->getIdMateria() ?></td>
      <td><?php echo $Libro->getIdTipopublicacion() ?></td>
      <td><?php echo $Libro->getSinopsis() ?></td>
      <td><?php echo $Libro->getCantidadLibro() ?></td>
      <td><?php echo $Libro->getCompilador() ?></td>
      <td><a href="<?php echo url_for('libro/show?id='.$Libro->getId()) ?>"><?php echo $Libro->getId() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('libro/new') ?>">New</a>
