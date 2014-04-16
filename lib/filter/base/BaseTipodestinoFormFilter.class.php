<?php

/**
 * Tipodestino filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTipodestinoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ente_publico' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'donacion'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'gratuita'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'importacion'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'exportacion'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'otro'         => new sfWidgetFormFilterInput(),
      'id_feria'     => new sfWidgetFormPropelChoice(array('model' => 'Feria', 'add_empty' => true)),
      'id_pais'      => new sfWidgetFormPropelChoice(array('model' => 'Pais', 'add_empty' => true)),
      'id_estado'    => new sfWidgetFormPropelChoice(array('model' => 'Estado', 'add_empty' => true)),
      'id_libreria'  => new sfWidgetFormPropelChoice(array('model' => 'Libreria', 'add_empty' => true)),
      'id_municipio' => new sfWidgetFormPropelChoice(array('model' => 'Municipio', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'ente_publico' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'donacion'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'gratuita'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'importacion'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'exportacion'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'otro'         => new sfValidatorPass(array('required' => false)),
      'id_feria'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Feria', 'column' => 'id')),
      'id_pais'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Pais', 'column' => 'id')),
      'id_estado'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Estado', 'column' => 'id')),
      'id_libreria'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Libreria', 'column' => 'id')),
      'id_municipio' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Municipio', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('tipodestino_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tipodestino';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'ente_publico' => 'Boolean',
      'donacion'     => 'Boolean',
      'gratuita'     => 'Boolean',
      'importacion'  => 'Boolean',
      'exportacion'  => 'Boolean',
      'otro'         => 'Text',
      'id_feria'     => 'ForeignKey',
      'id_pais'      => 'ForeignKey',
      'id_estado'    => 'ForeignKey',
      'id_libreria'  => 'ForeignKey',
      'id_municipio' => 'ForeignKey',
    );
  }
}
