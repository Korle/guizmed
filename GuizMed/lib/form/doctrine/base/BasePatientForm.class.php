<?php

/**
 * Patient form base class.
 *
 * @method Patient getObject() Returns the current form's model object
 *
 * @package    GuizMed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePatientForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'Naam'             => new sfWidgetFormInputText(),
      'Voornaam'         => new sfWidgetFormInputText(),
      'Geslacht'         => new sfWidgetFormInputCheckbox(),
      'Geboortedatum'    => new sfWidgetFormInputText(),
      'Medicatiescheme'  => new sfWidgetFormInputText(),
      'Opmerkingen'      => new sfWidgetFormTextarea(),
      'Voorgeschiedenis' => new sfWidgetFormTextarea(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Naam'             => new sfValidatorString(array('max_length' => 255)),
      'Voornaam'         => new sfValidatorString(array('max_length' => 255)),
      'Geslacht'         => new sfValidatorBoolean(),
      'Geboortedatum'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Medicatiescheme'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Opmerkingen'      => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'Voorgeschiedenis' => new sfValidatorString(array('max_length' => 4000)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('patient[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Patient';
  }

}
