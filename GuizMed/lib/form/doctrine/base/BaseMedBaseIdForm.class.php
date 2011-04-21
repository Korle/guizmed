<?php

/**
 * MedBaseId form base class.
 *
 * @method MedBaseId getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedBaseIdForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_base_id' => new sfWidgetFormInputHidden(),
      'mainclass'   => new sfWidgetFormInputText(),
      'gen_name'    => new sfWidgetFormInputText(),
      'speciality'  => new sfWidgetFormInputText(),
      'med_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedType'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'med_base_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('med_base_id')), 'empty_value' => $this->getObject()->get('med_base_id'), 'required' => false)),
      'mainclass'   => new sfValidatorString(array('max_length' => 45)),
      'gen_name'    => new sfValidatorString(array('max_length' => 45)),
      'speciality'  => new sfValidatorString(array('max_length' => 45)),
      'med_type_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedType'))),
    ));

    $this->widgetSchema->setNameFormat('med_base_id[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedBaseId';
  }

}
