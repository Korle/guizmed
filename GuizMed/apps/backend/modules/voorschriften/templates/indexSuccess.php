<h1>Ad prescriptions List</h1>

<table>
  <thead>
    <tr>
      <th>Ad presc</th>
      <th>Start date</th>
      <th>End date</th>
      <th>Presc date</th>
      <th>Dose</th>
      <th>Frequency</th>
      <th>User patient</th>
      <th>Med form</th>
      <th>Comment</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ad_prescriptions as $ad_prescription): ?>
    <tr>
      <td><a href="<?php echo url_for('voorschriften/show?ad_presc_id='.$ad_prescription->getAdPrescId()) ?>"><?php echo $ad_prescription->getAdPrescId() ?></a></td>
      <td><?php echo $ad_prescription->getStartDate() ?></td>
      <td><?php echo $ad_prescription->getEndDate() ?></td>
      <td><?php echo $ad_prescription->getPrescDate() ?></td>
      <td><?php echo $ad_prescription->getDose() ?></td>
      <td><?php echo $ad_prescription->getFrequency() ?></td>
      <td><?php echo $ad_prescription->getUserPatientId() ?></td>
      <td><?php echo $ad_prescription->getMedFormId() ?></td>
      <td><?php echo $ad_prescription->getComment() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('voorschriften/new') ?>">New</a>
