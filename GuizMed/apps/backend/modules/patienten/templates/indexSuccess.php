{
    "allPatients" : [
    <?php $bol = true?>
    <?php foreach ($ad_patients as $ad_patient): ?>
    <?php if($bol==true){
        echo ",";
    }?>
    <?php $bol=false ?>
    {
            "id" : "<?php echo $ad_patient->getPatientId() ?>",
            "name": "<?php echo $ad_patient->getFname() ?>"
        }

    <?php endforeach; ?>
    ]
}
