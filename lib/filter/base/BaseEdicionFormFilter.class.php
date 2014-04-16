<?php

/**
 * Edicion filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEdicionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'traduccion'         => new sfWidgetFormFilterInput(),
      'lengua_origen'      => new sfWidgetFormFilterInput(),
      'lengua_traducir'    => new sfWidgetFormFilterInput(),
      'traductor'          => new sfWidgetFormFilterInput(),
      'numero_reimpresion' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'coedicion'          => new sfWidgetFormFilterInput(),
      'id_libro'           => new sfWidgetFormFilterInput(),
      'corrector'          => new sfWidgetFormFilterInput(),
      'coleccion'          => new sfWidgetFormFilterInput(),
      'isbn'               => new sfWidgetFormFilterInput(),
      'deposito_legal'     => new sfWidgetFormFilterInput(),
      'diagramador'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'traduccion'         => new sfValidatorPass(array('required' => false)),
      'lengua_origen'      => new sfValidatorPass(array('required' => false)),
      'lengua_traducir'    => new sfValidatorPass(array('required' => false)),
      'traductor'          => new sfValidatorPass(array('required' => false)),
      'numero_reimpresion' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'coedicion'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_libro'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'corrector'          => new sfValidatorPass(array('required' => false)),
      'coleccion'          => new sfValidatorPass(array('required' => false)),
      'isbn'               => new sfValidatorPass(array('required' => false)),
      'deposito_legal'     => new sfValidatorPass(array('required' => false)),
      'diagramador'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('edicion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Edicion';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'traduccion'         => 'Text',
      'lengua_origen'      => 'Text',
      'lengua_traducir'    => 'Text',
      'traductor'          => 'Text',
      'numero_reimpresion' => 'Boolean',
      'coedicion'          => 'Number',
      'id_libro'           => 'Number',
      'corrector'          => 'Text',
      'coleccion'          => 'Text',
      'isbn'               => 'Text',
      'deposito_legal'     => 'Text',
      'diagramador'        => 'Text',
    );
  }
}
