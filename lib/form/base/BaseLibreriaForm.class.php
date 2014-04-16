<?php

/**
 * Libreria form base class.
 *
 * @method Libreria getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseLibreriaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'descripcion'     => new sfWidgetFormInputText(),
      'id_tipolibreria' => new sfWidgetFormPropelChoice(array('model' => 'Tipolibreria', 'add_empty' => true)),
      'id_municipio'    => new sfWidgetFormPropelChoice(array('model' => 'Municipio', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'Libreria', 'column' => 'id', 'required' => false)),
      'descripcion'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_tipolibreria' => new sfValidatorPropelChoice(array('model' => 'Tipolibreria', 'column' => 'id', 'required' => false)),
      'id_municipio'    => new sfValidatorPropelChoice(array('model' => 'Municipio', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('libreria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Libreria';
  }


}
