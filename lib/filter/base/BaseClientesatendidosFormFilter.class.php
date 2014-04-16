<?php

/**
 * Clientesatendidos filter form base class.
 *
 * @package    observatorio
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClientesatendidosFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cantidad'    => new sfWidgetFormFilterInput(),
      'fache'       => new sfWidgetFormFilterInput(),
      'id_libreria' => new sfWidgetFormPropelChoice(array('model' => 'Libreria', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cantidad'    => new sfValidatorPass(array('required' => false)),
      'fache'       => new sfValidatorPass(array('required' => false)),
      'id_libreria' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Libreria', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('clientesatendidos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clientesatendidos';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'cantidad'    => 'Text',
      'fache'       => 'Text',
      'id_libreria' => 'ForeignKey',
    );
  }
}
