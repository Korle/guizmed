    "patient" : [
        {
            "personalInfo": {
                "id" : "<?php echo $ad_patient->getPatientId() ?>",
                "name": ""<?php echo $ad_patient->getFname().' '.$ad_patient->getLname() ?>"
            },
            "prescriptions" : [
                {
                    "id" : "presc1",
                    "med" : {
                        "id" : "med1",
                        "name" : "medicine 1"
                    },
                    "frequency" : "2/day",
                    "amount" : "20mg",
                    "BNF" : "20"
                },
                {
                    "id" : "presc2",
                    "med" : {
                        "id" : "med5",
                        "name" : "medicine 5"
                    },
                    "frequency" : "1/day",
                    "amount" : "50mg",
                    "BNF" : "20"
                }
            ]
        }
    ]
}



<!--
<table>
  <tbody>
    <tr>
      <th>Patient:</th>
      <td><?php echo $ad_patient->getPatientId() ?></td>
    </tr>
    <tr>
      <th>Fname:</th>
      <td><?php echo $ad_patient->getFname() ?></td>
    </tr>
    <tr>
      <th>Lname:</th>
      <td><?php echo $ad_patient->getLname() ?></td>
    </tr>
    <tr>
      <th>Bdate:</th>
      <td><?php echo $ad_patient->getBdate() ?></td>
    </tr>
    <tr>
      <th>Patient since:</th>
      <td><?php echo $ad_patient->getPatientSince() ?></td>
    </tr>
    <tr>
      <th>Sex:</th>
      <td><?php echo $ad_patient->getSex() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('patienten/edit?patient_id='.$ad_patient->getPatientId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('patienten/index') ?>">List</a>
!>