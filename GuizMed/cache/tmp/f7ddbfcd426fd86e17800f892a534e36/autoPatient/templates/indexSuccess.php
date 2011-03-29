<h1>Medicijns List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Hoofdklasse</th>
      <th>Generische naam</th>
      <th>Specialiteit</th>
      <th>Magistraat type</th>
      <th>Type</th>
      <th>Bnf percentage</th>
      <th>Bnf getal</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($medicijns as $medicijn): ?>
    <tr>
      <td><a href="<?php echo url_for('Patient/show?id='.$medicijn->getId()) ?>"><?php echo $medicijn->getId() ?></a></td>
      <td><?php echo $medicijn->getHoofdklasse() ?></td>
      <td><?php echo $medicijn->getGenerischeNaam() ?></td>
      <td><?php echo $medicijn->getSpecialiteit() ?></td>
      <td><?php echo $medicijn->getMagistraatType() ?></td>
      <td><?php echo $medicijn->getType() ?></td>
      <td><?php echo $medicijn->getBNFPercentage() ?></td>
      <td><?php echo $medicijn->getBNFGetal() ?></td>
      <td><?php echo $medicijn->getCreatedAt() ?></td>
      <td><?php echo $medicijn->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Patient/new') ?>">New</a>
