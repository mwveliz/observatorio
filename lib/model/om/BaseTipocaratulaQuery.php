<?php


/**
 * Base class that represents a query for the 'tipocaratula' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Thu Feb 20 13:36:21 2014
 *
 * @method     TipocaratulaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     TipocaratulaQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 *
 * @method     TipocaratulaQuery groupById() Group by the id column
 * @method     TipocaratulaQuery groupByDescripcion() Group by the descripcion column
 *
 * @method     TipocaratulaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TipocaratulaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TipocaratulaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TipocaratulaQuery leftJoinImpresion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Impresion relation
 * @method     TipocaratulaQuery rightJoinImpresion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Impresion relation
 * @method     TipocaratulaQuery innerJoinImpresion($relationAlias = null) Adds a INNER JOIN clause to the query using the Impresion relation
 *
 * @method     Tipocaratula findOne(PropelPDO $con = null) Return the first Tipocaratula matching the query
 * @method     Tipocaratula findOneOrCreate(PropelPDO $con = null) Return the first Tipocaratula matching the query, or a new Tipocaratula object populated from the query conditions when no match is found
 *
 * @method     Tipocaratula findOneById(string $id) Return the first Tipocaratula filtered by the id column
 * @method     Tipocaratula findOneByDescripcion(string $descripcion) Return the first Tipocaratula filtered by the descripcion column
 *
 * @method     array findById(string $id) Return Tipocaratula objects filtered by the id column
 * @method     array findByDescripcion(string $descripcion) Return Tipocaratula objects filtered by the descripcion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTipocaratulaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseTipocaratulaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Tipocaratula', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TipocaratulaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TipocaratulaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TipocaratulaQuery) {
			return $criteria;
		}
		$query = new TipocaratulaQuery();
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
	 * @return    Tipocaratula|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = TipocaratulaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    TipocaratulaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TipocaratulaPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TipocaratulaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TipocaratulaPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TipocaratulaQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TipocaratulaPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the descripcion column
	 * 
	 * @param     string $descripcion The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TipocaratulaQuery The current query, for fluid interface
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
		return $this->addUsingAlias(TipocaratulaPeer::DESCRIPCION, $descripcion, $comparison);
	}

	/**
	 * Filter the query by a related Impresion object
	 *
	 * @param     Impresion $impresion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TipocaratulaQuery The current query, for fluid interface
	 */
	public function filterByImpresion($impresion, $comparison = null)
	{
		return $this
			->addUsingAlias(TipocaratulaPeer::ID, $impresion->getIdTipocaratula(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Impresion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TipocaratulaQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Tipocaratula $tipocaratula Object to remove from the list of results
	 *
	 * @return    TipocaratulaQuery The current query, for fluid interface
	 */
	public function prune($tipocaratula = null)
	{
		if ($tipocaratula) {
			$this->addUsingAlias(TipocaratulaPeer::ID, $tipocaratula->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseTipocaratulaQuery
