<h1>Patients List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Naam</th>
      <th>Voornaam</th>
      <th>Geslacht</th>
      <th>Geboortedatum</th>
      <th>Medicatiescheme</th>
      <th>Opmerkingen</th>
      <th>Voorgeschiedenis</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($patients as $patient): ?>
    <tr>
      <td><a href="<?php echo url_for('Patient/show?id='.$patient->getId()) ?>"><?php echo $patient->getId() ?></a></td>
      <td><?php echo $patient->getNaam() ?></td>
      <td><?php echo $patient->getVoornaam() ?></td>
      <td><?php echo $patient->getGeslacht() ?></td>
      <td><?php echo $patient->getGeboortedatum() ?></td>
      <td><?php echo $patient->getMedicatiescheme() ?></td>
      <td><?php echo $patient->getOpmerkingen() ?></td>
      <td><?php echo $patient->getVoorgeschiedenis() ?></td>
      <td><?php echo $patient->getCreatedAt() ?></td>
      <td><?php echo $patient->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Patient/new') ?>">New</a>
