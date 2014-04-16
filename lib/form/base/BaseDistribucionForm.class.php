<?php

/**
 * Distribucion form base class.
 *
 * @method Distribucion getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDistribucionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_edicion'        => new sfWidgetFormPropelChoice(array('model' => 'Edicion', 'add_empty' => true)),
      'cantidad_ejemplar' => new sfWidgetFormInputText(),
      'fecha'             => new sfWidgetFormInputText(),
      'id_tipodestino'    => new sfWidgetFormPropelChoice(array('model' => 'Tipodestino', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorPropelChoice(array('model' => 'Distribucion', 'column' => 'id', 'required' => false)),
      'id_edicion'        => new sfValidatorPropelChoice(array('model' => 'Edicion', 'column' => 'id', 'required' => false)),
      'cantidad_ejemplar' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'fecha'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_tipodestino'    => new sfValidatorPropelChoice(array('model' => 'Tipodestino', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('distribucion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Distribucion';
  }


}
