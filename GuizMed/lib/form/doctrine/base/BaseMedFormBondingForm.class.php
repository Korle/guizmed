<?php

/**
 * MedFormBonding form base class.
 *
 * @method MedFormBonding getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedFormBondingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_form_bonding_id' => new sfWidgetFormInputHidden(),
      'med_form_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => false)),
      'med_chem_bonding_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedChemBonding'), 'add_empty' => false)),
      'med_ki_val_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedKiVal'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'med_form_bonding_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('med_form_bonding_id')), 'empty_value' => $this->getObject()->get('med_form_bonding_id'), 'required' => false)),
      'med_form_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'))),
      'med_chem_bonding_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedChemBonding'))),
      'med_ki_val_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MedKiVal'))),
    ));

    $this->widgetSchema->setNameFormat('med_form_bonding[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedFormBonding';
  }

}
