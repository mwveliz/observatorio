<?php

/**
 * Edicion form base class.
 *
 * @method Edicion getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEdicionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'traduccion'         => new sfWidgetFormInputText(),
      'lengua_origen'      => new sfWidgetFormInputText(),
      'lengua_traducir'    => new sfWidgetFormInputText(),
      'traductor'          => new sfWidgetFormInputText(),
      'numero_reimpresion' => new sfWidgetFormInputCheckbox(),
      'coedicion'          => new sfWidgetFormInputText(),
      'id_libro'           => new sfWidgetFormInputText(),
      'corrector'          => new sfWidgetFormInputText(),
      'coleccion'          => new sfWidgetFormInputText(),
      'isbn'               => new sfWidgetFormInputText(),
      'deposito_legal'     => new sfWidgetFormInputText(),
      'diagramador'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorPropelChoice(array('model' => 'Edicion', 'column' => 'id', 'required' => false)),
      'traduccion'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lengua_origen'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lengua_traducir'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'traductor'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'numero_reimpresion' => new sfValidatorBoolean(array('required' => false)),
      'coedicion'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'id_libro'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'corrector'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'coleccion'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'isbn'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'deposito_legal'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'diagramador'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('edicion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Edicion';
  }


}
