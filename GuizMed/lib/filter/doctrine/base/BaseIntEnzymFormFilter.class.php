<?php

/**
 * IntEnzym filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIntEnzymFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'int_enzym_id_minor' => new sfWidgetFormFilterInput(),
      'int_enzym_type_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymType'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'int_enzym_id_minor' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'int_enzym_type_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('IntEnzymType'), 'column' => 'med_enzym_types_id')),
    ));

    $this->widgetSchema->setNameFormat('int_enzym_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntEnzym';
  }

  public function getFields()
  {
    return array(
      'int_enzym_id'       => 'Number',
      'int_enzym_id_minor' => 'Number',
      'int_enzym_type_id'  => 'ForeignKey',
    );
  }
}
