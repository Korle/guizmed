<table>
  <tbody>
    <tr>
      <th>Ad presc:</th>
      <td><?php echo $ad_prescription->getAdPrescId() ?></td>
    </tr>
    <tr>
      <th>Start date:</th>
      <td><?php echo $ad_prescription->getStartDate() ?></td>
    </tr>
    <tr>
      <th>End date:</th>
      <td><?php echo $ad_prescription->getEndDate() ?></td>
    </tr>
    <tr>
      <th>Presc date:</th>
      <td><?php echo $ad_prescription->getPrescDate() ?></td>
    </tr>
    <tr>
      <th>Dose:</th>
      <td><?php echo $ad_prescription->getDose() ?></td>
    </tr>
    <tr>
      <th>Frequency:</th>
      <td><?php echo $ad_prescription->getFrequency() ?></td>
    </tr>
    <tr>
      <th>User patient:</th>
      <td><?php echo $ad_prescription->getUserPatientId() ?></td>
    </tr>
    <tr>
      <th>Med form:</th>
      <td><?php echo $ad_prescription->getMedFormId() ?></td>
    </tr>
    <tr>
      <th>Comment:</th>
      <td><?php echo $ad_prescription->getComment() ?></td>
    </tr>
    <tr>
      <th>Stop date:</th>
      <td><?php echo $ad_prescription->getStopDate() ?></td>
    </tr>
    <tr>
      <th>Stop reason:</th>
      <td><?php echo $ad_prescription->getStopReason() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('voorschriften/edit?ad_presc_id='.$ad_prescription->getAdPrescId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('voorschriften/index') ?>">List</a>
