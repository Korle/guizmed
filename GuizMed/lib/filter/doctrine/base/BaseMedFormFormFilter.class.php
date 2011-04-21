<?php

/**
 * MedForm filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMedFormFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'med_base_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedBaseId'), 'add_empty' => true)),
      'med_magister_form_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MedMagisterForm'), 'add_empty' => true)),
      'dose'                 => new sfWidgetFormFilterInput(),
      'bioavailability'      => new sfWidgetFormFilterInput(),
      'proteine_binding'     => new sfWidgetFormFilterInput(),
      't_max_h'              => new sfWidgetFormFilterInput(),
      'hlf'                  => new sfWidgetFormFilterInput(),
      'ddd'                  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'med_base_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedBaseId'), 'column' => 'med_base_id')),
      'med_magister_form_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MedMagisterForm'), 'column' => 'med_magister_form_id')),
      'dose'                 => new sfValidatorPass(array('required' => false)),
      'bioavailability'      => new sfValidatorPass(array('required' => false)),
      'proteine_binding'     => new sfValidatorPass(array('required' => false)),
      't_max_h'              => new sfValidatorPass(array('required' => false)),
      'hlf'                  => new sfValidatorPass(array('required' => false)),
      'ddd'                  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('med_form_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedForm';
  }

  public function getFields()
  {
    return array(
      'med_form_id'          => 'Number',
      'med_base_id'          => 'ForeignKey',
      'med_magister_form_id' => 'ForeignKey',
      'dose'                 => 'Text',
      'bioavailability'      => 'Text',
      'proteine_binding'     => 'Text',
      't_max_h'              => 'Text',
      'hlf'                  => 'Text',
      'ddd'                  => 'Text',
    );
  }
}
