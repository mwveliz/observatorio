<?php


/**
 * Base class that represents a query for the 'autor' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Thu Apr 10 10:28:43 2014
 *
 * @method     AutorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AutorQuery orderByFichaAutor($order = Criteria::ASC) Order by the ficha_autor column
 * @method     AutorQuery orderByInedito($order = Criteria::ASC) Order by the inedito column
 * @method     AutorQuery orderBySexo($order = Criteria::ASC) Order by the sexo column
 * @method     AutorQuery orderByNacionalidad($order = Criteria::ASC) Order by the nacionalidad column
 * @method     AutorQuery orderByFechaNacimiento($order = Criteria::ASC) Order by the fecha_nacimiento column
 * @method     AutorQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     AutorQuery orderByApellido($order = Criteria::ASC) Order by the apellido column
 * @method     AutorQuery orderByVive($order = Criteria::ASC) Order by the vive column
 * @method     AutorQuery orderByTipoautor($order = Criteria::ASC) Order by the tipoautor column
 *
 * @method     AutorQuery groupById() Group by the id column
 * @method     AutorQuery groupByFichaAutor() Group by the ficha_autor column
 * @method     AutorQuery groupByInedito() Group by the inedito column
 * @method     AutorQuery groupBySexo() Group by the sexo column
 * @method     AutorQuery groupByNacionalidad() Group by the nacionalidad column
 * @method     AutorQuery groupByFechaNacimiento() Group by the fecha_nacimiento column
 * @method     AutorQuery groupByNombre() Group by the nombre column
 * @method     AutorQuery groupByApellido() Group by the apellido column
 * @method     AutorQuery groupByVive() Group by the vive column
 * @method     AutorQuery groupByTipoautor() Group by the tipoautor column
 *
 * @method     AutorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AutorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AutorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AutorQuery leftJoinAutorRelatedByTipoautor($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutorRelatedByTipoautor relation
 * @method     AutorQuery rightJoinAutorRelatedByTipoautor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutorRelatedByTipoautor relation
 * @method     AutorQuery innerJoinAutorRelatedByTipoautor($relationAlias = null) Adds a INNER JOIN clause to the query using the AutorRelatedByTipoautor relation
 *
 * @method     AutorQuery leftJoinAutorRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutorRelatedById relation
 * @method     AutorQuery rightJoinAutorRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutorRelatedById relation
 * @method     AutorQuery innerJoinAutorRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the AutorRelatedById relation
 *
 * @method     AutorQuery leftJoinLibro($relationAlias = null) Adds a LEFT JOIN clause to the query using the Libro relation
 * @method     AutorQuery rightJoinLibro($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Libro relation
 * @method     AutorQuery innerJoinLibro($relationAlias = null) Adds a INNER JOIN clause to the query using the Libro relation
 *
 * @method     Autor findOne(PropelPDO $con = null) Return the first Autor matching the query
 * @method     Autor findOneOrCreate(PropelPDO $con = null) Return the first Autor matching the query, or a new Autor object populated from the query conditions when no match is found
 *
 * @method     Autor findOneById(string $id) Return the first Autor filtered by the id column
 * @method     Autor findOneByFichaAutor(string $ficha_autor) Return the first Autor filtered by the ficha_autor column
 * @method     Autor findOneByInedito(boolean $inedito) Return the first Autor filtered by the inedito column
 * @method     Autor findOneBySexo(boolean $sexo) Return the first Autor filtered by the sexo column
 * @method     Autor findOneByNacionalidad(string $nacionalidad) Return the first Autor filtered by the nacionalidad column
 * @method     Autor findOneByFechaNacimiento(int $fecha_nacimiento) Return the first Autor filtered by the fecha_nacimiento column
 * @method     Autor findOneByNombre(string $nombre) Return the first Autor filtered by the nombre column
 * @method     Autor findOneByApellido(string $apellido) Return the first Autor filtered by the apellido column
 * @method     Autor findOneByVive(boolean $vive) Return the first Autor filtered by the vive column
 * @method     Autor findOneByTipoautor(int $tipoautor) Return the first Autor filtered by the tipoautor column
 *
 * @method     array findById(string $id) Return Autor objects filtered by the id column
 * @method     array findByFichaAutor(string $ficha_autor) Return Autor objects filtered by the ficha_autor column
 * @method     array findByInedito(boolean $inedito) Return Autor objects filtered by the inedito column
 * @method     array findBySexo(boolean $sexo) Return Autor objects filtered by the sexo column
 * @method     array findByNacionalidad(string $nacionalidad) Return Autor objects filtered by the nacionalidad column
 * @method     array findByFechaNacimiento(int $fecha_nacimiento) Return Autor objects filtered by the fecha_nacimiento column
 * @method     array findByNombre(string $nombre) Return Autor objects filtered by the nombre column
 * @method     array findByApellido(string $apellido) Return Autor objects filtered by the apellido column
 * @method     array findByVive(boolean $vive) Return Autor objects filtered by the vive column
 * @method     array findByTipoautor(int $tipoautor) Return Autor objects filtered by the tipoautor column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseAutorQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAutorQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Autor', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AutorQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AutorQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AutorQuery) {
			return $criteria;
		}
		$query = new AutorQuery();
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
	 * @return    Autor|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AutorPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AutorPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AutorPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AutorPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the ficha_autor column
	 * 
	 * @param     string $fichaAutor The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByFichaAutor($fichaAutor = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fichaAutor)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fichaAutor)) {
				$fichaAutor = str_replace('*', '%', $fichaAutor);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutorPeer::FICHA_AUTOR, $fichaAutor, $comparison);
	}

	/**
	 * Filter the query on the inedito column
	 * 
	 * @param     boolean|string $inedito The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByInedito($inedito = null, $comparison = null)
	{
		if (is_string($inedito)) {
			$inedito = in_array(strtolower($inedito), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(AutorPeer::INEDITO, $inedito, $comparison);
	}

	/**
	 * Filter the query on the sexo column
	 * 
	 * @param     boolean|string $sexo The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterBySexo($sexo = null, $comparison = null)
	{
		if (is_string($sexo)) {
			$sexo = in_array(strtolower($sexo), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(AutorPeer::SEXO, $sexo, $comparison);
	}

	/**
	 * Filter the query on the nacionalidad column
	 * 
	 * @param     string $nacionalidad The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByNacionalidad($nacionalidad = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nacionalidad)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nacionalidad)) {
				$nacionalidad = str_replace('*', '%', $nacionalidad);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutorPeer::NACIONALIDAD, $nacionalidad, $comparison);
	}

	/**
	 * Filter the query on the fecha_nacimiento column
	 * 
	 * @param     int|array $fechaNacimiento The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByFechaNacimiento($fechaNacimiento = null, $comparison = null)
	{
		if (is_array($fechaNacimiento)) {
			$useMinMax = false;
			if (isset($fechaNacimiento['min'])) {
				$this->addUsingAlias(AutorPeer::FECHA_NACIMIENTO, $fechaNacimiento['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($fechaNacimiento['max'])) {
				$this->addUsingAlias(AutorPeer::FECHA_NACIMIENTO, $fechaNacimiento['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutorPeer::FECHA_NACIMIENTO, $fechaNacimiento, $comparison);
	}

	/**
	 * Filter the query on the nombre column
	 * 
	 * @param     string $nombre The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByNombre($nombre = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nombre)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nombre)) {
				$nombre = str_replace('*', '%', $nombre);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutorPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the apellido column
	 * 
	 * @param     string $apellido The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByApellido($apellido = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($apellido)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $apellido)) {
				$apellido = str_replace('*', '%', $apellido);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutorPeer::APELLIDO, $apellido, $comparison);
	}

	/**
	 * Filter the query on the vive column
	 * 
	 * @param     boolean|string $vive The value to use as filter.
	 *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByVive($vive = null, $comparison = null)
	{
		if (is_string($vive)) {
			$vive = in_array(strtolower($vive), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
		}
		return $this->addUsingAlias(AutorPeer::VIVE, $vive, $comparison);
	}

	/**
	 * Filter the query on the tipoautor column
	 * 
	 * @param     int|array $tipoautor The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByTipoautor($tipoautor = null, $comparison = null)
	{
		if (is_array($tipoautor)) {
			$useMinMax = false;
			if (isset($tipoautor['min'])) {
				$this->addUsingAlias(AutorPeer::TIPOAUTOR, $tipoautor['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tipoautor['max'])) {
				$this->addUsingAlias(AutorPeer::TIPOAUTOR, $tipoautor['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutorPeer::TIPOAUTOR, $tipoautor, $comparison);
	}

	/**
	 * Filter the query by a related Autor object
	 *
	 * @param     Autor $autor  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByAutorRelatedByTipoautor($autor, $comparison = null)
	{
		return $this
			->addUsingAlias(AutorPeer::TIPOAUTOR, $autor->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the AutorRelatedByTipoautor relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function joinAutorRelatedByTipoautor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AutorRelatedByTipoautor');
		
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
			$this->addJoinObject($join, 'AutorRelatedByTipoautor');
		}
		
		return $this;
	}

	/**
	 * Use the AutorRelatedByTipoautor relation Autor object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutorQuery A secondary query class using the current class as primary query
	 */
	public function useAutorRelatedByTipoautorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinAutorRelatedByTipoautor($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutorRelatedByTipoautor', 'AutorQuery');
	}

	/**
	 * Filter the query by a related Autor object
	 *
	 * @param     Autor $autor  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByAutorRelatedById($autor, $comparison = null)
	{
		return $this
			->addUsingAlias(AutorPeer::ID, $autor->getTipoautor(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the AutorRelatedById relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function joinAutorRelatedById($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AutorRelatedById');
		
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
			$this->addJoinObject($join, 'AutorRelatedById');
		}
		
		return $this;
	}

	/**
	 * Use the AutorRelatedById relation Autor object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutorQuery A secondary query class using the current class as primary query
	 */
	public function useAutorRelatedByIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinAutorRelatedById($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutorRelatedById', 'AutorQuery');
	}

	/**
	 * Filter the query by a related Libro object
	 *
	 * @param     Libro $libro  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function filterByLibro($libro, $comparison = null)
	{
		return $this
			->addUsingAlias(AutorPeer::ID, $libro->getIdAutor(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Libro relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutorQuery The current query, for fluid interface
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
	 * @param     Autor $autor Object to remove from the list of results
	 *
	 * @return    AutorQuery The current query, for fluid interface
	 */
	public function prune($autor = null)
	{
		if ($autor) {
			$this->addUsingAlias(AutorPeer::ID, $autor->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAutorQuery