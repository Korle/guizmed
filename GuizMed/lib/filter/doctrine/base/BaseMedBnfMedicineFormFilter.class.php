<?php

/**
 * MedBnfMedicine filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedBnfMedicineFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_bnf_percentages_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedBnfPercentage'), 'add_empty' => true)),
      'med_form_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedForm'), 'add_empty' => true)),
      'value'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'med_bnf_percentages_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedBnfPercentage'), 'column' => 'med_bnf_percentage_id')),
      'med_form_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedForm'), 'column' => 'med_form_id')),
      'value'                  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('med_bnf_medicine_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedBnfMedicine';
  }

  public function getFields()
  {
    return array(
      'med_bnf_medicine_id'    => 'Number',
      'med_bnf_percentages_id' => 'ForeignKey',
      'med_form_id'            => 'ForeignKey',
      'value'                  => 'Number',
    );
  }
}
