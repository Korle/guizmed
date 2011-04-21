<?php

/**
 * MedMagisterForm form base class.
 *
 * @method MedMagisterForm getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedMagisterFormForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_magister_form_id' => new sfWidgetFormInputHidden(),
      'naam'                 => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'med_magister_form_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('med_magister_form_id')), 'empty_value' => $this->getObject()->get('med_magister_form_id'), 'required' => false)),
      'naam'                 => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('med_magister_form[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedMagisterForm';
  }

}
