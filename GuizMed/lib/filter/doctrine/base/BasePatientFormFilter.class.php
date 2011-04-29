<?php

/**
 * Patient filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePatientFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'naam'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'voornaam'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'geslacht'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'geboortedatum'    => new sfWidgetFormFilterInput(),
      'medicatiescheme'  => new sfWidgetFormFilterInput(),
      'opmerkingen'      => new sfWidgetFormFilterInput(),
      'voorgeschiedenis' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'naam'             => new sfValidatorPass(array('required' => false)),
      'voornaam'         => new sfValidatorPass(array('required' => false)),
      'geslacht'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'geboortedatum'    => new sfValidatorPass(array('required' => false)),
      'medicatiescheme'  => new sfValidatorPass(array('required' => false)),
      'opmerkingen'      => new sfValidatorPass(array('required' => false)),
      'voorgeschiedenis' => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('patient_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Patient';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'naam'             => 'Text',
      'voornaam'         => 'Text',
      'geslacht'         => 'Number',
      'geboortedatum'    => 'Text',
      'medicatiescheme'  => 'Text',
      'opmerkingen'      => 'Text',
      'voorgeschiedenis' => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
