<?php

/**
 * AdRole form base class.
 *
 * @method AdRole getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdRoleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'role_id' => new sfWidgetFormInputHidden(),
      'name'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'role_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('role_id')), 'empty_value' => $this->getObject()->get('role_id'), 'required' => false)),
      'name'    => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('ad_role[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdRole';
  }

}
