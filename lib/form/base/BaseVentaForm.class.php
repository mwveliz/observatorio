<?php

/**
 * Venta form base class.
 *
 * @method Venta getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVentaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'cantidad_ejemplares' => new sfWidgetFormInputText(),
      'fecha'               => new sfWidgetFormInputText(),
      'id_libreria'         => new sfWidgetFormPropelChoice(array('model' => 'Libreria', 'add_empty' => true)),
      'id_edicion'          => new sfWidgetFormPropelChoice(array('model' => 'Edicion', 'add_empty' => true)),
      'id_tipodestino'      => new sfWidgetFormPropelChoice(array('model' => 'Tipodestino', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorPropelChoice(array('model' => 'Venta', 'column' => 'id', 'required' => false)),
      'cantidad_ejemplares' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'fecha'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_libreria'         => new sfValidatorPropelChoice(array('model' => 'Libreria', 'column' => 'id', 'required' => false)),
      'id_edicion'          => new sfValidatorPropelChoice(array('model' => 'Edicion', 'column' => 'id', 'required' => false)),
      'id_tipodestino'      => new sfValidatorPropelChoice(array('model' => 'Tipodestino', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('venta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Venta';
  }


}
