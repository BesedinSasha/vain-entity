<?php
/**
 * Created by PhpStorm.
 * User: allflame
 * Date: 5/5/16
 * Time: 9:56 AM
 */

namespace Vain\Entity\Event\Operation;

use Vain\Entity\EntityInterface;
use Vain\Entity\Event\EntityEvent;
use Vain\Event\Dispatcher\EventDispatcherInterface;
use Vain\Operation\OperationInterface;
use Vain\Operation\Result\Successful\SuccessfulOperationResult;

class EntityEventOperation implements OperationInterface
{
    private $eventDispatcher;
    
    private $name;
    
    private $entity;

    /**
     * EventOperation constructor.
     * @param EventDispatcherInterface $eventDispatcher
     * @param $name
     * @param EntityInterface $entity
     */
    public function __construct(EventDispatcherInterface $eventDispatcher, $name, EntityInterface $entity)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->name = $name;
        $this->entity = $entity;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $this->eventDispatcher->dispatch(new EntityEvent($this->name, $this->entity));

        return new SuccessfulOperationResult();
    }
}