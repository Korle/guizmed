<table>
  <tbody>
    <tr>
      <th>Med base:</th>
      <td><?php echo $med_base_id->getMedBaseId() ?></td>
    </tr>
    <tr>
      <th>Mainclass:</th>
      <td><?php echo $med_base_id->getMainclass() ?></td>
    </tr>
    <tr>
      <th>Gen name:</th>
      <td><?php echo $med_base_id->getGenName() ?></td>
    </tr>
    <tr>
      <th>Speciality:</th>
      <td><?php echo $med_base_id->getSpeciality() ?></td>
    </tr>
    <tr>
      <th>Med type:</th>
      <td><?php echo $med_base_id->getMedTypeId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('basis/edit?med_base_id='.$med_base_id->getMedBaseId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('basis/index') ?>">List</a>
