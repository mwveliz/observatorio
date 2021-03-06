<?php


/**
 * Base class that represents a query for the 'historico' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Thu Feb 20 13:36:21 2014
 *
 * @method     HistoricoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     HistoricoQuery orderByIdEdicion($order = Criteria::ASC) Order by the id_edicion column
 * @method     HistoricoQuery orderByIdStatus($order = Criteria::ASC) Order by the id_status column
 * @method     HistoricoQuery orderByIdInstitucion($order = Criteria::ASC) Order by the id_institucion column
 * @method     HistoricoQuery orderByFechaInicio($order = Criteria::ASC) Order by the fecha_inicio column
 * @method     HistoricoQuery orderByFechaFin($order = Criteria::ASC) Order by the fecha_fin column
 * @method     HistoricoQuery orderByStatusActual($order = Criteria::ASC) Order by the status_actual column
 * @method     HistoricoQuery orderByIdImpresion($order = Criteria::ASC) Order by the id_impresion column
 * @method     HistoricoQuery orderByIdDistribucion($order = Criteria::ASC) Order by the id_distribucion column
 * @method     HistoricoQuery orderByIdVenta($order = Criteria::ASC) Order by the id_venta column
 *
 * @method     HistoricoQuery groupById() Group by the id column
 * @method     HistoricoQuery groupByIdEdicion() Group by the id_edicion column
 * @method     HistoricoQuery groupByIdStatus() Group by the id_status column
 * @method     HistoricoQuery groupByIdInstitucion() Group by the id_institucion column
 * @method     HistoricoQuery groupByFechaInicio() Group by the fecha_inicio column
 * @method     HistoricoQuery groupByFechaFin() Group by the fecha_fin column
 * @method     HistoricoQuery groupByStatusActual() Group by the status_actual column
 * @method     HistoricoQuery groupByIdImpresion() Group by the id_impresion column
 * @method     HistoricoQuery groupByIdDistribucion() Group by the id_distribucion column
 * @method     HistoricoQuery groupByIdVenta() Group by the id_venta column
 *
 * @method     HistoricoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     HistoricoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     HistoricoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     HistoricoQuery leftJoinEdicion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Edicion relation
 * @method     HistoricoQuery rightJoinEdicion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Edicion relation
 * @method     HistoricoQuery innerJoinEdicion($relationAlias = null) Adds a INNER JOIN clause to the query using the Edicion relation
 *
 * @method     HistoricoQuery leftJoinStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the Status relation
 * @method     HistoricoQuery rightJoinStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Status relation
 * @method     HistoricoQuery innerJoinStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the Status relation
 *
 * @method     HistoricoQuery leftJoinInstitucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Institucion relation
 * @method     HistoricoQuery rightJoinInstitucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Institucion relation
 * @method     HistoricoQuery innerJoinInstitucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Institucion relation
 *
 * @method     HistoricoQuery leftJoinImpresion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Impresion relation
 * @method     HistoricoQuery rightJoinImpresion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Impresion relation
 * @method     HistoricoQuery innerJoinImpresion($relationAlias = null) Adds a INNER JOIN clause to the query using the Impresion relation
 *
 * @method     HistoricoQuery leftJoinDistribucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Distribucion relation
 * @method     HistoricoQuery rightJoinDistribucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Distribucion relation
 * @method     HistoricoQuery innerJoinDistribucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Distribucion relation
 *
 * @method     HistoricoQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method     HistoricoQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method     HistoricoQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method     Historico findOne(PropelPDO $con = null) Return the first Historico matching the query
 * @method     Historico findOneOrCreate(PropelPDO $con = null) Return the first Historico matching the query, or a new Historico object populated from the query conditions when no match is found
 *
 * @method     Historico findOneById(string $id) Return the first Historico filtered by the id column
 * @method     Historico findOneByIdEdicion(int $id_edicion) Return the first Historico filtered by the id_edicion column
 * @method     Historico findOneByIdStatus(int $id_status) Return the first Historico filtered by the id_status column
 * @method     Historico findOneByIdInstitucion(int $id_institucion) Return the first Historico filtered by the id_institucion column
 * @method     Historico findOneByFechaInicio(string $fecha_inicio) Return the first Historico filtered by the fecha_inicio column
 * @method     Historico findOneByFechaFin(string $fecha_fin) Return the first Historico filtered by the fecha_fin column
 * @method     Historico findOneByStatusActual(boolean $status_actual) Return the first Historico filtered by the status_actual column
 * @method     Historico findOneByIdImpresion(int $id_impresion) Return the first Historico filtered by the id_impresion column
 * @method     Historico findOneByIdDistribucion(int $id_distribucion) Return the first Historico filtered by the id_distribucion column
 * @method     Historico findOneByIdVenta(int $id_venta) Return the first Historico filtered by the id_venta column
 *
 * @method     array findById(string $id) Return Historico objects filtered by the id column
 * @method     array findByIdEdicion(int $id_edicion) Return Historico objects filtered by the id_edicion column
 * @method     array findByIdStatus(int $id_status) Return Historico objects filtered by the id_status column
 * @method     array findByIdInstitucion(int $id_institucion) Return Historico objects filtered by the id_institucion column
 * @method     array findByFechaInicio(string $fecha_inicio) Return Historico objects filtered by the fecha_inicio column
 * @method     array findByFechaFin(string $fecha_fin) Return Historico objects filtered by the fecha_fin column
 * @method     array findByStatusActual(boolean $status_actual) Return Historico objects filtered by the status_actual column
 * @method     array findByIdImpresion(int $id_impresion) Return Historico objects filtered by the id_impresion column
 * @method     array findByIdDistribucion(int $id_distribucion) Return Historico objects filtered by the id_distribucion column
 * @method     array findByIdVenta(int $id_venta) Return Historico objects filtered by the id_venta column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseHistoricoQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseHistoricoQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Historico', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new HistoricoQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    HistoricoQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof HistoricoQuery) {
			return $criteria;
		}
		$query = new HistoricoQuery();
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
	 * @return    Historico|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = HistoricoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(HistoricoPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(HistoricoPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(HistoricoPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the id_edicion column
	 * 
	 * @param     int|array $idEdicion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByIdEdicion($idEdicion = null, $comparison = null)
	{
		if (is_array($idEdicion)) {
			$useMinMax = false;
			if (isset($idEdicion['min'])) {
				$this->addUsingAlias(HistoricoPeer::ID_EDICION, $idEdicion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idEdicion['max'])) {
				$this->addUsingAlias(HistoricoPeer::ID_EDICION, $idEdicion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HistoricoPeer::ID_EDICION, $idEdicion, $comparison);
	}

	/**
	 * Filter the query on the id_status column
	 * 
	 * @param     int|array $idStatus The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByIdStatus($idStatus = null, $comparison = null)
	{
		if (is_array($idStatus)) {
			$useMinMax = false;
			if (isset($idStatus['min'])) {
				$this->addUsingAlias(HistoricoPeer::ID_STATUS, $idStatus['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idStatus['max'])) {
				$this->addUsingAlias(HistoricoPeer::ID_STATUS, $idStatus['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HistoricoPeer::ID_STATUS, $idStatus, $comparison);
	}

	/**
	 * Filter the query on the id_institucion column
	 * 
	 * @param     int|array $idInstitucion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByIdInstitucion($idInstitucion = null, $comparison = null)
	{
		if (is_array($idInstitucion)) {
			$useMinMax = false;
			if (isset($idInstitucion['min'])) {
				$this->addUsingAlias(HistoricoPeer::ID_INSTITUCION, $idInstitucion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idInstitucion['max'])) {
				$this->addUsingAlias(HistoricoPeer::ID_INSTITUCION, $idInstitucion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HistoricoPeer::ID_INSTITUCION, $idInstitucion, $comparison);
	}

	/**
	 * Filter the query on the fecha_inicio column
	 * 
	 * @param     string $fechaInicio The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByFechaInicio($fechaInicio = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fechaInicio)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fechaInicio)) {
				$fechaInicio = str_replace('*', '%', $fechaInicio);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(HistoricoPeer::FECHA_INICIO, $fechaInicio, $comparison);
	}

	/**
	 * Filter the query on the fecha_fin column
	 * 
	 * @param     string $fechaFin The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByFechaFin($fechaFin = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fechaFin)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fechaFin)) {
				$fechaFin = str_replace('*', '%', $fechaFin);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(HistoricoPeer::FECHA_FIN, $fechaFin, $comparison);
	}

	/**
	 * Filter the query on the status_actual column
	 * 
	 * @param     boolean|string $statusActual The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByStatusActual($statusActual = null, $comparison = null)
	{
		if (is_string($statusActual)) {
			$status_actual = in_array(strtolower($statusActual), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(HistoricoPeer::STATUS_ACTUAL, $statusActual, $comparison);
	}

	/**
	 * Filter the query on the id_impresion column
	 * 
	 * @param     int|array $idImpresion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByIdImpresion($idImpresion = null, $comparison = null)
	{
		if (is_array($idImpresion)) {
			$useMinMax = false;
			if (isset($idImpresion['min'])) {
				$this->addUsingAlias(HistoricoPeer::ID_IMPRESION, $idImpresion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idImpresion['max'])) {
				$this->addUsingAlias(HistoricoPeer::ID_IMPRESION, $idImpresion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HistoricoPeer::ID_IMPRESION, $idImpresion, $comparison);
	}

	/**
	 * Filter the query on the id_distribucion column
	 * 
	 * @param     int|array $idDistribucion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByIdDistribucion($idDistribucion = null, $comparison = null)
	{
		if (is_array($idDistribucion)) {
			$useMinMax = false;
			if (isset($idDistribucion['min'])) {
				$this->addUsingAlias(HistoricoPeer::ID_DISTRIBUCION, $idDistribucion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idDistribucion['max'])) {
				$this->addUsingAlias(HistoricoPeer::ID_DISTRIBUCION, $idDistribucion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HistoricoPeer::ID_DISTRIBUCION, $idDistribucion, $comparison);
	}

	/**
	 * Filter the query on the id_venta column
	 * 
	 * @param     int|array $idVenta The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByIdVenta($idVenta = null, $comparison = null)
	{
		if (is_array($idVenta)) {
			$useMinMax = false;
			if (isset($idVenta['min'])) {
				$this->addUsingAlias(HistoricoPeer::ID_VENTA, $idVenta['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idVenta['max'])) {
				$this->addUsingAlias(HistoricoPeer::ID_VENTA, $idVenta['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(HistoricoPeer::ID_VENTA, $idVenta, $comparison);
	}

	/**
	 * Filter the query by a related Edicion object
	 *
	 * @param     Edicion $edicion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByEdicion($edicion, $comparison = null)
	{
		return $this
			->addUsingAlias(HistoricoPeer::ID_EDICION, $edicion->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Edicion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
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
	 * Filter the query by a related Status object
	 *
	 * @param     Status $status  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByStatus($status, $comparison = null)
	{
		return $this
			->addUsingAlias(HistoricoPeer::ID_STATUS, $status->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Status relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function joinStatus($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Status');
		
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
			$this->addJoinObject($join, 'Status');
		}
		
		return $this;
	}

	/**
	 * Use the Status relation Status object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    StatusQuery A secondary query class using the current class as primary query
	 */
	public function useStatusQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinStatus($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Status', 'StatusQuery');
	}

	/**
	 * Filter the query by a related Institucion object
	 *
	 * @param     Institucion $institucion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByInstitucion($institucion, $comparison = null)
	{
		return $this
			->addUsingAlias(HistoricoPeer::ID_INSTITUCION, $institucion->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Institucion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function joinInstitucion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Institucion');
		
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
			$this->addJoinObject($join, 'Institucion');
		}
		
		return $this;
	}

	/**
	 * Use the Institucion relation Institucion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    InstitucionQuery A secondary query class using the current class as primary query
	 */
	public function useInstitucionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinInstitucion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Institucion', 'InstitucionQuery');
	}

	/**
	 * Filter the query by a related Impresion object
	 *
	 * @param     Impresion $impresion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByImpresion($impresion, $comparison = null)
	{
		return $this
			->addUsingAlias(HistoricoPeer::ID_IMPRESION, $impresion->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Impresion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function joinImpresion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Impresion');
		
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
			$this->addJoinObject($join, 'Impresion');
		}
		
		return $this;
	}

	/**
	 * Use the Impresion relation Impresion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImpresionQuery A secondary query class using the current class as primary query
	 */
	public function useImpresionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinImpresion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Impresion', 'ImpresionQuery');
	}

	/**
	 * Filter the query by a related Distribucion object
	 *
	 * @param     Distribucion $distribucion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByDistribucion($distribucion, $comparison = null)
	{
		return $this
			->addUsingAlias(HistoricoPeer::ID_DISTRIBUCION, $distribucion->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Distribucion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function joinDistribucion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Distribucion');
		
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
			$this->addJoinObject($join, 'Distribucion');
		}
		
		return $this;
	}

	/**
	 * Use the Distribucion relation Distribucion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DistribucionQuery A secondary query class using the current class as primary query
	 */
	public function useDistribucionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinDistribucion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Distribucion', 'DistribucionQuery');
	}

	/**
	 * Filter the query by a related Venta object
	 *
	 * @param     Venta $venta  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function filterByVenta($venta, $comparison = null)
	{
		return $this
			->addUsingAlias(HistoricoPeer::ID_VENTA, $venta->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Venta relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function joinVenta($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Venta');
		
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
			$this->addJoinObject($join, 'Venta');
		}
		
		return $this;
	}

	/**
	 * Use the Venta relation Venta object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    VentaQuery A secondary query class using the current class as primary query
	 */
	public function useVentaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinVenta($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Historico $historico Object to remove from the list of results
	 *
	 * @return    HistoricoQuery The current query, for fluid interface
	 */
	public function prune($historico = null)
	{
		if ($historico) {
			$this->addUsingAlias(HistoricoPeer::ID, $historico->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseHistoricoQuery
