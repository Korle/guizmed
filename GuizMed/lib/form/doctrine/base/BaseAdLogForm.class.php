<?php

/**
 * AdLog form base class.
 *
 * @method AdLog getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdLogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ad_log'             => new sfWidgetFormInputHidden(),
      'action'             => new sfWidgetFormInputText(),
      'ad_user_patient_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdUserPatient'), 'add_empty' => false)),
      'date'               => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'ad_log'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ad_log')), 'empty_value' => $this->getObject()->get('ad_log'), 'required' => false)),
      'action'             => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'ad_user_patient_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdUserPatient'))),
      'date'               => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('ad_log[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdLog';
  }

}
