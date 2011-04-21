<?php

/**
 * AdUser form base class.
 *
 * @method AdUser getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'        => new sfWidgetFormInputHidden(),
      'fname'          => new sfWidgetFormInputText(),
      'lname'          => new sfWidgetFormInputText(),
      'email'          => new sfWidgetFormInputText(),
      'uname'          => new sfWidgetFormInputText(),
      'passw'          => new sfWidgetFormInputText(),
      'phone'          => new sfWidgetFormInputText(),
      'ad_role_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdRole'), 'add_empty' => false)),
      'ad_function_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AdFunction'), 'add_empty' => false)),
      'unlock_code'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'user_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'fname'          => new sfValidatorString(array('max_length' => 45)),
      'lname'          => new sfValidatorString(array('max_length' => 45)),
      'email'          => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'uname'          => new sfValidatorString(array('max_length' => 45)),
      'passw'          => new sfValidatorString(array('max_length' => 45)),
      'phone'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ad_role_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdRole'))),
      'ad_function_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AdFunction'))),
      'unlock_code'    => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ad_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdUser';
  }

}
