<table>
  <tbody>
    <tr>
      <th>Med form:</th>
      <td><?php echo $med_form->getMedFormId() ?></td>
    </tr>
    <tr>
      <th>Med base:</th>
      <td><?php echo $med_form->getMedBaseId() ?></td>
    </tr>
    <tr>
      <th>Med magister form:</th>
      <td><?php echo $med_form->getMedMagisterFormId() ?></td>
    </tr>
    <tr>
      <th>Dose:</th>
      <td><?php echo $med_form->getDose() ?></td>
    </tr>
    <tr>
      <th>Bioavailability:</th>
      <td><?php echo $med_form->getBioavailability() ?></td>
    </tr>
    <tr>
      <th>Proteine binding:</th>
      <td><?php echo $med_form->getProteineBinding() ?></td>
    </tr>
    <tr>
      <th>T max h:</th>
      <td><?php echo $med_form->getTMaxH() ?></td>
    </tr>
    <tr>
      <th>Hlf:</th>
      <td><?php echo $med_form->getHlf() ?></td>
    </tr>
    <tr>
      <th>Ddd:</th>
      <td><?php echo $med_form->getDdd() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('medicijnbeheer/edit?med_form_id='.$med_form->getMedFormId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('medicijnbeheer/index') ?>">List</a>
