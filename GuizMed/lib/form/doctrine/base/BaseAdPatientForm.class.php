<?php

/**
 * AdPatient form base class.
 *
 * @method AdPatient getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdPatientForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'patient_id'    => new sfWidgetFormInputHidden(),
      'fname'         => new sfWidgetFormInputText(),
      'lname'         => new sfWidgetFormInputText(),
      'bdate'         => new sfWidgetFormDate(),
      'patient_since' => new sfWidgetFormDateTime(),
      'sex'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'patient_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('patient_id')), 'empty_value' => $this->getObject()->get('patient_id'), 'required' => false)),
      'fname'         => new sfValidatorString(array('max_length' => 45)),
      'lname'         => new sfValidatorString(array('max_length' => 45)),
      'bdate'         => new sfValidatorDate(),
      'patient_since' => new sfValidatorDateTime(),
      'sex'           => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('ad_patient[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdPatient';
  }

}
