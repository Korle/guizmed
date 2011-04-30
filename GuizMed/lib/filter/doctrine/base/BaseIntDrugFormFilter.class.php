<?php

/**
 * IntDrug filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIntDrugFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'minor_less_potent' => new sfWidgetFormFilterInput(),
      'potent'            => new sfWidgetFormFilterInput(),
      'pro_drug'          => new sfWidgetFormFilterInput(),
      'substrate'         => new sfWidgetFormFilterInput(),
      'inhibitor'         => new sfWidgetFormFilterInput(),
      'inducer'           => new sfWidgetFormFilterInput(),
      'brand_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymBrand'), 'add_empty' => true)),
      'enzym_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzym'), 'add_empty' => true)),
      'enzym_subgroup_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('IntEnzymSubgroup'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'              => new sfValidatorPass(array('required' => false)),
      'minor_less_potent' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'potent'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pro_drug'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'substrate'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'inhibitor'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'inducer'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'brand_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('IntEnzymBrand'), 'column' => 'int_brand_id')),
      'enzym_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('IntEnzym'), 'column' => 'enzym_id')),
      'enzym_subgroup_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('IntEnzymSubgroup'), 'column' => 'int_subgroup_id')),
    ));

    $this->widgetSchema->setNameFormat('int_drug_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntDrug';
  }

  public function getFields()
  {
    return array(
      'int_drug_id'       => 'Number',
      'name'              => 'Text',
      'minor_less_potent' => 'Number',
      'potent'            => 'Number',
      'pro_drug'          => 'Number',
      'substrate'         => 'Number',
      'inhibitor'         => 'Number',
      'inducer'           => 'Number',
      'brand_id'          => 'ForeignKey',
      'enzym_id'          => 'ForeignKey',
      'enzym_subgroup_id' => 'ForeignKey',
    );
  }
}
