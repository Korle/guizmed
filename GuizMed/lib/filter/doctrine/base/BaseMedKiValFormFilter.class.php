<?php

/**
 * MedKiVal filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedKiValFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'value'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'influence'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tagval'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'value'         => new sfValidatorPass(array('required' => false)),
      'influence'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tagval'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('med_ki_val_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedKiVal';
  }

  public function getFields()
  {
    return array(
      'med_ki_val_id' => 'Number',
      'value'         => 'Text',
      'influence'     => 'Number',
      'tagval'        => 'Text',
    );
  }
}
