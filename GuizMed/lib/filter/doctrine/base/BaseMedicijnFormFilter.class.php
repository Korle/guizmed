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
      'hoofdklasse'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'generische_naam' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'specialiteit'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'magistraat_type' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bnf_percentage'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bnf_getal'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'hoofdklasse'     => new sfValidatorPass(array('required' => false)),
      'generische_naam' => new sfValidatorPass(array('required' => false)),
      'specialiteit'    => new sfValidatorPass(array('required' => false)),
      'magistraat_type' => new sfValidatorPass(array('required' => false)),
      'type'            => new sfValidatorPass(array('required' => false)),
      'bnf_percentage'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bnf_getal'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'hoofdklasse'     => 'Text',
      'generische_naam' => 'Text',
      'specialiteit'    => 'Text',
      'magistraat_type' => 'Text',
      'type'            => 'Text',
      'bnf_percentage'  => 'Number',
      'bnf_getal'       => 'Number',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
