<?php

/**
 * Medicijn form base class.
 *
 * @method Medicijn getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedicijnForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'hoofdklasse'     => new sfWidgetFormInputText(),
      'generische_naam' => new sfWidgetFormInputText(),
      'specialiteit'    => new sfWidgetFormInputText(),
      'magistraat_type' => new sfWidgetFormInputText(),
      'type'            => new sfWidgetFormInputText(),
      'bnf_percentage'  => new sfWidgetFormInputText(),
      'bnf_getal'       => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'hoofdklasse'     => new sfValidatorString(array('max_length' => 255)),
      'generische_naam' => new sfValidatorString(array('max_length' => 255)),
      'specialiteit'    => new sfValidatorString(array('max_length' => 255)),
      'magistraat_type' => new sfValidatorString(array('max_length' => 255)),
      'type'            => new sfValidatorString(array('max_length' => 255)),
      'bnf_percentage'  => new sfValidatorInteger(),
      'bnf_getal'       => new sfValidatorInteger(),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('medicijn[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Medicijn';
  }

}
