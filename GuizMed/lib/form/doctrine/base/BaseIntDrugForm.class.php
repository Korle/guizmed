<?php

/**
 * IntDrug form base class.
 *
 * @method IntDrug getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIntDrugForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'int_drug_id'       => new sfWidgetFormInputHidden(),
      'name'              => new sfWidgetFormInputText(),
      'minor_less_potent' => new sfWidgetFormInputText(),
      'potent'            => new sfWidgetFormInputText(),
      'pro_drug'          => new sfWidgetFormInputText(),
      'substrate'         => new sfWidgetFormInputText(),
      'inhibitor'         => new sfWidgetFormInputText(),
      'inducer'           => new sfWidgetFormInputText(),
      'brand_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymBrand'), 'add_empty' => true)),
      'int_enzym_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzym'), 'add_empty' => false)),
      'enzym_subgroup_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymSubgroup'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'int_drug_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('int_drug_id')), 'empty_value' => $this->getObject()->get('int_drug_id'), 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 45)),
      'minor_less_potent' => new sfValidatorInteger(array('required' => false)),
      'potent'            => new sfValidatorInteger(array('required' => false)),
      'pro_drug'          => new sfValidatorInteger(array('required' => false)),
      'substrate'         => new sfValidatorInteger(array('required' => false)),
      'inhibitor'         => new sfValidatorInteger(array('required' => false)),
      'inducer'           => new sfValidatorInteger(array('required' => false)),
      'brand_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymBrand'), 'required' => false)),
      'int_enzym_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzym'))),
      'enzym_subgroup_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymSubgroup'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('int_drug[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntDrug';
  }

}
