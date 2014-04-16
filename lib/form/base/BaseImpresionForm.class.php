<?php

/**
 * Impresion form base class.
 *
 * @method Impresion getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseImpresionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'volumen'               => new sfWidgetFormInputText(),
      'id_edicion'            => new sfWidgetFormPropelChoice(array('model' => 'Edicion', 'add_empty' => true)),
      'id_tipocaratula'       => new sfWidgetFormPropelChoice(array('model' => 'Tipocaratula', 'add_empty' => true)),
      'id_tipoimpresion'      => new sfWidgetFormPropelChoice(array('model' => 'Tipoimpresion', 'add_empty' => true)),
      'id_tipoencuadernacion' => new sfWidgetFormPropelChoice(array('model' => 'Tipoencuadernacion', 'add_empty' => true)),
      'costo'                 => new sfWidgetFormInputText(),
      'id_tipotripa'          => new sfWidgetFormPropelChoice(array('model' => 'Tipotripa', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorPropelChoice(array('model' => 'Impresion', 'column' => 'id', 'required' => false)),
      'volumen'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'id_edicion'            => new sfValidatorPropelChoice(array('model' => 'Edicion', 'column' => 'id', 'required' => false)),
      'id_tipocaratula'       => new sfValidatorPropelChoice(array('model' => 'Tipocaratula', 'column' => 'id', 'required' => false)),
      'id_tipoimpresion'      => new sfValidatorPropelChoice(array('model' => 'Tipoimpresion', 'column' => 'id', 'required' => false)),
      'id_tipoencuadernacion' => new sfValidatorPropelChoice(array('model' => 'Tipoencuadernacion', 'column' => 'id', 'required' => false)),
      'costo'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_tipotripa'          => new sfValidatorPropelChoice(array('model' => 'Tipotripa', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('impresion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Impresion';
  }


}
