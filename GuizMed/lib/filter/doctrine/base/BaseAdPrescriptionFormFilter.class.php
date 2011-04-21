<?php

/**
 * AdPrescription filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdPrescriptionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'start_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'end_date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'presc_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dose'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'frequency'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_patient_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdUserPatient'), 'add_empty' => true)),
      'med_form_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => true)),
      'comment'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'start_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'presc_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'dose'            => new sfValidatorPass(array('required' => false)),
      'frequency'       => new sfValidatorPass(array('required' => false)),
      'user_patient_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AdUserPatient'), 'column' => 'user_patient_id')),
      'med_form_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedForm'), 'column' => 'med_form_id')),
      'comment'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ad_prescription_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdPrescription';
  }

  public function getFields()
  {
    return array(
      'ad_presc_id'     => 'Number',
      'start_date'      => 'Date',
      'end_date'        => 'Date',
      'presc_date'      => 'Date',
      'dose'            => 'Text',
      'frequency'       => 'Text',
      'user_patient_id' => 'ForeignKey',
      'med_form_id'     => 'ForeignKey',
      'comment'         => 'Text',
    );
  }
}
