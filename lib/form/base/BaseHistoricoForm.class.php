<?php

/**
 * Historico form base class.
 *
 * @method Historico getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHistoricoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'id_edicion'      => new sfWidgetFormPropelChoice(array('model' => 'Edicion', 'add_empty' => true)),
      'id_status'       => new sfWidgetFormPropelChoice(array('model' => 'Status', 'add_empty' => true)),
      'id_institucion'  => new sfWidgetFormPropelChoice(array('model' => 'Institucion', 'add_empty' => true)),
      'fecha_inicio'    => new sfWidgetFormInputText(),
      'fecha_fin'       => new sfWidgetFormInputText(),
      'status_actual'   => new sfWidgetFormInputCheckbox(),
      'id_impresion'    => new sfWidgetFormPropelChoice(array('model' => 'Impresion', 'add_empty' => true)),
      'id_distribucion' => new sfWidgetFormPropelChoice(array('model' => 'Distribucion', 'add_empty' => true)),
      'id_venta'        => new sfWidgetFormPropelChoice(array('model' => 'Venta', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'Historico', 'column' => 'id', 'required' => false)),
      'id_edicion'      => new sfValidatorPropelChoice(array('model' => 'Edicion', 'column' => 'id', 'required' => false)),
      'id_status'       => new sfValidatorPropelChoice(array('model' => 'Status', 'column' => 'id', 'required' => false)),
      'id_institucion'  => new sfValidatorPropelChoice(array('model' => 'Institucion', 'column' => 'id', 'required' => false)),
      'fecha_inicio'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_fin'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status_actual'   => new sfValidatorBoolean(array('required' => false)),
      'id_impresion'    => new sfValidatorPropelChoice(array('model' => 'Impresion', 'column' => 'id', 'required' => false)),
      'id_distribucion' => new sfValidatorPropelChoice(array('model' => 'Distribucion', 'column' => 'id', 'required' => false)),
      'id_venta'        => new sfValidatorPropelChoice(array('model' => 'Venta', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('historico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Historico';
  }


}
