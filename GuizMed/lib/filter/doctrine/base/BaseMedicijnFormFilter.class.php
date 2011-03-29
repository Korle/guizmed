<?php

/**
 * Medicijn filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedicijnFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Hoofdklasse'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Generische_Naam' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Specialiteit'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Magistraat_Type' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Type'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'BNF_Percentage'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'BNF_Getal'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'Hoofdklasse'     => new sfValidatorPass(array('required' => false)),
      'Generische_Naam' => new sfValidatorPass(array('required' => false)),
      'Specialiteit'    => new sfValidatorPass(array('required' => false)),
      'Magistraat_Type' => new sfValidatorPass(array('required' => false)),
      'Type'            => new sfValidatorPass(array('required' => false)),
      'BNF_Percentage'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'BNF_Getal'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('medicijn_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Medicijn';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'Hoofdklasse'     => 'Text',
      'Generische_Naam' => 'Text',
      'Specialiteit'    => 'Text',
      'Magistraat_Type' => 'Text',
      'Type'            => 'Text',
      'BNF_Percentage'  => 'Number',
      'BNF_Getal'       => 'Number',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
