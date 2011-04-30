<?php

/**
 * IntMetabolism filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIntMetabolismFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_form_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => true)),
      'enzym_group_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzym'), 'add_empty' => true)),
      'interaction_type'  => new sfWidgetFormChoice(array('choices' => array('' => '', 'metabolism' => 'metabolism', 'inhibitor' => 'inhibitor', 'inducer' => 'inducer'))),
    ));

    $this->setValidators(array(
      'med_form_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedForm'), 'column' => 'med_form_id')),
      'enzym_group_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('IntEnzym'), 'column' => 'int_enzym_id')),
      'interaction_type'  => new sfValidatorChoice(array('required' => false, 'choices' => array('metabolism' => 'metabolism', 'inhibitor' => 'inhibitor', 'inducer' => 'inducer'))),
    ));

    $this->widgetSchema->setNameFormat('int_metabolism_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntMetabolism';
  }

  public function getFields()
  {
    return array(
      'int_metabolism_id' => 'Number',
      'med_form_id'       => 'ForeignKey',
      'enzym_group_id'    => 'ForeignKey',
      'interaction_type'  => 'Enum',
    );
  }
}
