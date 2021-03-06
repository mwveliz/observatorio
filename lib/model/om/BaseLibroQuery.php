<?php


/**
 * Base class that represents a query for the 'libro' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.6 on:
 *
 * Thu Feb 20 13:36:21 2014
 *
 * @method     LibroQuery orderByTitulo($order = Criteria::ASC) Order by the titulo column
 * @method     LibroQuery orderBySubtitulo($order = Criteria::ASC) Order by the subtitulo column
 * @method     LibroQuery orderByIdGenero($order = Criteria::ASC) Order by the id_genero column
 * @method     LibroQuery orderByIdTematica($order = Criteria::ASC) Order by the id_tematica column
 * @method     LibroQuery orderByIdAutor($order = Criteria::ASC) Order by the id_autor column
 * @method     LibroQuery orderByIdMateria($order = Criteria::ASC) Order by the id_materia column
 * @method     LibroQuery orderByIdTipopublicacion($order = Criteria::ASC) Order by the id_tipopublicacion column
 * @method     LibroQuery orderBySinopsis($order = Criteria::ASC) Order by the sinopsis column
 * @method     LibroQuery orderByCantidadLibro($order = Criteria::ASC) Order by the cantidad_libro column
 * @method     LibroQuery orderByCompilador($order = Criteria::ASC) Order by the compilador column
 * @method     LibroQuery orderById($order = Criteria::ASC) Order by the id column
 *
 * @method     LibroQuery groupByTitulo() Group by the titulo column
 * @method     LibroQuery groupBySubtitulo() Group by the subtitulo column
 * @method     LibroQuery groupByIdGenero() Group by the id_genero column
 * @method     LibroQuery groupByIdTematica() Group by the id_tematica column
 * @method     LibroQuery groupByIdAutor() Group by the id_autor column
 * @method     LibroQuery groupByIdMateria() Group by the id_materia column
 * @method     LibroQuery groupByIdTipopublicacion() Group by the id_tipopublicacion column
 * @method     LibroQuery groupBySinopsis() Group by the sinopsis column
 * @method     LibroQuery groupByCantidadLibro() Group by the cantidad_libro column
 * @method     LibroQuery groupByCompilador() Group by the compilador column
 * @method     LibroQuery groupById() Group by the id column
 *
 * @method     LibroQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LibroQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LibroQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LibroQuery leftJoinGenero($relationAlias = null) Adds a LEFT JOIN clause to the query using the Genero relation
 * @method     LibroQuery rightJoinGenero($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Genero relation
 * @method     LibroQuery innerJoinGenero($relationAlias = null) Adds a INNER JOIN clause to the query using the Genero relation
 *
 * @method     LibroQuery leftJoinTematica($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tematica relation
 * @method     LibroQuery rightJoinTematica($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tematica relation
 * @method     LibroQuery innerJoinTematica($relationAlias = null) Adds a INNER JOIN clause to the query using the Tematica relation
 *
 * @method     LibroQuery leftJoinAutor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Autor relation
 * @method     LibroQuery rightJoinAutor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Autor relation
 * @method     LibroQuery innerJoinAutor($relationAlias = null) Adds a INNER JOIN clause to the query using the Autor relation
 *
 * @method     LibroQuery leftJoinMateria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Materia relation
 * @method     LibroQuery rightJoinMateria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Materia relation
 * @method     LibroQuery innerJoinMateria($relationAlias = null) Adds a INNER JOIN clause to the query using the Materia relation
 *
 * @method     LibroQuery leftJoinTipopublicacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipopublicacion relation
 * @method     LibroQuery rightJoinTipopublicacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipopublicacion relation
 * @method     LibroQuery innerJoinTipopublicacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipopublicacion relation
 *
 * @method     Libro findOne(PropelPDO $con = null) Return the first Libro matching the query
 * @method     Libro findOneOrCreate(PropelPDO $con = null) Return the first Libro matching the query, or a new Libro object populated from the query conditions when no match is found
 *
 * @method     Libro findOneByTitulo(string $titulo) Return the first Libro filtered by the titulo column
 * @method     Libro findOneBySubtitulo(string $subtitulo) Return the first Libro filtered by the subtitulo column
 * @method     Libro findOneByIdGenero(int $id_genero) Return the first Libro filtered by the id_genero column
 * @method     Libro findOneByIdTematica(int $id_tematica) Return the first Libro filtered by the id_tematica column
 * @method     Libro findOneByIdAutor(int $id_autor) Return the first Libro filtered by the id_autor column
 * @method     Libro findOneByIdMateria(int $id_materia) Return the first Libro filtered by the id_materia column
 * @method     Libro findOneByIdTipopublicacion(int $id_tipopublicacion) Return the first Libro filtered by the id_tipopublicacion column
 * @method     Libro findOneBySinopsis(string $sinopsis) Return the first Libro filtered by the sinopsis column
 * @method     Libro findOneByCantidadLibro(string $cantidad_libro) Return the first Libro filtered by the cantidad_libro column
 * @method     Libro findOneByCompilador(string $compilador) Return the first Libro filtered by the compilador column
 * @method     Libro findOneById(string $id) Return the first Libro filtered by the id column
 *
 * @method     array findByTitulo(string $titulo) Return Libro objects filtered by the titulo column
 * @method     array findBySubtitulo(string $subtitulo) Return Libro objects filtered by the subtitulo column
 * @method     array findByIdGenero(int $id_genero) Return Libro objects filtered by the id_genero column
 * @method     array findByIdTematica(int $id_tematica) Return Libro objects filtered by the id_tematica column
 * @method     array findByIdAutor(int $id_autor) Return Libro objects filtered by the id_autor column
 * @method     array findByIdMateria(int $id_materia) Return Libro objects filtered by the id_materia column
 * @method     array findByIdTipopublicacion(int $id_tipopublicacion) Return Libro objects filtered by the id_tipopublicacion column
 * @method     array findBySinopsis(string $sinopsis) Return Libro objects filtered by the sinopsis column
 * @method     array findByCantidadLibro(string $cantidad_libro) Return Libro objects filtered by the cantidad_libro column
 * @method     array findByCompilador(string $compilador) Return Libro objects filtered by the compilador column
 * @method     array findById(string $id) Return Libro objects filtered by the id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseLibroQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLibroQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Libro', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LibroQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LibroQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LibroQuery) {
			return $criteria;
		}
		$query = new LibroQuery();
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
	 * @return    Libro|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LibroPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LibroPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LibroPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the titulo column
	 * 
	 * @param     string $titulo The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByTitulo($titulo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($titulo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $titulo)) {
				$titulo = str_replace('*', '%', $titulo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LibroPeer::TITULO, $titulo, $comparison);
	}

	/**
	 * Filter the query on the subtitulo column
	 * 
	 * @param     string $subtitulo The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterBySubtitulo($subtitulo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subtitulo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subtitulo)) {
				$subtitulo = str_replace('*', '%', $subtitulo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LibroPeer::SUBTITULO, $subtitulo, $comparison);
	}

	/**
	 * Filter the query on the id_genero column
	 * 
	 * @param     int|array $idGenero The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByIdGenero($idGenero = null, $comparison = null)
	{
		if (is_array($idGenero)) {
			$useMinMax = false;
			if (isset($idGenero['min'])) {
				$this->addUsingAlias(LibroPeer::ID_GENERO, $idGenero['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idGenero['max'])) {
				$this->addUsingAlias(LibroPeer::ID_GENERO, $idGenero['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LibroPeer::ID_GENERO, $idGenero, $comparison);
	}

	/**
	 * Filter the query on the id_tematica column
	 * 
	 * @param     int|array $idTematica The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByIdTematica($idTematica = null, $comparison = null)
	{
		if (is_array($idTematica)) {
			$useMinMax = false;
			if (isset($idTematica['min'])) {
				$this->addUsingAlias(LibroPeer::ID_TEMATICA, $idTematica['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTematica['max'])) {
				$this->addUsingAlias(LibroPeer::ID_TEMATICA, $idTematica['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LibroPeer::ID_TEMATICA, $idTematica, $comparison);
	}

	/**
	 * Filter the query on the id_autor column
	 * 
	 * @param     int|array $idAutor The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByIdAutor($idAutor = null, $comparison = null)
	{
		if (is_array($idAutor)) {
			$useMinMax = false;
			if (isset($idAutor['min'])) {
				$this->addUsingAlias(LibroPeer::ID_AUTOR, $idAutor['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idAutor['max'])) {
				$this->addUsingAlias(LibroPeer::ID_AUTOR, $idAutor['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LibroPeer::ID_AUTOR, $idAutor, $comparison);
	}

	/**
	 * Filter the query on the id_materia column
	 * 
	 * @param     int|array $idMateria The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByIdMateria($idMateria = null, $comparison = null)
	{
		if (is_array($idMateria)) {
			$useMinMax = false;
			if (isset($idMateria['min'])) {
				$this->addUsingAlias(LibroPeer::ID_MATERIA, $idMateria['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idMateria['max'])) {
				$this->addUsingAlias(LibroPeer::ID_MATERIA, $idMateria['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LibroPeer::ID_MATERIA, $idMateria, $comparison);
	}

	/**
	 * Filter the query on the id_tipopublicacion column
	 * 
	 * @param     int|array $idTipopublicacion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByIdTipopublicacion($idTipopublicacion = null, $comparison = null)
	{
		if (is_array($idTipopublicacion)) {
			$useMinMax = false;
			if (isset($idTipopublicacion['min'])) {
				$this->addUsingAlias(LibroPeer::ID_TIPOPUBLICACION, $idTipopublicacion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($idTipopublicacion['max'])) {
				$this->addUsingAlias(LibroPeer::ID_TIPOPUBLICACION, $idTipopublicacion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(LibroPeer::ID_TIPOPUBLICACION, $idTipopublicacion, $comparison);
	}

	/**
	 * Filter the query on the sinopsis column
	 * 
	 * @param     string $sinopsis The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterBySinopsis($sinopsis = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sinopsis)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sinopsis)) {
				$sinopsis = str_replace('*', '%', $sinopsis);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LibroPeer::SINOPSIS, $sinopsis, $comparison);
	}

	/**
	 * Filter the query on the cantidad_libro column
	 * 
	 * @param     string $cantidadLibro The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByCantidadLibro($cantidadLibro = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cantidadLibro)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cantidadLibro)) {
				$cantidadLibro = str_replace('*', '%', $cantidadLibro);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LibroPeer::CANTIDAD_LIBRO, $cantidadLibro, $comparison);
	}

	/**
	 * Filter the query on the compilador column
	 * 
	 * @param     string $compilador The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByCompilador($compilador = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($compilador)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $compilador)) {
				$compilador = str_replace('*', '%', $compilador);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LibroPeer::COMPILADOR, $compilador, $comparison);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     string|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LibroPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query by a related Genero object
	 *
	 * @param     Genero $genero  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByGenero($genero, $comparison = null)
	{
		return $this
			->addUsingAlias(LibroPeer::ID_GENERO, $genero->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Genero relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function joinGenero($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Genero');
		
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
			$this->addJoinObject($join, 'Genero');
		}
		
		return $this;
	}

	/**
	 * Use the Genero relation Genero object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    GeneroQuery A secondary query class using the current class as primary query
	 */
	public function useGeneroQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinGenero($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Genero', 'GeneroQuery');
	}

	/**
	 * Filter the query by a related Tematica object
	 *
	 * @param     Tematica $tematica  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByTematica($tematica, $comparison = null)
	{
		return $this
			->addUsingAlias(LibroPeer::ID_TEMATICA, $tematica->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Tematica relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function joinTematica($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Tematica');
		
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
			$this->addJoinObject($join, 'Tematica');
		}
		
		return $this;
	}

	/**
	 * Use the Tematica relation Tematica object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TematicaQuery A secondary query class using the current class as primary query
	 */
	public function useTematicaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTematica($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Tematica', 'TematicaQuery');
	}

	/**
	 * Filter the query by a related Autor object
	 *
	 * @param     Autor $autor  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByAutor($autor, $comparison = null)
	{
		return $this
			->addUsingAlias(LibroPeer::ID_AUTOR, $autor->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Autor relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function joinAutor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Autor');
		
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
			$this->addJoinObject($join, 'Autor');
		}
		
		return $this;
	}

	/**
	 * Use the Autor relation Autor object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutorQuery A secondary query class using the current class as primary query
	 */
	public function useAutorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinAutor($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Autor', 'AutorQuery');
	}

	/**
	 * Filter the query by a related Materia object
	 *
	 * @param     Materia $materia  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByMateria($materia, $comparison = null)
	{
		return $this
			->addUsingAlias(LibroPeer::ID_MATERIA, $materia->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Materia relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function joinMateria($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Materia');
		
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
			$this->addJoinObject($join, 'Materia');
		}
		
		return $this;
	}

	/**
	 * Use the Materia relation Materia object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    MateriaQuery A secondary query class using the current class as primary query
	 */
	public function useMateriaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinMateria($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Materia', 'MateriaQuery');
	}

	/**
	 * Filter the query by a related Tipopublicacion object
	 *
	 * @param     Tipopublicacion $tipopublicacion  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function filterByTipopublicacion($tipopublicacion, $comparison = null)
	{
		return $this
			->addUsingAlias(LibroPeer::ID_TIPOPUBLICACION, $tipopublicacion->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Tipopublicacion relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function joinTipopublicacion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Tipopublicacion');
		
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
			$this->addJoinObject($join, 'Tipopublicacion');
		}
		
		return $this;
	}

	/**
	 * Use the Tipopublicacion relation Tipopublicacion object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TipopublicacionQuery A secondary query class using the current class as primary query
	 */
	public function useTipopublicacionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinTipopublicacion($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Tipopublicacion', 'TipopublicacionQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Libro $libro Object to remove from the list of results
	 *
	 * @return    LibroQuery The current query, for fluid interface
	 */
	public function prune($libro = null)
	{
		if ($libro) {
			$this->addUsingAlias(LibroPeer::ID, $libro->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLibroQuery
