<?php

/**
 * PatientMedicijn form base class.
 *
 * @method PatientMedicijn getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePatientMedicijnForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'patient_id'  => new sfWidgetFormInputText(),
      'medicijn_id' => new sfWidgetFormInputText(),
      'aantal'      => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'patient_id'  => new sfValidatorInteger(),
      'medicijn_id' => new sfValidatorInteger(),
      'aantal'      => new sfValidatorInteger(),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('patient_medicijn[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PatientMedicijn';
  }

}
