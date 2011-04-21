<?php

/**
 * MedType form base class.
 *
 * @method MedType getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedTypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_type_id'     => new sfWidgetFormInputHidden(),
      'med_subtype1_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedSubtype1'), 'add_empty' => false)),
      'med_subtype2_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedSubtype2'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'med_type_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('med_type_id')), 'empty_value' => $this->getObject()->get('med_type_id'), 'required' => false)),
      'med_subtype1_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedSubtype1'))),
      'med_subtype2_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedSubtype2'))),
    ));

    $this->widgetSchema->setNameFormat('med_type[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedType';
  }

}
