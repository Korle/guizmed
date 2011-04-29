<?php

/**
 * AdUserPatient filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdUserPatientFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'patient_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdPatient'), 'add_empty' => true)),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdUser_3'), 'add_empty' => true)),
      'prev_user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdUser'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'patient_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AdPatient'), 'column' => 'patient_id')),
      'user_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AdUser_3'), 'column' => 'user_id')),
      'prev_user_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AdUser'), 'column' => 'user_id')),
    ));

    $this->widgetSchema->setNameFormat('ad_user_patient_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdUserPatient';
  }

  public function getFields()
  {
    return array(
      'user_patient_id' => 'Number',
      'patient_id'      => 'ForeignKey',
      'user_id'         => 'ForeignKey',
      'prev_user_id'    => 'ForeignKey',
    );
  }
}
