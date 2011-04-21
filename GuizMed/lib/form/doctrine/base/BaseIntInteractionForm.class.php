<?php

/**
 * IntInteraction form base class.
 *
 * @method IntInteraction getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIntInteractionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'int_interaction_id' => new sfWidgetFormInputHidden(),
      'med_form_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => false)),
      'enzym_group_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymGroup'), 'add_empty' => false)),
      'interaction_type'   => new sfWidgetFormInputText(),
      'int_enzym_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzym'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'int_interaction_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('int_interaction_id')), 'empty_value' => $this->getObject()->get('int_interaction_id'), 'required' => false)),
      'med_form_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'))),
      'enzym_group_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymGroup'))),
      'interaction_type'   => new sfValidatorInteger(),
      'int_enzym_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzym'))),
    ));

    $this->widgetSchema->setNameFormat('int_interaction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntInteraction';
  }

}
