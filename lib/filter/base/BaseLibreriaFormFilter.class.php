<?php

/**
 * Libreria filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseLibreriaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion'     => new sfWidgetFormFilterInput(),
      'id_tipolibreria' => new sfWidgetFormPropelChoice(array('model' => 'Tipolibreria', 'add_empty' => true)),
      'id_municipio'    => new sfWidgetFormPropelChoice(array('model' => 'Municipio', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'descripcion'     => new sfValidatorPass(array('required' => false)),
      'id_tipolibreria' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipolibreria', 'column' => 'id')),
      'id_municipio'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Municipio', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('libreria_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Libreria';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'descripcion'     => 'Text',
      'id_tipolibreria' => 'ForeignKey',
      'id_municipio'    => 'ForeignKey',
    );
  }
}
