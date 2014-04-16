<?php

/**
 * Libro form base class.
 *
 * @method Libro getObject() Returns the current form's model object
 *
 * @package    observatorio
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseLibroForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'             => new sfWidgetFormInputText(),
      'subtitulo'          => new sfWidgetFormInputText(),
      'id_genero'          => new sfWidgetFormPropelChoice(array('model' => 'Genero', 'add_empty' => true)),
      'id_tematica'        => new sfWidgetFormPropelChoice(array('model' => 'Tematica', 'add_empty' => true)),
      'id_autor'           => new sfWidgetFormPropelChoice(array('model' => 'Autor', 'add_empty' => true)),
      'id_materia'         => new sfWidgetFormPropelChoice(array('model' => 'Materia', 'add_empty' => true)),
      'id_tipopublicacion' => new sfWidgetFormPropelChoice(array('model' => 'Tipopublicacion', 'add_empty' => true)),
      'sinopsis'           => new sfWidgetFormInputText(),
      'cantidad_libro'     => new sfWidgetFormInputText(),
      'compilador'         => new sfWidgetFormInputText(),
      'id'                 => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'titulo'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'subtitulo'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id_genero'          => new sfValidatorPropelChoice(array('model' => 'Genero', 'column' => 'id', 'required' => false)),
      'id_tematica'        => new sfValidatorPropelChoice(array('model' => 'Tematica', 'column' => 'id', 'required' => false)),
      'id_autor'           => new sfValidatorPropelChoice(array('model' => 'Autor', 'column' => 'id', 'required' => false)),
      'id_materia'         => new sfValidatorPropelChoice(array('model' => 'Materia', 'column' => 'id', 'required' => false)),
      'id_tipopublicacion' => new sfValidatorPropelChoice(array('model' => 'Tipopublicacion', 'column' => 'id', 'required' => false)),
      'sinopsis'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cantidad_libro'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'compilador'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'                 => new sfValidatorPropelChoice(array('model' => 'Libro', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('libro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Libro';
  }


}
