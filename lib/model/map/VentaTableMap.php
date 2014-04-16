<?php



/**
 * This class defines the structure of the 'venta' table.
 *
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Thu Feb 20 13:36:21 2014
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class VentaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.VentaTableMap';

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
		$this->setName('venta');
		$this->setPhpName('Venta');
		$this->setClassname('Venta');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('venta_id_seq');
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, null, null);
		$this->addColumn('CANTIDAD_EJEMPLARES', 'CantidadEjemplares', 'INTEGER', false, null, null);
		$this->addColumn('FECHA', 'Fecha', 'VARCHAR', false, 255, null);
		$this->addForeignKey('ID_LIBRERIA', 'IdLibreria', 'INTEGER', 'libreria', 'ID', false, null, null);
		$this->addForeignKey('ID_EDICION', 'IdEdicion', 'INTEGER', 'edicion', 'ID', false, null, null);
		$this->addForeignKey('ID_TIPODESTINO', 'IdTipodestino', 'BIGINT', 'tipodestino', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Libreria', 'Libreria', RelationMap::MANY_TO_ONE, array('id_libreria' => 'id', ), null, 'CASCADE');
    $this->addRelation('Edicion', 'Edicion', RelationMap::MANY_TO_ONE, array('id_edicion' => 'id', ), null, 'CASCADE');
    $this->addRelation('Tipodestino', 'Tipodestino', RelationMap::MANY_TO_ONE, array('id_tipodestino' => 'id', ), null, 'CASCADE');
    $this->addRelation('Historico', 'Historico', RelationMap::ONE_TO_MANY, array('id' => 'id_venta', ), null, 'CASCADE');
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

} // VentaTableMap
