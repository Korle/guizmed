<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $medicijn->getId() ?></td>
    </tr>
    <tr>
      <th>Hoofdklasse:</th>
      <td><?php echo $medicijn->getHoofdklasse() ?></td>
    </tr>
    <tr>
      <th>Generische naam:</th>
      <td><?php echo $medicijn->getGenerischeNaam() ?></td>
    </tr>
    <tr>
      <th>Specialiteit:</th>
      <td><?php echo $medicijn->getSpecialiteit() ?></td>
    </tr>
    <tr>
      <th>Magistraat type:</th>
      <td><?php echo $medicijn->getMagistraatType() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $medicijn->getType() ?></td>
    </tr>
    <tr>
      <th>Bnf percentage:</th>
      <td><?php echo $medicijn->getBNFPercentage() ?></td>
    </tr>
    <tr>
      <th>Bnf getal:</th>
      <td><?php echo $medicijn->getBNFGetal() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $medicijn->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $medicijn->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('Medicijn/edit?id='.$medicijn->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('Medicijn/index') ?>">List</a>
