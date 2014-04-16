<?php

/**
 * Autor form base class.
 *
 * @method Autor getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAutorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'ficha_autor'      => new sfWidgetFormInputText(),
      'inedito'          => new sfWidgetFormInputCheckbox(),
      'sexo'             => new sfWidgetFormInputCheckbox(),
      'nacionalidad'     => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'apellido'         => new sfWidgetFormInputText(),
      'vive'             => new sfWidgetFormInputCheckbox(),
      'tipoautor'        => new sfWidgetFormPropelChoice(array('model' => 'Autor', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorPropelChoice(array('model' => 'Autor', 'column' => 'id', 'required' => false)),
      'ficha_autor'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'inedito'          => new sfValidatorBoolean(array('required' => false)),
      'sexo'             => new sfValidatorBoolean(array('required' => false)),
      'nacionalidad'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'apellido'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vive'             => new sfValidatorBoolean(array('required' => false)),
      'tipoautor'        => new sfValidatorPropelChoice(array('model' => 'Autor', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('autor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Autor';
  }


}
