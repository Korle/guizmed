<h1>Med forms List</h1>

<table>
  <thead>
    <tr>
      <th>Med form</th>
      <th>Med base</th>
      <th>Med magister form</th>
      <th>Dose</th>
      <th>Bioavailability</th>
      <th>Proteine binding</th>
      <th>T max h</th>
      <th>Hlf</th>
      <th>Ddd</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($med_forms as $med_form): ?>
    <tr>
      <td><a href="<?php echo url_for('medicijnbeheer/show?med_form_id='.$med_form->getMedFormId()) ?>"><?php echo $med_form->getMedFormId() ?></a></td>
      <td><?php echo $med_form->getMedBaseId() ?></td>
      <td><?php echo $med_form->getMedMagisterFormId() ?></td>
      <td><?php echo $med_form->getDose() ?></td>
      <td><?php echo $med_form->getBioavailability() ?></td>
      <td><?php echo $med_form->getProteineBinding() ?></td>
      <td><?php echo $med_form->getTMaxH() ?></td>
      <td><?php echo $med_form->getHlf() ?></td>
      <td><?php echo $med_form->getDdd() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('medicijnbeheer/new') ?>">New</a>
