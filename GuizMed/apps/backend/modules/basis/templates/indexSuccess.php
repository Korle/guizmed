<h1>Med base ids List</h1>

<table>
  <thead>
    <tr>
      <th>Med base</th>
      <th>Mainclass</th>
      <th>Gen name</th>
      <th>Speciality</th>
      <th>Med type</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($med_base_ids as $med_base_id): ?>
    <tr>
      <td><a href="<?php echo url_for('basis/show?med_base_id='.$med_base_id->getMedBaseId()) ?>"><?php echo $med_base_id->getMedBaseId() ?></a></td>
      <td><?php echo $med_base_id->getMainclass() ?></td>
      <td><?php echo $med_base_id->getGenName() ?></td>
      <td><?php echo $med_base_id->getSpeciality() ?></td>
      <td><?php echo $med_base_id->getMedTypeId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('basis/new') ?>">New</a>
