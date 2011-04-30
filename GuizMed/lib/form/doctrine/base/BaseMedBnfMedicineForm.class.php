<?php

/**
 * MedBnfMedicine form base class.
 *
 * @method MedBnfMedicine getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedBnfMedicineForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_bnf_medicine_id' => new sfWidgetFormInputHidden(),
      'bnf_percentage_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedBnfPercentage'), 'add_empty' => false)),
      'med_form_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => false)),
      'value'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'med_bnf_medicine_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('med_bnf_medicine_id')), 'empty_value' => $this->getObject()->get('med_bnf_medicine_id'), 'required' => false)),
      'bnf_percentage_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedBnfPercentage'))),
      'med_form_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'))),
      'value'               => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('med_bnf_medicine[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedBnfMedicine';
  }

}
