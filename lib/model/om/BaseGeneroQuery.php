<?php


/**
 * Base class that represents a query for the 'genero' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Thu Feb 20 13:36:21 2014
 *
 * @method     GeneroQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     GeneroQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 *
 * @method     GeneroQuery groupById() Group by the id column
 * @method     GeneroQuery groupByDescripcion() Group by the descripcion column
 *
 * @method     GeneroQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     GeneroQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     GeneroQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     GeneroQuery leftJoinLibro($relationAlias = null) Adds a LEFT JOIN clause to the query using the Libro relation
 * @method     GeneroQuery rightJoinLibro($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Libro relation
 * @method     GeneroQuery innerJoinLibro($relationAlias = null) Adds a INNER JOIN clause to the query using the Libro relation
 *
 * @method     Genero findOne(PropelPDO $con = null) Return the first Genero matching the query
 * @method     Genero findOneOrCreate(PropelPDO $con = null) Return the first Genero matching the query, or a new Genero object populated from the query conditions when no match is found
 *
 * @method     Genero findOneById(int $id) Return the first Genero filtered by the id column
 * @method     Genero findOneByDescripcion(string $descripcion) Return the first Genero filtered by the descripcion column
 *
 * @method     array findById(int $id) Return Genero objects filtered by the id column
 * @method     array findByDescripcion(string $descripcion) Return Genero objects filtered by the descripcion column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseGeneroQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseGeneroQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Genero', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new GeneroQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    GeneroQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof GeneroQuery) {
			return $criteria;
		}
		$query = new GeneroQuery();
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
	 * @return    Genero|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = GeneroPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(GeneroPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(GeneroPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(GeneroPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the descripcion column
	 * 
	 * @param     string $descripcion The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GeneroQuery The current query, for fluid interface
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
		return $this->addUsingAlias(GeneroPeer::DESCRIPCION, $descripcion, $comparison);
	}

	/**
	 * Filter the query by a related Libro object
	 *
	 * @param     Libro $libro  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function filterByLibro($libro, $comparison = null)
	{
		return $this
			->addUsingAlias(GeneroPeer::ID, $libro->getIdGenero(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Libro relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function joinLibro($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Libro');
		
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
			$this->addJoinObject($join, 'Libro');
		}
		
		return $this;
	}

	/**
	 * Use the Libro relation Libro object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LibroQuery A secondary query class using the current class as primary query
	 */
	public function useLibroQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinLibro($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Libro', 'LibroQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Genero $genero Object to remove from the list of results
	 *
	 * @return    GeneroQuery The current query, for fluid interface
	 */
	public function prune($genero = null)
	{
		if ($genero) {
			$this->addUsingAlias(GeneroPeer::ID, $genero->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseGeneroQuery
