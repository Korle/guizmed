<?php

/**
 * AdLog filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdLogFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'action'             => new sfWidgetFormFilterInput(),
      'ad_user_patient_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdUserPatient'), 'add_empty' => true)),
      'date'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'action'             => new sfValidatorPass(array('required' => false)),
      'ad_user_patient_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AdUserPatient'), 'column' => 'user_patient_id')),
      'date'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ad_log_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdLog';
  }

  public function getFields()
  {
    return array(
      'ad_log'             => 'Number',
      'action'             => 'Text',
      'ad_user_patient_id' => 'ForeignKey',
      'date'               => 'Date',
    );
  }
}
