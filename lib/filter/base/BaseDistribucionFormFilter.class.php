<?php

/**
 * Distribucion filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDistribucionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_edicion'        => new sfWidgetFormPropelChoice(array('model' => 'Edicion', 'add_empty' => true)),
      'cantidad_ejemplar' => new sfWidgetFormFilterInput(),
      'fecha'             => new sfWidgetFormFilterInput(),
      'id_tipodestino'    => new sfWidgetFormPropelChoice(array('model' => 'Tipodestino', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_edicion'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Edicion', 'column' => 'id')),
      'cantidad_ejemplar' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha'             => new sfValidatorPass(array('required' => false)),
      'id_tipodestino'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipodestino', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('distribucion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Distribucion';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'id_edicion'        => 'ForeignKey',
      'cantidad_ejemplar' => 'Number',
      'fecha'             => 'Text',
      'id_tipodestino'    => 'ForeignKey',
    );
  }
}
