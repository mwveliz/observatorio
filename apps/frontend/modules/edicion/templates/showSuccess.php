<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Edicion->getId() ?></td>
    </tr>
    <tr>
      <th>Traduccion:</th>
      <td><?php echo $Edicion->getTraduccion() ?></td>
    </tr>
    <tr>
      <th>Lengua origen:</th>
      <td><?php echo $Edicion->getLenguaOrigen() ?></td>
    </tr>
    <tr>
      <th>Lengua traducir:</th>
      <td><?php echo $Edicion->getLenguaTraducir() ?></td>
    </tr>
    <tr>
      <th>Traductor:</th>
      <td><?php echo $Edicion->getTraductor() ?></td>
    </tr>
    <tr>
      <th>Numero reimpresion:</th>
      <td><?php echo $Edicion->getNumeroReimpresion() ?></td>
    </tr>
    <tr>
      <th>Coedicion:</th>
      <td><?php echo $Edicion->getCoedicion() ?></td>
    </tr>
    <tr>
      <th>Id libro:</th>
      <td><?php echo $Edicion->getIdLibro() ?></td>
    </tr>
    <tr>
      <th>Corrector:</th>
      <td><?php echo $Edicion->getCorrector() ?></td>
    </tr>
    <tr>
      <th>Coleccion:</th>
      <td><?php echo $Edicion->getColeccion() ?></td>
    </tr>
    <tr>
      <th>Isbn:</th>
      <td><?php echo $Edicion->getIsbn() ?></td>
    </tr>
    <tr>
      <th>Deposito legal:</th>
      <td><?php echo $Edicion->getDepositoLegal() ?></td>
    </tr>
    <tr>
      <th>Diagramador:</th>
      <td><?php echo $Edicion->getDiagramador() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('edicion/edit?id='.$Edicion->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('edicion/index') ?>">List</a>
