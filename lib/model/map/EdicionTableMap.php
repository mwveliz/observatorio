<?php



/**
 * This class defines the structure of the 'edicion' table.
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
class EdicionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.EdicionTableMap';

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
		$this->setName('edicion');
		$this->setPhpName('Edicion');
		$this->setClassname('Edicion');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('edicion_id_seq');
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, null, null);
		$this->addColumn('TRADUCCION', 'Traduccion', 'VARCHAR', false, 255, null);
		$this->addColumn('LENGUA_ORIGEN', 'LenguaOrigen', 'VARCHAR', false, 255, null);
		$this->addColumn('LENGUA_TRADUCIR', 'LenguaTraducir', 'VARCHAR', false, 255, null);
		$this->addColumn('TRADUCTOR', 'Traductor', 'VARCHAR', false, 255, null);
		$this->addColumn('NUMERO_REIMPRESION', 'NumeroReimpresion', 'BOOLEAN', false, null, null);
		$this->addColumn('COEDICION', 'Coedicion', 'INTEGER', false, null, null);
		$this->addColumn('ID_LIBRO', 'IdLibro', 'INTEGER', false, null, null);
		$this->addColumn('CORRECTOR', 'Corrector', 'VARCHAR', false, 255, null);
		$this->addColumn('COLECCION', 'Coleccion', 'VARCHAR', false, 255, null);
		$this->addColumn('ISBN', 'Isbn', 'VARCHAR', false, 255, null);
		$this->addColumn('DEPOSITO_LEGAL', 'DepositoLegal', 'VARCHAR', false, 255, null);
		$this->addColumn('DIAGRAMADOR', 'Diagramador', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Distribucion', 'Distribucion', RelationMap::ONE_TO_MANY, array('id' => 'id_edicion', ), null, 'CASCADE');
    $this->addRelation('Historico', 'Historico', RelationMap::ONE_TO_MANY, array('id' => 'id_edicion', ), null, 'CASCADE');
    $this->addRelation('Impresion', 'Impresion', RelationMap::ONE_TO_MANY, array('id' => 'id_edicion', ), null, 'CASCADE');
    $this->addRelation('Venta', 'Venta', RelationMap::ONE_TO_MANY, array('id' => 'id_edicion', ), null, 'CASCADE');
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

} // EdicionTableMap
