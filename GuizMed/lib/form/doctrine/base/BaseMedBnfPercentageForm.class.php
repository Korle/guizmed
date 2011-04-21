<?php

/**
 * MedBnfPercentage form base class.
 *
 * @method MedBnfPercentage getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedBnfPercentageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_bnf_percentage_id' => new sfWidgetFormInputHidden(),
      'percentage'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'med_bnf_percentage_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('med_bnf_percentage_id')), 'empty_value' => $this->getObject()->get('med_bnf_percentage_id'), 'required' => false)),
      'percentage'            => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('med_bnf_percentage[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedBnfPercentage';
  }

}
