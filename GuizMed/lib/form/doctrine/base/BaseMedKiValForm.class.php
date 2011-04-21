<?php

/**
 * MedKiVal form base class.
 *
 * @method MedKiVal getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedKiValForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_ki_val_id' => new sfWidgetFormInputHidden(),
      'value'         => new sfWidgetFormInputText(),
      'influence'     => new sfWidgetFormInputText(),
      'tagval'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'med_ki_val_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('med_ki_val_id')), 'empty_value' => $this->getObject()->get('med_ki_val_id'), 'required' => false)),
      'value'         => new sfValidatorString(array('max_length' => 15)),
      'influence'     => new sfValidatorInteger(),
      'tagval'        => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('med_ki_val[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedKiVal';
  }

}
