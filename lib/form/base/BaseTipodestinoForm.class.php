<?php

/**
 * Tipodestino form base class.
 *
 * @method Tipodestino getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTipodestinoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'ente_publico' => new sfWidgetFormInputCheckbox(),
      'donacion'     => new sfWidgetFormInputCheckbox(),
      'gratuita'     => new sfWidgetFormInputCheckbox(),
      'importacion'  => new sfWidgetFormInputCheckbox(),
      'exportacion'  => new sfWidgetFormInputCheckbox(),
      'otro'         => new sfWidgetFormInputText(),
      'id_feria'     => new sfWidgetFormPropelChoice(array('model' => 'Feria', 'add_empty' => true)),
      'id_pais'      => new sfWidgetFormPropelChoice(array('model' => 'Pais', 'add_empty' => true)),
      'id_estado'    => new sfWidgetFormPropelChoice(array('model' => 'Estado', 'add_empty' => true)),
      'id_libreria'  => new sfWidgetFormPropelChoice(array('model' => 'Libreria', 'add_empty' => true)),
      'id_municipio' => new sfWidgetFormPropelChoice(array('model' => 'Municipio', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'Tipodestino', 'column' => 'id', 'required' => false)),
      'ente_publico' => new sfValidatorBoolean(array('required' => false)),
      'donacion'     => new sfValidatorBoolean(array('required' => false)),
      'gratuita'     => new sfValidatorBoolean(array('required' => false)),
      'importacion'  => new sfValidatorBoolean(array('required' => false)),
      'exportacion'  => new sfValidatorBoolean(array('required' => false)),
      'otro'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_feria'     => new sfValidatorPropelChoice(array('model' => 'Feria', 'column' => 'id', 'required' => false)),
      'id_pais'      => new sfValidatorPropelChoice(array('model' => 'Pais', 'column' => 'id', 'required' => false)),
      'id_estado'    => new sfValidatorPropelChoice(array('model' => 'Estado', 'column' => 'id', 'required' => false)),
      'id_libreria'  => new sfValidatorPropelChoice(array('model' => 'Libreria', 'column' => 'id', 'required' => false)),
      'id_municipio' => new sfValidatorPropelChoice(array('model' => 'Municipio', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipodestino[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tipodestino';
  }


}
