<?php

/**
 * MedForm form base class.
 *
 * @method MedForm getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedFormForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_form_id'          => new sfWidgetFormInputHidden(),
      'med_base_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedBaseId'), 'add_empty' => false)),
      'med_magister_form_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedMagisterForm'), 'add_empty' => true)),
      'dose'                 => new sfWidgetFormInputText(),
      'bioavailability'      => new sfWidgetFormInputText(),
      'proteine_binding'     => new sfWidgetFormInputText(),
      't_max_h'              => new sfWidgetFormInputText(),
      'hlf'                  => new sfWidgetFormInputText(),
      'ddd'                  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'med_form_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('med_form_id')), 'empty_value' => $this->getObject()->get('med_form_id'), 'required' => false)),
      'med_base_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedBaseId'))),
      'med_magister_form_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedMagisterForm'), 'required' => false)),
      'dose'                 => new sfValidatorString(array('max_length' => 55, 'required' => false)),
      'bioavailability'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'proteine_binding'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      't_max_h'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'hlf'                  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ddd'                  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('med_form[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedForm';
  }

}
