<h1>Edicions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Traduccion</th>
      <th>Lengua origen</th>
      <th>Lengua traducir</th>
      <th>Traductor</th>
      <th>Numero reimpresion</th>
      <th>Coedicion</th>
      <th>Id libro</th>
      <th>Corrector</th>
      <th>Coleccion</th>
      <th>Isbn</th>
      <th>Deposito legal</th>
      <th>Diagramador</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Edicions as $Edicion): ?>
    <tr>
      <td><a href="<?php echo url_for('edicion/show?id='.$Edicion->getId()) ?>"><?php echo $Edicion->getId() ?></a></td>
      <td><?php echo $Edicion->getTraduccion() ?></td>
      <td><?php echo $Edicion->getLenguaOrigen() ?></td>
      <td><?php echo $Edicion->getLenguaTraducir() ?></td>
      <td><?php echo $Edicion->getTraductor() ?></td>
      <td><?php echo $Edicion->getNumeroReimpresion() ?></td>
      <td><?php echo $Edicion->getCoedicion() ?></td>
      <td><?php echo $Edicion->getIdLibro() ?></td>
      <td><?php echo $Edicion->getCorrector() ?></td>
      <td><?php echo $Edicion->getColeccion() ?></td>
      <td><?php echo $Edicion->getIsbn() ?></td>
      <td><?php echo $Edicion->getDepositoLegal() ?></td>
      <td><?php echo $Edicion->getDiagramador() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('edicion/new') ?>">New</a>
