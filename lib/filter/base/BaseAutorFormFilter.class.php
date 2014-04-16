<?php

/**
 * Autor filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAutorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ficha_autor'      => new sfWidgetFormFilterInput(),
      'inedito'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sexo'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'nacionalidad'     => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterInput(),
      'nombre'           => new sfWidgetFormFilterInput(),
      'apellido'         => new sfWidgetFormFilterInput(),
      'vive'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipoautor'        => new sfWidgetFormPropelChoice(array('model' => 'Autor', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'ficha_autor'      => new sfValidatorPass(array('required' => false)),
      'inedito'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sexo'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'nacionalidad'     => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'apellido'         => new sfValidatorPass(array('required' => false)),
      'vive'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipoautor'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Autor', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('autor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Autor';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'ficha_autor'      => 'Text',
      'inedito'          => 'Boolean',
      'sexo'             => 'Boolean',
      'nacionalidad'     => 'Text',
      'fecha_nacimiento' => 'Number',
      'nombre'           => 'Text',
      'apellido'         => 'Text',
      'vive'             => 'Boolean',
      'tipoautor'        => 'ForeignKey',
    );
  }
}
