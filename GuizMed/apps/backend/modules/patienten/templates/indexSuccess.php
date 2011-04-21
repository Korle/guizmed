<h1>Ad patients List</h1>

<table>
  <thead>
    <tr>
      <th>Patient</th>
      <th>Fname</th>
      <th>Lname</th>
      <th>Bdate</th>
      <th>Patient since</th>
      <th>Sex</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ad_patients as $ad_patient): ?>
    <tr>
      <td><a href="<?php echo url_for('patienten/show?patient_id='.$ad_patient->getPatientId()) ?>"><?php echo $ad_patient->getPatientId() ?></a></td>
      <td><?php echo $ad_patient->getFname() ?></td>
      <td><?php echo $ad_patient->getLname() ?></td>
      <td><?php echo $ad_patient->getBdate() ?></td>
      <td><?php echo $ad_patient->getPatientSince() ?></td>
      <td><?php echo $ad_patient->getSex() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('patienten/new') ?>">New</a>
