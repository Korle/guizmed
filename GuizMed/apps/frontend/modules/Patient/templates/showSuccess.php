<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $patient->getId() ?></td>
    </tr>
    <tr>
      <th>Naam:</th>
      <td><?php echo $patient->getNaam() ?></td>
    </tr>
    <tr>
      <th>Voornaam:</th>
      <td><?php echo $patient->getVoornaam() ?></td>
    </tr>
    <tr>
      <th>Geslacht:</th>
      <td><?php echo $patient->getGeslacht() ?></td>
    </tr>
    <tr>
      <th>Geboortedatum:</th>
      <td><?php echo $patient->getGeboortedatum() ?></td>
    </tr>
    <tr>
      <th>Medicatiescheme:</th>
      <td><?php echo $patient->getMedicatiescheme() ?></td>
    </tr>
    <tr>
      <th>Opmerkingen:</th>
      <td><?php echo $patient->getOpmerkingen() ?></td>
    </tr>
    <tr>
      <th>Voorgeschiedenis:</th>
      <td><?php echo $patient->getVoorgeschiedenis() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $patient->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $patient->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('Patient/edit?id='.$patient->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('Patient/index') ?>">List</a>
