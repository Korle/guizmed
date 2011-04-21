<?php

/**
 * AdPatient filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdPatientFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fname'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lname'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bdate'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'patient_since' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'sex'           => new sfWidgetFormChoice(array('choices' => array('' => '', 'M' => 'M', 'F' => 'F'))),
    ));

    $this->setValidators(array(
      'fname'         => new sfValidatorPass(array('required' => false)),
      'lname'         => new sfValidatorPass(array('required' => false)),
      'bdate'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'patient_since' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'sex'           => new sfValidatorChoice(array('required' => false, 'choices' => array('M' => 'M', 'F' => 'F'))),
    ));

    $this->widgetSchema->setNameFormat('ad_patient_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdPatient';
  }

  public function getFields()
  {
    return array(
      'patient_id'    => 'Number',
      'fname'         => 'Text',
      'lname'         => 'Text',
      'bdate'         => 'Date',
      'patient_since' => 'Date',
      'sex'           => 'Enum',
    );
  }
}
