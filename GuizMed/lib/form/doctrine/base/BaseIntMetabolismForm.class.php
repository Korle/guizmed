<?php

/**
 * IntMetabolism form base class.
 *
 * @method IntMetabolism getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIntMetabolismForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'int_metabolism_id' => new sfWidgetFormInputHidden(),
      'med_form_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => false)),
      'enzym_group_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzym'), 'add_empty' => false)),
      'interaction_type'  => new sfWidgetFormChoice(array('choices' => array('metabolism' => 'metabolism', 'inhibitor' => 'inhibitor', 'inducer' => 'inducer'))),
    ));

    $this->setValidators(array(
      'int_metabolism_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('int_metabolism_id')), 'empty_value' => $this->getObject()->get('int_metabolism_id'), 'required' => false)),
      'med_form_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'))),
      'enzym_group_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzym'))),
      'interaction_type'  => new sfValidatorChoice(array('choices' => array(0 => 'metabolism', 1 => 'inhibitor', 2 => 'inducer'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('int_metabolism[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntMetabolism';
  }

}
