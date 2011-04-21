<?php

/**
 * AdPrescription form base class.
 *
 * @method AdPrescription getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdPrescriptionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ad_presc_id'     => new sfWidgetFormInputHidden(),
      'start_date'      => new sfWidgetFormDateTime(),
      'end_date'        => new sfWidgetFormDateTime(),
      'presc_date'      => new sfWidgetFormDateTime(),
      'dose'            => new sfWidgetFormInputText(),
      'frequency'       => new sfWidgetFormInputText(),
      'user_patient_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdUserPatient'), 'add_empty' => false)),
      'med_form_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => false)),
      'comment'         => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'ad_presc_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ad_presc_id')), 'empty_value' => $this->getObject()->get('ad_presc_id'), 'required' => false)),
      'start_date'      => new sfValidatorDateTime(),
      'end_date'        => new sfValidatorDateTime(),
      'presc_date'      => new sfValidatorDateTime(),
      'dose'            => new sfValidatorString(array('max_length' => 45)),
      'frequency'       => new sfValidatorString(array('max_length' => 45)),
      'user_patient_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdUserPatient'))),
      'med_form_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'))),
      'comment'         => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ad_prescription[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdPrescription';
  }

}
