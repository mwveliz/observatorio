<?php

/**
 * Venta filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVentaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cantidad_ejemplares' => new sfWidgetFormFilterInput(),
      'fecha'               => new sfWidgetFormFilterInput(),
      'id_libreria'         => new sfWidgetFormPropelChoice(array('model' => 'Libreria', 'add_empty' => true)),
      'id_edicion'          => new sfWidgetFormPropelChoice(array('model' => 'Edicion', 'add_empty' => true)),
      'id_tipodestino'      => new sfWidgetFormPropelChoice(array('model' => 'Tipodestino', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cantidad_ejemplares' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha'               => new sfValidatorPass(array('required' => false)),
      'id_libreria'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Libreria', 'column' => 'id')),
      'id_edicion'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Edicion', 'column' => 'id')),
      'id_tipodestino'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipodestino', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('venta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Venta';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'cantidad_ejemplares' => 'Number',
      'fecha'               => 'Text',
      'id_libreria'         => 'ForeignKey',
      'id_edicion'          => 'ForeignKey',
      'id_tipodestino'      => 'ForeignKey',
    );
  }
}
