<?php

/**
 * MedBnfPercentage filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedBnfPercentageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'percentage'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'percentage'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('med_bnf_percentage_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedBnfPercentage';
  }

  public function getFields()
  {
    return array(
      'bnf_percentage_id' => 'Number',
      'percentage'        => 'Text',
    );
  }
}
