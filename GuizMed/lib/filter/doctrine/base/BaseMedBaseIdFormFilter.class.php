<?php

/**
 * MedBaseId filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedBaseIdFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mainclass'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gen_name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'speciality'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'med_type_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedType'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'mainclass'   => new sfValidatorPass(array('required' => false)),
      'gen_name'    => new sfValidatorPass(array('required' => false)),
      'speciality'  => new sfValidatorPass(array('required' => false)),
      'med_type_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedType'), 'column' => 'med_type_id')),
    ));

    $this->widgetSchema->setNameFormat('med_base_id_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedBaseId';
  }

  public function getFields()
  {
    return array(
      'med_base_id' => 'Number',
      'mainclass'   => 'Text',
      'gen_name'    => 'Text',
      'speciality'  => 'Text',
      'med_type_id' => 'ForeignKey',
    );
  }
}
