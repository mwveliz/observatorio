<?php

/**
 * Institucion filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseInstitucionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'             => new sfWidgetFormFilterInput(),
      'correo'             => new sfWidgetFormFilterInput(),
      'rif'                => new sfWidgetFormFilterInput(),
      'ubicacion'          => new sfWidgetFormFilterInput(),
      'id_tipoinstitucion' => new sfWidgetFormPropelChoice(array('model' => 'Tipoinstitucion', 'add_empty' => true)),
      'sector'             => new sfWidgetFormFilterInput(),
      'responsable'        => new sfWidgetFormFilterInput(),
      'publica'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'id_pais'            => new sfWidgetFormPropelChoice(array('model' => 'Pais', 'add_empty' => true)),
      'id_municipio'       => new sfWidgetFormPropelChoice(array('model' => 'Municipio', 'add_empty' => true)),
      'id_parroquia'       => new sfWidgetFormPropelChoice(array('model' => 'Parroquia', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'correo'             => new sfValidatorPass(array('required' => false)),
      'rif'                => new sfValidatorPass(array('required' => false)),
      'ubicacion'          => new sfValidatorPass(array('required' => false)),
      'id_tipoinstitucion' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipoinstitucion', 'column' => 'id')),
      'sector'             => new sfValidatorPass(array('required' => false)),
      'responsable'        => new sfValidatorPass(array('required' => false)),
      'publica'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'id_pais'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Pais', 'column' => 'id')),
      'id_municipio'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Municipio', 'column' => 'id')),
      'id_parroquia'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Parroquia', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('institucion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Institucion';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'nombre'             => 'Text',
      'correo'             => 'Text',
      'rif'                => 'Text',
      'ubicacion'          => 'Text',
      'id_tipoinstitucion' => 'ForeignKey',
      'sector'             => 'Text',
      'responsable'        => 'Text',
      'publica'            => 'Boolean',
      'id_pais'            => 'ForeignKey',
      'id_municipio'       => 'ForeignKey',
      'id_parroquia'       => 'ForeignKey',
    );
  }
}
