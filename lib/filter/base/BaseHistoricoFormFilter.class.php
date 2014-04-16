<?php

/**
 * Historico filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHistoricoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_edicion'      => new sfWidgetFormPropelChoice(array('model' => 'Edicion', 'add_empty' => true)),
      'id_status'       => new sfWidgetFormPropelChoice(array('model' => 'Status', 'add_empty' => true)),
      'id_institucion'  => new sfWidgetFormPropelChoice(array('model' => 'Institucion', 'add_empty' => true)),
      'fecha_inicio'    => new sfWidgetFormFilterInput(),
      'fecha_fin'       => new sfWidgetFormFilterInput(),
      'status_actual'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'id_impresion'    => new sfWidgetFormPropelChoice(array('model' => 'Impresion', 'add_empty' => true)),
      'id_distribucion' => new sfWidgetFormPropelChoice(array('model' => 'Distribucion', 'add_empty' => true)),
      'id_venta'        => new sfWidgetFormPropelChoice(array('model' => 'Venta', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_edicion'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Edicion', 'column' => 'id')),
      'id_status'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Status', 'column' => 'id')),
      'id_institucion'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Institucion', 'column' => 'id')),
      'fecha_inicio'    => new sfValidatorPass(array('required' => false)),
      'fecha_fin'       => new sfValidatorPass(array('required' => false)),
      'status_actual'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'id_impresion'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Impresion', 'column' => 'id')),
      'id_distribucion' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Distribucion', 'column' => 'id')),
      'id_venta'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Venta', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('historico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Historico';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'id_edicion'      => 'ForeignKey',
      'id_status'       => 'ForeignKey',
      'id_institucion'  => 'ForeignKey',
      'fecha_inicio'    => 'Text',
      'fecha_fin'       => 'Text',
      'status_actual'   => 'Boolean',
      'id_impresion'    => 'ForeignKey',
      'id_distribucion' => 'ForeignKey',
      'id_venta'        => 'ForeignKey',
    );
  }
}
