<?php

/**
 * MedChemBonding filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedChemBondingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'                => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('med_chem_bonding_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedChemBonding';
  }

  public function getFields()
  {
    return array(
      'med_chem_bonding_id' => 'Number',
      'name'                => 'Text',
    );
  }
}
