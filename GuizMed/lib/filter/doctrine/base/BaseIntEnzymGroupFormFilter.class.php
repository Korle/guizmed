<?php

/**
 * IntEnzymGroup filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseIntEnzymGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'extra'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'           => new sfValidatorPass(array('required' => false)),
      'extra'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('int_enzym_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IntEnzymGroup';
  }

  public function getFields()
  {
    return array(
      'enzym_group_id' => 'Number',
      'name'           => 'Text',
      'extra'          => 'Text',
    );
  }
}
