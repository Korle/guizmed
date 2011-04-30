<?php

/**
 * IntInteraction filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIntInteractionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_form_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => true)),
      'enzym_group_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymGroup'), 'add_empty' => true)),
      'interaction_type'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'int_enzym_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzym'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'med_form_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedForm'), 'column' => 'med_form_id')),
      'enzym_group_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('IntEnzymGroup'), 'column' => 'enzym_group_id')),
      'interaction_type'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'int_enzym_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('IntEnzym'), 'column' => 'enzym_id')),
    ));

    $this->widgetSchema->setNameFormat('int_interaction_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntInteraction';
  }

  public function getFields()
  {
    return array(
      'int_interaction_id' => 'Number',
      'med_form_id'        => 'ForeignKey',
      'enzym_group_id'     => 'ForeignKey',
      'interaction_type'   => 'Number',
      'int_enzym_id'       => 'ForeignKey',
    );
  }
}
