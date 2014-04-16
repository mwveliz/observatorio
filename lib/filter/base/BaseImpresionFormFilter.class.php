<?php

/**
 * Impresion filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseImpresionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'volumen'               => new sfWidgetFormFilterInput(),
      'id_edicion'            => new sfWidgetFormPropelChoice(array('model' => 'Edicion', 'add_empty' => true)),
      'id_tipocaratula'       => new sfWidgetFormPropelChoice(array('model' => 'Tipocaratula', 'add_empty' => true)),
      'id_tipoimpresion'      => new sfWidgetFormPropelChoice(array('model' => 'Tipoimpresion', 'add_empty' => true)),
      'id_tipoencuadernacion' => new sfWidgetFormPropelChoice(array('model' => 'Tipoencuadernacion', 'add_empty' => true)),
      'costo'                 => new sfWidgetFormFilterInput(),
      'id_tipotripa'          => new sfWidgetFormPropelChoice(array('model' => 'Tipotripa', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'volumen'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_edicion'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Edicion', 'column' => 'id')),
      'id_tipocaratula'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipocaratula', 'column' => 'id')),
      'id_tipoimpresion'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipoimpresion', 'column' => 'id')),
      'id_tipoencuadernacion' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipoencuadernacion', 'column' => 'id')),
      'costo'                 => new sfValidatorPass(array('required' => false)),
      'id_tipotripa'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipotripa', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('impresion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Impresion';
  }

  public function getFields()
  {
    return array(
      'id'                    => 'Number',
      'volumen'               => 'Number',
      'id_edicion'            => 'ForeignKey',
      'id_tipocaratula'       => 'ForeignKey',
      'id_tipoimpresion'      => 'ForeignKey',
      'id_tipoencuadernacion' => 'ForeignKey',
      'costo'                 => 'Text',
      'id_tipotripa'          => 'ForeignKey',
    );
  }
}
