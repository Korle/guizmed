<?php

/**
 * IntEnzymGroup form base class.
 *
 * @method IntEnzymGroup getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIntEnzymGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'enzym_group_id' => new sfWidgetFormInputHidden(),
      'name'           => new sfWidgetFormInputText(),
      'extra'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'enzym_group_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('enzym_group_id')), 'empty_value' => $this->getObject()->get('enzym_group_id'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 45)),
      'extra'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('int_enzym_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntEnzymGroup';
  }

}
