<?php


/**
 * Base class that represents a query for the 'parroquia' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Wed Mar 12 10:33:15 2014
 *
 * @method     ParroquiaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ParroquiaQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method     ParroquiaQuery orderByIdMunicipio($order = Criteria::ASC) Order by the id_municipio column
 *
 * @method     ParroquiaQuery groupById() Group by the id column
 * @method     ParroquiaQuery groupByDescripcion() Group by the descripcion column
 * @method     ParroquiaQuery groupByIdMunicipio() Group by the id_municipio column
 *
 * @method     ParroquiaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ParroquiaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ParroquiaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ParroquiaQuery leftJoinMunicipio($relationAlias = null) Adds a LEFT JOIN clause to the query using the Municipio relation
 * @method     ParroquiaQuery rightJoinMunicipio($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Municipio relation
 * @method     ParroquiaQuery innerJoinMunicipio($relationAlias = null) Adds a INNER JOIN clause to the query using the Municipio relation
 *
 * @method     Parroquia findOne(PropelPDO $con = null) Return the first Parroquia matching the query
 * @method     Parroquia findOneOrCreate(PropelPDO $con = null) Return the first Parroquia matching the query, or a new Parroquia object populated from the query conditions when no match is found
 *
 * @method     Parroquia findOneById(int $id) Return the first Parroquia filtered by the id column
 * @method     Parroquia findOneByDescripcion(string $descripcion) Return the first Parroquia filtered by the descripcion column
 * @method     Parroquia findOneByIdMunicipio(int $id_municipio) Return the first Parroquia filtered by the id_municipio column
 *
 * @method     array findById(int $id) Return Parroquia objects filtered by the id column
 * @method     array findByDescripcion(string $descripcion) Return Parroquia objects filtered by the descripcion column
 * @method     array findByIdMunicipio(int $id_municipio) Return Parroquia objects filtered by the id_municipio column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseParroquiaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseParroquiaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Parroquia', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ParroquiaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ParroquiaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ParroquiaQuery) {
			return $criteria;
		}
		$query = new ParroquiaQuery();
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
	 * @return    Parroquia|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ParroquiaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ParroquiaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ParroquiaPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ParroquiaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ParroquiaPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ParroquiaQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ParroquiaPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the descripcion column
	 * 
	 * @param     string $descripcion The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ParroquiaQuery The current query, for fluid interface
	 */
	public function filterByDescripcion($descripcion = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($descripcion)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $descripcion)) {
				$descripcion = str_replace('*', '%', $descripcion);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ParroquiaPeer::DESCRIPCION, $descripcion, $comparison);
	}

	/**
	 * Filter the query on the id_municipio column
	 * 
	 * @param     int|array $idMunicipio The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ParroquiaQuery The current query, for fluid interface
	 */
	public function filterByIdMunicipio($idMunicipio = null, $comparison = null)
	{
		if (is_array($idMunicipio)) {
			$useMinMax = false;
			if (isset($idMunicipio['min'])) {
				$this->addUsingAlias(ParroquiaPeer::ID_MUNICIPIO, $idMunicipio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idMunicipio['max'])) {
				$this->addUsingAlias(ParroquiaPeer::ID_MUNICIPIO, $idMunicipio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ParroquiaPeer::ID_MUNICIPIO, $idMunicipio, $comparison);
	}

	/**
	 * Filter the query by a related Municipio object
	 *
	 * @param     Municipio $municipio  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ParroquiaQuery The current query, for fluid interface
	 */
	public function filterByMunicipio($municipio, $comparison = null)
	{
		return $this
			->addUsingAlias(ParroquiaPeer::ID_MUNICIPIO, $municipio->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Municipio relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ParroquiaQuery The current query, for fluid interface
	 */
	public function joinMunicipio($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Municipio');
		
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
			$this->addJoinObject($join, 'Municipio');
		}
		
		return $this;
	}

	/**
	 * Use the Municipio relation Municipio object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MunicipioQuery A secondary query class using the current class as primary query
	 */
	public function useMunicipioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinMunicipio($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Municipio', 'MunicipioQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Parroquia $parroquia Object to remove from the list of results
	 *
	 * @return    ParroquiaQuery The current query, for fluid interface
	 */
	public function prune($parroquia = null)
	{
		if ($parroquia) {
			$this->addUsingAlias(ParroquiaPeer::ID, $parroquia->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseParroquiaQuery
