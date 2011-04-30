<?php

/**
 * IntEnzymSubgroup form base class.
 *
 * @method IntEnzymSubgroup getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIntEnzymSubgroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'int_subgroup_id' => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'int_subgroup_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('int_subgroup_id')), 'empty_value' => $this->getObject()->get('int_subgroup_id'), 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('int_enzym_subgroup[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntEnzymSubgroup';
  }

}
