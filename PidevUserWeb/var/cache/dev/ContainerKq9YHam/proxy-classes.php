<?php

namespace ContainerKq9YHam;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder21e04 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera194c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties120c5 = [
        
    ];

    public function getConnection()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getConnection', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getMetadataFactory', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getExpressionBuilder', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'beginTransaction', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getCache', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getCache();
    }

    public function transactional($func)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'transactional', array('func' => $func), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'wrapInTransaction', array('func' => $func), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'commit', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->commit();
    }

    public function rollback()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'rollback', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getClassMetadata', array('className' => $className), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'createQuery', array('dql' => $dql), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'createNamedQuery', array('name' => $name), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'createQueryBuilder', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'flush', array('entity' => $entity), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'clear', array('entityName' => $entityName), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->clear($entityName);
    }

    public function close()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'close', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->close();
    }

    public function persist($entity)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'persist', array('entity' => $entity), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'remove', array('entity' => $entity), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'refresh', array('entity' => $entity), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'detach', array('entity' => $entity), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'merge', array('entity' => $entity), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getRepository', array('entityName' => $entityName), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'contains', array('entity' => $entity), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getEventManager', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getConfiguration', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'isOpen', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getUnitOfWork', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getProxyFactory', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'initializeObject', array('obj' => $obj), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'getFilters', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'isFiltersStateClean', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'hasFilters', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return $this->valueHolder21e04->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera194c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder21e04) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder21e04 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder21e04->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__get', ['name' => $name], $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        if (isset(self::$publicProperties120c5[$name])) {
            return $this->valueHolder21e04->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e04;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder21e04;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e04;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder21e04;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__isset', array('name' => $name), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e04;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder21e04;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__unset', array('name' => $name), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e04;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder21e04;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__clone', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        $this->valueHolder21e04 = clone $this->valueHolder21e04;
    }

    public function __sleep()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__sleep', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return array('valueHolder21e04');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera194c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera194c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'initializeProxy', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder21e04;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder21e04;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder21e04 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera194c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties120c5 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        if ($this->valueHolder21e04 === $returnValue = $this->valueHolder21e04->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializera194c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder21e04) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder21e04 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__get', ['name' => $name], $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        if (isset(self::$publicProperties120c5[$name])) {
            return $this->valueHolder21e04->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e04;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder21e04;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e04;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder21e04;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__isset', array('name' => $name), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e04;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder21e04;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__unset', array('name' => $name), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21e04;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder21e04;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__clone', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        $this->valueHolder21e04 = clone $this->valueHolder21e04;
    }

    public function __sleep()
    {
        $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, '__sleep', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;

        return array('valueHolder21e04');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera194c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera194c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera194c && ($this->initializera194c->__invoke($valueHolder21e04, $this, 'initializeProxy', array(), $this->initializera194c) || 1) && $this->valueHolder21e04 = $valueHolder21e04;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder21e04;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder21e04;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
