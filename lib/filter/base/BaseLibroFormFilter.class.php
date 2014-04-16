<?php

/**
 * Libro filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseLibroFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'             => new sfWidgetFormFilterInput(),
      'subtitulo'          => new sfWidgetFormFilterInput(),
      'id_genero'          => new sfWidgetFormPropelChoice(array('model' => 'Genero', 'add_empty' => true)),
      'id_tematica'        => new sfWidgetFormPropelChoice(array('model' => 'Tematica', 'add_empty' => true)),
      'id_autor'           => new sfWidgetFormPropelChoice(array('model' => 'Autor', 'add_empty' => true)),
      'id_materia'         => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => true)),
      'id_tipopublicacion' => new sfWidgetFormPropelChoice(array('model' => 'Tipopublicacion', 'add_empty' => true)),
      'sinopsis'           => new sfWidgetFormFilterInput(),
      'cantidad_libro'     => new sfWidgetFormFilterInput(),
      'compilador'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'titulo'             => new sfValidatorPass(array('required' => false)),
      'subtitulo'          => new sfValidatorPass(array('required' => false)),
      'id_genero'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Genero', 'column' => 'id')),
      'id_tematica'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tematica', 'column' => 'id')),
      'id_autor'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Autor', 'column' => 'id')),
      'id_materia'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Materia', 'column' => 'id')),
      'id_tipopublicacion' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipopublicacion', 'column' => 'id')),
      'sinopsis'           => new sfValidatorPass(array('required' => false)),
      'cantidad_libro'     => new sfValidatorPass(array('required' => false)),
      'compilador'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('libro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Libro';
  }

  public function getFields()
  {
    return array(
      'titulo'             => 'Text',
      'subtitulo'          => 'Text',
      'id_genero'          => 'ForeignKey',
      'id_tematica'        => 'ForeignKey',
      'id_autor'           => 'ForeignKey',
      'id_materia'         => 'ForeignKey',
      'id_tipopublicacion' => 'ForeignKey',
      'sinopsis'           => 'Text',
      'cantidad_libro'     => 'Text',
      'compilador'         => 'Text',
      'id'                 => 'Number',
    );
  }
}
