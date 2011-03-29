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
      'Hoofdklasse'     => new sfWidgetFormInputText(),
      'Generische_Naam' => new sfWidgetFormInputText(),
      'Specialiteit'    => new sfWidgetFormInputText(),
      'Magistraat_Type' => new sfWidgetFormInputText(),
      'Type'            => new sfWidgetFormInputText(),
      'BNF_Percentage'  => new sfWidgetFormInputText(),
      'BNF_Getal'       => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Hoofdklasse'     => new sfValidatorString(array('max_length' => 255)),
      'Generische_Naam' => new sfValidatorString(array('max_length' => 255)),
      'Specialiteit'    => new sfValidatorString(array('max_length' => 255)),
      'Magistraat_Type' => new sfValidatorString(array('max_length' => 255)),
      'Type'            => new sfValidatorString(array('max_length' => 255)),
      'BNF_Percentage'  => new sfValidatorInteger(),
      'BNF_Getal'       => new sfValidatorInteger(),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Medicijn', 'column' => array('Generische_Naam')))
    );

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
