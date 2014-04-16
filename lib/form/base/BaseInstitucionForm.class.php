<?php

/**
 * Institucion form base class.
 *
 * @method Institucion getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseInstitucionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'nombre'             => new sfWidgetFormInputText(),
      'correo'             => new sfWidgetFormInputText(),
      'rif'                => new sfWidgetFormInputText(),
      'ubicacion'          => new sfWidgetFormInputText(),
      'id_tipoinstitucion' => new sfWidgetFormPropelChoice(array('model' => 'Tipoinstitucion', 'add_empty' => true)),
      'sector'             => new sfWidgetFormInputText(),
      'responsable'        => new sfWidgetFormInputText(),
      'publica'            => new sfWidgetFormInputCheckbox(),
      'id_pais'            => new sfWidgetFormPropelChoice(array('model' => 'Pais', 'add_empty' => true)),
      'id_municipio'       => new sfWidgetFormPropelChoice(array('model' => 'Municipio', 'add_empty' => true)),
      'id_parroquia'       => new sfWidgetFormPropelChoice(array('model' => 'Parroquia', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorPropelChoice(array('model' => 'Institucion', 'column' => 'id', 'required' => false)),
      'nombre'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'correo'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'rif'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ubicacion'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_tipoinstitucion' => new sfValidatorPropelChoice(array('model' => 'Tipoinstitucion', 'column' => 'id', 'required' => false)),
      'sector'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'responsable'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'publica'            => new sfValidatorBoolean(array('required' => false)),
      'id_pais'            => new sfValidatorPropelChoice(array('model' => 'Pais', 'column' => 'id', 'required' => false)),
      'id_municipio'       => new sfValidatorPropelChoice(array('model' => 'Municipio', 'column' => 'id', 'required' => false)),
      'id_parroquia'       => new sfValidatorPropelChoice(array('model' => 'Parroquia', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('institucion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Institucion';
  }


}
