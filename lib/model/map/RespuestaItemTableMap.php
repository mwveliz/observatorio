<?php



/**
 * This class defines the structure of the 'respuesta_item' table.
 *
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Wed Mar 12 10:33:15 2014
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class RespuestaItemTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.RespuestaItemTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('respuesta_item');
		$this->setPhpName('RespuestaItem');
		$this->setClassname('RespuestaItem');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('respuesta_item_id_seq');
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, null, null);
		$this->addForeignKey('ID_RESPUESTA_ENCUESTA', 'IdRespuestaEncuesta', 'BIGINT', 'respuesta_encuesta', 'ID', false, null, null);
		$this->addColumn('VALOR', 'Valor', 'VARCHAR', false, 255, null);
		$this->addForeignKey('ID_ITEM', 'IdItem', 'BIGINT', 'item', 'ID', false, null, null);
		$this->addColumn('TIPO_ITEM', 'TipoItem', 'VARCHAR', false, 255, null);
		$this->addForeignKey('ID_OPCION', 'IdOpcion', 'BIGINT', 'opcion_respuesta', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('RespuestaEncuesta', 'RespuestaEncuesta', RelationMap::MANY_TO_ONE, array('id_respuesta_encuesta' => 'id', ), null, null);
    $this->addRelation('Item', 'Item', RelationMap::MANY_TO_ONE, array('id_item' => 'id', ), null, null);
    $this->addRelation('OpcionRespuesta', 'OpcionRespuesta', RelationMap::MANY_TO_ONE, array('id_opcion' => 'id', ), null, null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // RespuestaItemTableMap
