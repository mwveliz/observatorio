<?php

/**
 * Clientesatendidos form base class.
 *
 * @method Clientesatendidos getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClientesatendidosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'cantidad'    => new sfWidgetFormInputText(),
      'fache'       => new sfWidgetFormInputText(),
      'id_libreria' => new sfWidgetFormPropelChoice(array('model' => 'Libreria', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Clientesatendidos', 'column' => 'id', 'required' => false)),
      'cantidad'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fache'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_libreria' => new sfValidatorPropelChoice(array('model' => 'Libreria', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('clientesatendidos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clientesatendidos';
  }


}
