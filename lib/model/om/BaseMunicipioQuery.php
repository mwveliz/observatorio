<?php


/**
 * Base class that represents a query for the 'municipio' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Wed Mar 12 10:33:15 2014
 *
 * @method     MunicipioQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     MunicipioQuery orderByMunicipio($order = Criteria::ASC) Order by the municipio column
 * @method     MunicipioQuery orderByIdEstado($order = Criteria::ASC) Order by the id_estado column
 *
 * @method     MunicipioQuery groupById() Group by the id column
 * @method     MunicipioQuery groupByMunicipio() Group by the municipio column
 * @method     MunicipioQuery groupByIdEstado() Group by the id_estado column
 *
 * @method     MunicipioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MunicipioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MunicipioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MunicipioQuery leftJoinEstado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Estado relation
 * @method     MunicipioQuery rightJoinEstado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Estado relation
 * @method     MunicipioQuery innerJoinEstado($relationAlias = null) Adds a INNER JOIN clause to the query using the Estado relation
 *
 * @method     MunicipioQuery leftJoinParroquia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Parroquia relation
 * @method     MunicipioQuery rightJoinParroquia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Parroquia relation
 * @method     MunicipioQuery innerJoinParroquia($relationAlias = null) Adds a INNER JOIN clause to the query using the Parroquia relation
 *
 * @method     Municipio findOne(PropelPDO $con = null) Return the first Municipio matching the query
 * @method     Municipio findOneOrCreate(PropelPDO $con = null) Return the first Municipio matching the query, or a new Municipio object populated from the query conditions when no match is found
 *
 * @method     Municipio findOneById(int $id) Return the first Municipio filtered by the id column
 * @method     Municipio findOneByMunicipio(string $municipio) Return the first Municipio filtered by the municipio column
 * @method     Municipio findOneByIdEstado(int $id_estado) Return the first Municipio filtered by the id_estado column
 *
 * @method     array findById(int $id) Return Municipio objects filtered by the id column
 * @method     array findByMunicipio(string $municipio) Return Municipio objects filtered by the municipio column
 * @method     array findByIdEstado(int $id_estado) Return Municipio objects filtered by the id_estado column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMunicipioQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseMunicipioQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Municipio', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new MunicipioQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    MunicipioQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof MunicipioQuery) {
			return $criteria;
		}
		$query = new MunicipioQuery();
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
	 * @return    Municipio|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = MunicipioPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(MunicipioPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(MunicipioPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(MunicipioPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the municipio column
	 * 
	 * @param     string $municipio The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function filterByMunicipio($municipio = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($municipio)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $municipio)) {
				$municipio = str_replace('*', '%', $municipio);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(MunicipioPeer::MUNICIPIO, $municipio, $comparison);
	}

	/**
	 * Filter the query on the id_estado column
	 * 
	 * @param     int|array $idEstado The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function filterByIdEstado($idEstado = null, $comparison = null)
	{
		if (is_array($idEstado)) {
			$useMinMax = false;
			if (isset($idEstado['min'])) {
				$this->addUsingAlias(MunicipioPeer::ID_ESTADO, $idEstado['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idEstado['max'])) {
				$this->addUsingAlias(MunicipioPeer::ID_ESTADO, $idEstado['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(MunicipioPeer::ID_ESTADO, $idEstado, $comparison);
	}

	/**
	 * Filter the query by a related Estado object
	 *
	 * @param     Estado $estado  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function filterByEstado($estado, $comparison = null)
	{
		return $this
			->addUsingAlias(MunicipioPeer::ID_ESTADO, $estado->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Estado relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function joinEstado($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Estado');
		
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
			$this->addJoinObject($join, 'Estado');
		}
		
		return $this;
	}

	/**
	 * Use the Estado relation Estado object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    EstadoQuery A secondary query class using the current class as primary query
	 */
	public function useEstadoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinEstado($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Estado', 'EstadoQuery');
	}

	/**
	 * Filter the query by a related Parroquia object
	 *
	 * @param     Parroquia $parroquia  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function filterByParroquia($parroquia, $comparison = null)
	{
		return $this
			->addUsingAlias(MunicipioPeer::ID, $parroquia->getIdMunicipio(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Parroquia relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function joinParroquia($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Parroquia');
		
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
			$this->addJoinObject($join, 'Parroquia');
		}
		
		return $this;
	}

	/**
	 * Use the Parroquia relation Parroquia object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ParroquiaQuery A secondary query class using the current class as primary query
	 */
	public function useParroquiaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinParroquia($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Parroquia', 'ParroquiaQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Municipio $municipio Object to remove from the list of results
	 *
	 * @return    MunicipioQuery The current query, for fluid interface
	 */
	public function prune($municipio = null)
	{
		if ($municipio) {
			$this->addUsingAlias(MunicipioPeer::ID, $municipio->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseMunicipioQuery
