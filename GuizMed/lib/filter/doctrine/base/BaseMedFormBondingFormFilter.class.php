<?php

/**
 * MedFormBonding filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedFormBondingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_form_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => true)),
      'med_chem_bonding_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedChemBonding'), 'add_empty' => true)),
      'med_ki_val_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedKiVal'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'med_form_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedForm'), 'column' => 'med_form_id')),
      'med_chem_bonding_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedChemBonding'), 'column' => 'med_chem_bonding_id')),
      'med_ki_val_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedKiVal'), 'column' => 'med_ki_val_id')),
    ));

    $this->widgetSchema->setNameFormat('med_form_bonding_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedFormBonding';
  }

  public function getFields()
  {
    return array(
      'med_form_bonding_id' => 'Number',
      'med_form_id'         => 'ForeignKey',
      'med_chem_bonding_id' => 'ForeignKey',
      'med_ki_val_id'       => 'ForeignKey',
    );
  }
}
