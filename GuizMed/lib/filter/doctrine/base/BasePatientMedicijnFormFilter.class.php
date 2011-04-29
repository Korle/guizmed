<?php

/**
 * PatientMedicijn filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePatientMedicijnFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'patient_id'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'medicijn_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aantal'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'patient_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medicijn_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aantal'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('patient_medicijn_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PatientMedicijn';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'patient_id'  => 'Number',
      'medicijn_id' => 'Number',
      'aantal'      => 'Number',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
