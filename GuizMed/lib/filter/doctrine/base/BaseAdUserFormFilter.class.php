<?php

/**
 * AdUser filter form base class.
 *
 * @package    GuizMed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAdUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fname'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lname'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'          => new sfWidgetFormFilterInput(),
      'uname'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'passw'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'phone'          => new sfWidgetFormFilterInput(),
      'ad_role_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdRole'), 'add_empty' => true)),
      'ad_function_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdFunction'), 'add_empty' => true)),
      'unlock_code'    => new sfWidgetFormFilterInput(),
      'token'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fname'          => new sfValidatorPass(array('required' => false)),
      'lname'          => new sfValidatorPass(array('required' => false)),
      'email'          => new sfValidatorPass(array('required' => false)),
      'uname'          => new sfValidatorPass(array('required' => false)),
      'passw'          => new sfValidatorPass(array('required' => false)),
      'phone'          => new sfValidatorPass(array('required' => false)),
      'ad_role_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AdRole'), 'column' => 'role_id')),
      'ad_function_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AdFunction'), 'column' => 'function_id')),
      'unlock_code'    => new sfValidatorPass(array('required' => false)),
      'token'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ad_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdUser';
  }

  public function getFields()
  {
    return array(
      'user_id'        => 'Number',
      'fname'          => 'Text',
      'lname'          => 'Text',
      'email'          => 'Text',
      'uname'          => 'Text',
      'passw'          => 'Text',
      'phone'          => 'Text',
      'ad_role_id'     => 'ForeignKey',
      'ad_function_id' => 'ForeignKey',
      'unlock_code'    => 'Text',
      'token'          => 'Text',
    );
  }
}
