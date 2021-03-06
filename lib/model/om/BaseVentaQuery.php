<?php


/**
 * Base class that represents a query for the 'venta' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Thu Feb 20 13:36:21 2014
 *
 * @method     VentaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VentaQuery orderByCantidadEjemplares($order = Criteria::ASC) Order by the cantidad_ejemplares column
 * @method     VentaQuery orderByFecha($order = Criteria::ASC) Order by the fecha column
 * @method     VentaQuery orderByIdLibreria($order = Criteria::ASC) Order by the id_libreria column
 * @method     VentaQuery orderByIdEdicion($order = Criteria::ASC) Order by the id_edicion column
 * @method     VentaQuery orderByIdTipodestino($order = Criteria::ASC) Order by the id_tipodestino column
 *
 * @method     VentaQuery groupById() Group by the id column
 * @method     VentaQuery groupByCantidadEjemplares() Group by the cantidad_ejemplares column
 * @method     VentaQuery groupByFecha() Group by the fecha column
 * @method     VentaQuery groupByIdLibreria() Group by the id_libreria column
 * @method     VentaQuery groupByIdEdicion() Group by the id_edicion column
 * @method     VentaQuery groupByIdTipodestino() Group by the id_tipodestino column
 *
 * @method     VentaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VentaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VentaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VentaQuery leftJoinLibreria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Libreria relation
 * @method     VentaQuery rightJoinLibreria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Libreria relation
 * @method     VentaQuery innerJoinLibreria($relationAlias = null) Adds a INNER JOIN clause to the query using the Libreria relation
 *
 * @method     VentaQuery leftJoinEdicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Edicion relation
 * @method     VentaQuery rightJoinEdicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Edicion relation
 * @method     VentaQuery innerJoinEdicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Edicion relation
 *
 * @method     VentaQuery leftJoinTipodestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipodestino relation
 * @method     VentaQuery rightJoinTipodestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipodestino relation
 * @method     VentaQuery innerJoinTipodestino($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipodestino relation
 *
 * @method     VentaQuery leftJoinHistorico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Historico relation
 * @method     VentaQuery rightJoinHistorico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Historico relation
 * @method     VentaQuery innerJoinHistorico($relationAlias = null) Adds a INNER JOIN clause to the query using the Historico relation
 *
 * @method     Venta findOne(PropelPDO $con = null) Return the first Venta matching the query
 * @method     Venta findOneOrCreate(PropelPDO $con = null) Return the first Venta matching the query, or a new Venta object populated from the query conditions when no match is found
 *
 * @method     Venta findOneById(string $id) Return the first Venta filtered by the id column
 * @method     Venta findOneByCantidadEjemplares(int $cantidad_ejemplares) Return the first Venta filtered by the cantidad_ejemplares column
 * @method     Venta findOneByFecha(string $fecha) Return the first Venta filtered by the fecha column
 * @method     Venta findOneByIdLibreria(int $id_libreria) Return the first Venta filtered by the id_libreria column
 * @method     Venta findOneByIdEdicion(int $id_edicion) Return the first Venta filtered by the id_edicion column
 * @method     Venta findOneByIdTipodestino(string $id_tipodestino) Return the first Venta filtered by the id_tipodestino column
 *
 * @method     array findById(string $id) Return Venta objects filtered by the id column
 * @method     array findByCantidadEjemplares(int $cantidad_ejemplares) Return Venta objects filtered by the cantidad_ejemplares column
 * @method     array findByFecha(string $fecha) Return Venta objects filtered by the fecha column
 * @method     array findByIdLibreria(int $id_libreria) Return Venta objects filtered by the id_libreria column
 * @method     array findByIdEdicion(int $id_edicion) Return Venta objects filtered by the id_edicion column
 * @method     array findByIdTipodestino(string $id_tipodestino) Return Venta objects filtered by the id_tipodestino column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVentaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseVentaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Venta', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new VentaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    VentaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof VentaQuery) {
			return $criteria;
		}
		$query = new VentaQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Venta|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = VentaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(VentaPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(VentaPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(VentaPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the cantidad_ejemplares column
	 * 
	 * @param     int|array $cantidadEjemplares The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByCantidadEjemplares($cantidadEjemplares = null, $comparison = null)
	{
		if (is_array($cantidadEjemplares)) {
			$useMinMax = false;
			if (isset($cantidadEjemplares['min'])) {
				$this->addUsingAlias(VentaPeer::CANTIDAD_EJEMPLARES, $cantidadEjemplares['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cantidadEjemplares['max'])) {
				$this->addUsingAlias(VentaPeer::CANTIDAD_EJEMPLARES, $cantidadEjemplares['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VentaPeer::CANTIDAD_EJEMPLARES, $cantidadEjemplares, $comparison);
	}

	/**
	 * Filter the query on the fecha column
	 * 
	 * @param     string $fecha The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByFecha($fecha = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fecha)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fecha)) {
				$fecha = str_replace('*', '%', $fecha);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(VentaPeer::FECHA, $fecha, $comparison);
	}

	/**
	 * Filter the query on the id_libreria column
	 * 
	 * @param     int|array $idLibreria The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByIdLibreria($idLibreria = null, $comparison = null)
	{
		if (is_array($idLibreria)) {
			$useMinMax = false;
			if (isset($idLibreria['min'])) {
				$this->addUsingAlias(VentaPeer::ID_LIBRERIA, $idLibreria['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idLibreria['max'])) {
				$this->addUsingAlias(VentaPeer::ID_LIBRERIA, $idLibreria['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VentaPeer::ID_LIBRERIA, $idLibreria, $comparison);
	}

	/**
	 * Filter the query on the id_edicion column
	 * 
	 * @param     int|array $idEdicion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByIdEdicion($idEdicion = null, $comparison = null)
	{
		if (is_array($idEdicion)) {
			$useMinMax = false;
			if (isset($idEdicion['min'])) {
				$this->addUsingAlias(VentaPeer::ID_EDICION, $idEdicion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idEdicion['max'])) {
				$this->addUsingAlias(VentaPeer::ID_EDICION, $idEdicion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VentaPeer::ID_EDICION, $idEdicion, $comparison);
	}

	/**
	 * Filter the query on the id_tipodestino column
	 * 
	 * @param     string|array $idTipodestino The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByIdTipodestino($idTipodestino = null, $comparison = null)
	{
		if (is_array($idTipodestino)) {
			$useMinMax = false;
			if (isset($idTipodestino['min'])) {
				$this->addUsingAlias(VentaPeer::ID_TIPODESTINO, $idTipodestino['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTipodestino['max'])) {
				$this->addUsingAlias(VentaPeer::ID_TIPODESTINO, $idTipodestino['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(VentaPeer::ID_TIPODESTINO, $idTipodestino, $comparison);
	}

	/**
	 * Filter the query by a related Libreria object
	 *
	 * @param     Libreria $libreria  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByLibreria($libreria, $comparison = null)
	{
		return $this
			->addUsingAlias(VentaPeer::ID_LIBRERIA, $libreria->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Libreria relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function joinLibreria($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Libreria');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Libreria');
		}
		
		return $this;
	}

	/**
	 * Use the Libreria relation Libreria object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LibreriaQuery A secondary query class using the current class as primary query
	 */
	public function useLibreriaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinLibreria($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Libreria', 'LibreriaQuery');
	}

	/**
	 * Filter the query by a related Edicion object
	 *
	 * @param     Edicion $edicion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByEdicion($edicion, $comparison = null)
	{
		return $this
			->addUsingAlias(VentaPeer::ID_EDICION, $edicion->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Edicion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function joinEdicion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Edicion');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Edicion');
		}
		
		return $this;
	}

	/**
	 * Use the Edicion relation Edicion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EdicionQuery A secondary query class using the current class as primary query
	 */
	public function useEdicionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinEdicion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Edicion', 'EdicionQuery');
	}

	/**
	 * Filter the query by a related Tipodestino object
	 *
	 * @param     Tipodestino $tipodestino  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByTipodestino($tipodestino, $comparison = null)
	{
		return $this
			->addUsingAlias(VentaPeer::ID_TIPODESTINO, $tipodestino->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Tipodestino relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function joinTipodestino($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Tipodestino');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Tipodestino');
		}
		
		return $this;
	}

	/**
	 * Use the Tipodestino relation Tipodestino object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TipodestinoQuery A secondary query class using the current class as primary query
	 */
	public function useTipodestinoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTipodestino($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Tipodestino', 'TipodestinoQuery');
	}

	/**
	 * Filter the query by a related Historico object
	 *
	 * @param     Historico $historico  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function filterByHistorico($historico, $comparison = null)
	{
		return $this
			->addUsingAlias(VentaPeer::ID, $historico->getIdVenta(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Historico relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function joinHistorico($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Historico');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Historico');
		}
		
		return $this;
	}

	/**
	 * Use the Historico relation Historico object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    HistoricoQuery A secondary query class using the current class as primary query
	 */
	public function useHistoricoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinHistorico($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Historico', 'HistoricoQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Venta $venta Object to remove from the list of results
	 *
	 * @return    VentaQuery The current query, for fluid interface
	 */
	public function prune($venta = null)
	{
		if ($venta) {
			$this->addUsingAlias(VentaPeer::ID, $venta->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseVentaQuery
