<?php


/**
 * Base class that represents a query for the 'impresion' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Thu Feb 20 13:36:21 2014
 *
 * @method     ImpresionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ImpresionQuery orderByVolumen($order = Criteria::ASC) Order by the volumen column
 * @method     ImpresionQuery orderByIdEdicion($order = Criteria::ASC) Order by the id_edicion column
 * @method     ImpresionQuery orderByIdTipocaratula($order = Criteria::ASC) Order by the id_tipocaratula column
 * @method     ImpresionQuery orderByIdTipoimpresion($order = Criteria::ASC) Order by the id_tipoimpresion column
 * @method     ImpresionQuery orderByIdTipoencuadernacion($order = Criteria::ASC) Order by the id_tipoencuadernacion column
 * @method     ImpresionQuery orderByCosto($order = Criteria::ASC) Order by the costo column
 * @method     ImpresionQuery orderByIdTipotripa($order = Criteria::ASC) Order by the id_tipotripa column
 *
 * @method     ImpresionQuery groupById() Group by the id column
 * @method     ImpresionQuery groupByVolumen() Group by the volumen column
 * @method     ImpresionQuery groupByIdEdicion() Group by the id_edicion column
 * @method     ImpresionQuery groupByIdTipocaratula() Group by the id_tipocaratula column
 * @method     ImpresionQuery groupByIdTipoimpresion() Group by the id_tipoimpresion column
 * @method     ImpresionQuery groupByIdTipoencuadernacion() Group by the id_tipoencuadernacion column
 * @method     ImpresionQuery groupByCosto() Group by the costo column
 * @method     ImpresionQuery groupByIdTipotripa() Group by the id_tipotripa column
 *
 * @method     ImpresionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ImpresionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ImpresionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ImpresionQuery leftJoinEdicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Edicion relation
 * @method     ImpresionQuery rightJoinEdicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Edicion relation
 * @method     ImpresionQuery innerJoinEdicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Edicion relation
 *
 * @method     ImpresionQuery leftJoinTipocaratula($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipocaratula relation
 * @method     ImpresionQuery rightJoinTipocaratula($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipocaratula relation
 * @method     ImpresionQuery innerJoinTipocaratula($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipocaratula relation
 *
 * @method     ImpresionQuery leftJoinTipoimpresion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipoimpresion relation
 * @method     ImpresionQuery rightJoinTipoimpresion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipoimpresion relation
 * @method     ImpresionQuery innerJoinTipoimpresion($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipoimpresion relation
 *
 * @method     ImpresionQuery leftJoinTipoencuadernacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipoencuadernacion relation
 * @method     ImpresionQuery rightJoinTipoencuadernacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipoencuadernacion relation
 * @method     ImpresionQuery innerJoinTipoencuadernacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipoencuadernacion relation
 *
 * @method     ImpresionQuery leftJoinTipotripa($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipotripa relation
 * @method     ImpresionQuery rightJoinTipotripa($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipotripa relation
 * @method     ImpresionQuery innerJoinTipotripa($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipotripa relation
 *
 * @method     ImpresionQuery leftJoinHistorico($relationAlias = null) Adds a LEFT JOIN clause to the query using the Historico relation
 * @method     ImpresionQuery rightJoinHistorico($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Historico relation
 * @method     ImpresionQuery innerJoinHistorico($relationAlias = null) Adds a INNER JOIN clause to the query using the Historico relation
 *
 * @method     Impresion findOne(PropelPDO $con = null) Return the first Impresion matching the query
 * @method     Impresion findOneOrCreate(PropelPDO $con = null) Return the first Impresion matching the query, or a new Impresion object populated from the query conditions when no match is found
 *
 * @method     Impresion findOneById(string $id) Return the first Impresion filtered by the id column
 * @method     Impresion findOneByVolumen(int $volumen) Return the first Impresion filtered by the volumen column
 * @method     Impresion findOneByIdEdicion(int $id_edicion) Return the first Impresion filtered by the id_edicion column
 * @method     Impresion findOneByIdTipocaratula(int $id_tipocaratula) Return the first Impresion filtered by the id_tipocaratula column
 * @method     Impresion findOneByIdTipoimpresion(int $id_tipoimpresion) Return the first Impresion filtered by the id_tipoimpresion column
 * @method     Impresion findOneByIdTipoencuadernacion(int $id_tipoencuadernacion) Return the first Impresion filtered by the id_tipoencuadernacion column
 * @method     Impresion findOneByCosto(string $costo) Return the first Impresion filtered by the costo column
 * @method     Impresion findOneByIdTipotripa(int $id_tipotripa) Return the first Impresion filtered by the id_tipotripa column
 *
 * @method     array findById(string $id) Return Impresion objects filtered by the id column
 * @method     array findByVolumen(int $volumen) Return Impresion objects filtered by the volumen column
 * @method     array findByIdEdicion(int $id_edicion) Return Impresion objects filtered by the id_edicion column
 * @method     array findByIdTipocaratula(int $id_tipocaratula) Return Impresion objects filtered by the id_tipocaratula column
 * @method     array findByIdTipoimpresion(int $id_tipoimpresion) Return Impresion objects filtered by the id_tipoimpresion column
 * @method     array findByIdTipoencuadernacion(int $id_tipoencuadernacion) Return Impresion objects filtered by the id_tipoencuadernacion column
 * @method     array findByCosto(string $costo) Return Impresion objects filtered by the costo column
 * @method     array findByIdTipotripa(int $id_tipotripa) Return Impresion objects filtered by the id_tipotripa column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseImpresionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseImpresionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Impresion', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ImpresionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ImpresionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ImpresionQuery) {
			return $criteria;
		}
		$query = new ImpresionQuery();
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
	 * @return    Impresion|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ImpresionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ImpresionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ImpresionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ImpresionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the volumen column
	 * 
	 * @param     int|array $volumen The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByVolumen($volumen = null, $comparison = null)
	{
		if (is_array($volumen)) {
			$useMinMax = false;
			if (isset($volumen['min'])) {
				$this->addUsingAlias(ImpresionPeer::VOLUMEN, $volumen['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($volumen['max'])) {
				$this->addUsingAlias(ImpresionPeer::VOLUMEN, $volumen['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImpresionPeer::VOLUMEN, $volumen, $comparison);
	}

	/**
	 * Filter the query on the id_edicion column
	 * 
	 * @param     int|array $idEdicion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByIdEdicion($idEdicion = null, $comparison = null)
	{
		if (is_array($idEdicion)) {
			$useMinMax = false;
			if (isset($idEdicion['min'])) {
				$this->addUsingAlias(ImpresionPeer::ID_EDICION, $idEdicion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idEdicion['max'])) {
				$this->addUsingAlias(ImpresionPeer::ID_EDICION, $idEdicion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImpresionPeer::ID_EDICION, $idEdicion, $comparison);
	}

	/**
	 * Filter the query on the id_tipocaratula column
	 * 
	 * @param     int|array $idTipocaratula The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByIdTipocaratula($idTipocaratula = null, $comparison = null)
	{
		if (is_array($idTipocaratula)) {
			$useMinMax = false;
			if (isset($idTipocaratula['min'])) {
				$this->addUsingAlias(ImpresionPeer::ID_TIPOCARATULA, $idTipocaratula['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTipocaratula['max'])) {
				$this->addUsingAlias(ImpresionPeer::ID_TIPOCARATULA, $idTipocaratula['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImpresionPeer::ID_TIPOCARATULA, $idTipocaratula, $comparison);
	}

	/**
	 * Filter the query on the id_tipoimpresion column
	 * 
	 * @param     int|array $idTipoimpresion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByIdTipoimpresion($idTipoimpresion = null, $comparison = null)
	{
		if (is_array($idTipoimpresion)) {
			$useMinMax = false;
			if (isset($idTipoimpresion['min'])) {
				$this->addUsingAlias(ImpresionPeer::ID_TIPOIMPRESION, $idTipoimpresion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTipoimpresion['max'])) {
				$this->addUsingAlias(ImpresionPeer::ID_TIPOIMPRESION, $idTipoimpresion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImpresionPeer::ID_TIPOIMPRESION, $idTipoimpresion, $comparison);
	}

	/**
	 * Filter the query on the id_tipoencuadernacion column
	 * 
	 * @param     int|array $idTipoencuadernacion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByIdTipoencuadernacion($idTipoencuadernacion = null, $comparison = null)
	{
		if (is_array($idTipoencuadernacion)) {
			$useMinMax = false;
			if (isset($idTipoencuadernacion['min'])) {
				$this->addUsingAlias(ImpresionPeer::ID_TIPOENCUADERNACION, $idTipoencuadernacion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTipoencuadernacion['max'])) {
				$this->addUsingAlias(ImpresionPeer::ID_TIPOENCUADERNACION, $idTipoencuadernacion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImpresionPeer::ID_TIPOENCUADERNACION, $idTipoencuadernacion, $comparison);
	}

	/**
	 * Filter the query on the costo column
	 * 
	 * @param     string $costo The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByCosto($costo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($costo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $costo)) {
				$costo = str_replace('*', '%', $costo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ImpresionPeer::COSTO, $costo, $comparison);
	}

	/**
	 * Filter the query on the id_tipotripa column
	 * 
	 * @param     int|array $idTipotripa The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByIdTipotripa($idTipotripa = null, $comparison = null)
	{
		if (is_array($idTipotripa)) {
			$useMinMax = false;
			if (isset($idTipotripa['min'])) {
				$this->addUsingAlias(ImpresionPeer::ID_TIPOTRIPA, $idTipotripa['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTipotripa['max'])) {
				$this->addUsingAlias(ImpresionPeer::ID_TIPOTRIPA, $idTipotripa['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImpresionPeer::ID_TIPOTRIPA, $idTipotripa, $comparison);
	}

	/**
	 * Filter the query by a related Edicion object
	 *
	 * @param     Edicion $edicion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByEdicion($edicion, $comparison = null)
	{
		return $this
			->addUsingAlias(ImpresionPeer::ID_EDICION, $edicion->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Edicion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
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
	 * Filter the query by a related Tipocaratula object
	 *
	 * @param     Tipocaratula $tipocaratula  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByTipocaratula($tipocaratula, $comparison = null)
	{
		return $this
			->addUsingAlias(ImpresionPeer::ID_TIPOCARATULA, $tipocaratula->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Tipocaratula relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function joinTipocaratula($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Tipocaratula');
		
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
			$this->addJoinObject($join, 'Tipocaratula');
		}
		
		return $this;
	}

	/**
	 * Use the Tipocaratula relation Tipocaratula object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TipocaratulaQuery A secondary query class using the current class as primary query
	 */
	public function useTipocaratulaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTipocaratula($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Tipocaratula', 'TipocaratulaQuery');
	}

	/**
	 * Filter the query by a related Tipoimpresion object
	 *
	 * @param     Tipoimpresion $tipoimpresion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByTipoimpresion($tipoimpresion, $comparison = null)
	{
		return $this
			->addUsingAlias(ImpresionPeer::ID_TIPOIMPRESION, $tipoimpresion->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Tipoimpresion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function joinTipoimpresion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Tipoimpresion');
		
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
			$this->addJoinObject($join, 'Tipoimpresion');
		}
		
		return $this;
	}

	/**
	 * Use the Tipoimpresion relation Tipoimpresion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TipoimpresionQuery A secondary query class using the current class as primary query
	 */
	public function useTipoimpresionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTipoimpresion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Tipoimpresion', 'TipoimpresionQuery');
	}

	/**
	 * Filter the query by a related Tipoencuadernacion object
	 *
	 * @param     Tipoencuadernacion $tipoencuadernacion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByTipoencuadernacion($tipoencuadernacion, $comparison = null)
	{
		return $this
			->addUsingAlias(ImpresionPeer::ID_TIPOENCUADERNACION, $tipoencuadernacion->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Tipoencuadernacion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function joinTipoencuadernacion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Tipoencuadernacion');
		
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
			$this->addJoinObject($join, 'Tipoencuadernacion');
		}
		
		return $this;
	}

	/**
	 * Use the Tipoencuadernacion relation Tipoencuadernacion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TipoencuadernacionQuery A secondary query class using the current class as primary query
	 */
	public function useTipoencuadernacionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTipoencuadernacion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Tipoencuadernacion', 'TipoencuadernacionQuery');
	}

	/**
	 * Filter the query by a related Tipotripa object
	 *
	 * @param     Tipotripa $tipotripa  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByTipotripa($tipotripa, $comparison = null)
	{
		return $this
			->addUsingAlias(ImpresionPeer::ID_TIPOTRIPA, $tipotripa->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Tipotripa relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function joinTipotripa($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Tipotripa');
		
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
			$this->addJoinObject($join, 'Tipotripa');
		}
		
		return $this;
	}

	/**
	 * Use the Tipotripa relation Tipotripa object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TipotripaQuery A secondary query class using the current class as primary query
	 */
	public function useTipotripaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTipotripa($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Tipotripa', 'TipotripaQuery');
	}

	/**
	 * Filter the query by a related Historico object
	 *
	 * @param     Historico $historico  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function filterByHistorico($historico, $comparison = null)
	{
		return $this
			->addUsingAlias(ImpresionPeer::ID, $historico->getIdImpresion(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Historico relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
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
	 * @param     Impresion $impresion Object to remove from the list of results
	 *
	 * @return    ImpresionQuery The current query, for fluid interface
	 */
	public function prune($impresion = null)
	{
		if ($impresion) {
			$this->addUsingAlias(ImpresionPeer::ID, $impresion->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseImpresionQuery
