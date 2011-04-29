<?php

/**
 * AdUserPatient form base class.
 *
 * @method AdUserPatient getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdUserPatientForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_patient_id' => new sfWidgetFormInputHidden(),
      'patient_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdPatient'), 'add_empty' => false)),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdUser_3'), 'add_empty' => false)),
      'prev_user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdUser'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'user_patient_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_patient_id')), 'empty_value' => $this->getObject()->get('user_patient_id'), 'required' => false)),
      'patient_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdPatient'))),
      'user_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdUser_3'))),
      'prev_user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdUser'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ad_user_patient[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdUserPatient';
  }

}
