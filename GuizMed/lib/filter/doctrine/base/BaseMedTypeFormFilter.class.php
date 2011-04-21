<?php

/**
 * MedType filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedTypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_subtype1_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedSubtype1'), 'add_empty' => true)),
      'med_subtype2_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedSubtype2'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'med_subtype1_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedSubtype1'), 'column' => 'med_subtype1_id')),
      'med_subtype2_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedSubtype2'), 'column' => 'med_subtype2_id')),
    ));

    $this->widgetSchema->setNameFormat('med_type_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedType';
  }

  public function getFields()
  {
    return array(
      'med_type_id'     => 'Number',
      'med_subtype1_id' => 'ForeignKey',
      'med_subtype2_id' => 'ForeignKey',
    );
  }
}
